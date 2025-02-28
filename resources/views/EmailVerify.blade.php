<p>Dear {{ $user->name }},</p>

<p>Thank you for registering! Please verify your email by clicking the link below:</p>

<p>
    <a href="{{ route('verifyEmail', $user->verification_token) }}">
        Click here to verify your email
    </a>
</p>

<p>If you did not sign up, please ignore this email.</p>
