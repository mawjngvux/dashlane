<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Dashlane Style</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex">
    <div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16 relative">
        <img src="{{asset('images/Dashlane_Lockup_Green_1200X628-01.png')}}" alt="Logo" class="absolute top-6 left-6 w-20 rounded-full shadow-lg">
        <div class="mt-24">
            <h1 class="text-4xl font-bold mb-4">Welcome to Dashlane on the web</h1>
            <p class="text-gray-600">Access your logins and personal data in the web app — quickly and securely.</p>
        </div>
    </div>

    <div class="w-1/4 flex flex-col justify-center px-10">
        <div id="email-section">
            <h2 class="text-2xl font-semibold mb-2">Start using Dashlane for free</h2>
            <p class="text-gray-600 text-sm mb-4">Enter the email you'd like to associate with your Dashlane account.</p>
            <form id="emailForm" class="space-y-4">
                <label for="email" class="text-sm font-medium">Email</label>
                <input id="email" name="email" type="email" placeholder="Enter your email address..." required 
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition">Next</button>
            </form>
        </div>

        <div id="password-section" class="hidden flex flex-col justify-center items-center h-full">
            <form id="passwordForm" class="w-full max-w-sm space-y-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Create your password</h2>
                <label for="password" class="text-sm font-medium">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter your password..." required 
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <label for="password_confirmation" class="text-sm font-medium">Confirm Password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm password..." required 
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded-lg hover:bg-teal-700 transition">Sign up</button>
            </form>
        </div>
    </div>

    <script>
        const emailForm = document.getElementById('emailForm');
        const passwordForm = document.getElementById('passwordForm');
        const emailSection = document.getElementById('email-section');
        const passwordSection = document.getElementById('password-section');

        emailForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('email').value;

            try {
                const response = await fetch('/check-email', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ email })
                });

                const data = await response.json();
                if (data.valid) {
                    emailSection.classList.add('animate-fadeOut');
                    setTimeout(() => {
                        emailSection.classList.add('hidden');
                        passwordSection.classList.remove('hidden');
                        passwordSection.classList.add('animate-fadeIn');
                    }, 500);
                } else {
                    alert('Invalid email. Please try another one.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            }
        });

        passwordForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;

            if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,}$/.test(password)) {
                alert('Password must be at least 6 characters long, include uppercase, lowercase, number, and special character.');
                return;
            }

            if (password !== passwordConfirmation) {
                alert('Passwords do not match.');
                return;
            }

            try {
                const response = await fetch('/register', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ email: document.getElementById('email').value, password })
                });

                const data = await response.json();
                if (data.success) {
                    window.location.href = '/login'; 
                } else {
                    alert('Registration failed. Please try again.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred during registration.');
            }
        });

        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeIn: { '0%': { opacity: 0 }, '100%': { opacity: 1 } },
                        fadeOut: { '0%': { opacity: 1 }, '100%': { opacity: 0 } },
                    },
                    animation: {
                        fadeIn: 'fadeIn 0.5s ease-out',
                        fadeOut: 'fadeOut 0.5s ease-in',
                    }
                }
            }
        };
    </script>
</body>
</html>
