<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Fikri - Portfolio')</title>

    {{-- SEO & Open Graph --}}
    <meta name="description" content="@yield('meta_description', 'Portfolio Web Developer & Software Engineer')">
    <meta property="og:title" content="@yield('title', 'Fikri - Portfolio')">
    <meta property="og:description" content="@yield('meta_description', 'Portfolio Web Developer & Software Engineer')">
    <meta property="og:type" content="website">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Google Fonts Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Laravel Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>

<body class="bg-background text-[#F5F5F5] font-['Poppins'] antialiased selection:bg-indigo-500 selection:text-white min-h-screen flex flex-col justify-between overflow-x-hidden">

    @yield('content')

    @stack('scripts')
</body>

</html>