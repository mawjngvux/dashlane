<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function showLogin(){
        if (Auth::id() > 0) {
            return redirect()->route('showCredentials');
        }
        return view('auth.Login');
    }

    function showRegister(){
        return view('auth.Register');
    }

    function showForgotPassword(){
        return view('auth.ForgotPassword');
    }

    function showResetPasswordForm($token){
        return view('auth.ResetPassword', ['token' => $token]);
    }

    function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ], [
            'email.unique' => 'This email is already in use.',
            'password.confirmed' => 'Confirmation password does not match.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verified_at' => null,
            'verification_token' => Str::random(40), 
        ]);

        Mail::send('emails.EmailVerify', ['user' => $user], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject("Verify your email");
        });

        return redirect()->route('login')->with('success', 'Registration successful! Please check your email to confirm your account.');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Please enter email.',
            'email.email' => 'Invalid email.',
            'password.required' => 'Please enter password.',
            'password.min' => 'Password must be at least 6 characters.',
        ]);
    
        $user = User::where('email', $request->email)->first();
        if ($user && !$user->email_verified_at) {
            return back()->withErrors(['email' => 'Please verify your email before logging in.'])->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {   
            return redirect()->route('showCredentials')->with('success', 'Logged in successfully');
        }
      
        return back()->withErrors(['email' => 'Incorrect email or password.'])->withInput();
    }    

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    function verifyEmail($token){
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Token is invalid or expired.');
        }

        $user->email_verified_at = now();
        $user->verification_token = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Email verification successful! You can log in.');
    }

    function sendResetLink(Request $request){
        $request->validate(['email' => 'required|email|exists:users,email']);
    
        $token = Str::random(60);
        
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => Hash::make($token), 'created_at' => now()]
        );
    
        $user = User::where('email', $request->email)->first();
    
        Mail::send('emails.EmailResetPassword', ['user' => $user, 'token' => $token], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Reset Your Password');
        });
    
        return back()->with('success', 'We have emailed your password reset link!');
    }

    function resetPassword(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $reset = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if (!$reset || !Hash::check($request->token, $reset->token)) {
            return back()->withErrors(['email' => 'Invalid token or email!']);
        }

        $user = User::where('email', $request->email)->first();
        $user->update(['password' => bcrypt($request->password)]);

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success', 'Your password has been reset!');
    }

    

}
