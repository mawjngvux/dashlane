<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Login - Dashlane Style' }}</title>
  
  <script src="https://cdn.tailwindcss.com"></script>


  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'sans-serif'] },
          colors: {
            primary: '#96999e',
            accent: '#3dccc7',
            dark: '#2e2e2e',
            background: '#f5f6f8',
            secondary: '#96999e',
          },
        },
      },
    };
  </script>
  
</head>
<body class="bg-background min-h-screen flex items-center justify-center font-sans">
  @yield('content')
</body>
</html>
