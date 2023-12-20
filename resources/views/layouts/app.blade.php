<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eventica')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<header class="header">
        <h3 class="title">Eventica</h3>
        
        <div class="icon" onclick="toggleMenu()">
            <div class="bar "></div>
            <div class="bar "></div>
            <div class="bar "></div>
        </div>
    <div class="hamburger-menu">
        <ul id="hamburger-menu">
            <li><a href="{{ route('sponsors') }}">Sponsori</a></li>
            <li><a href="{{ route('parteneri') }}">Parteneri</a></li>
            <li><a href="{{ route('events') }}">Evenimente</a></li>
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
    </div>

    <div class="top-right-menu">
        <a href="{{ route('home') }}">Acasă</a>
        <a href="{{ route('contul_meu') }}">Contul meu</a>
        
    </div>

<script>
        
    function toggleMenu() {
        var menu = document.querySelector('.hamburger-menu');
        menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
        console.log("Butonul a fost apăsat!")
    }

</script>
</header>
    <div class="container">
        @yield('content')
        @yield('contact')
    </div>

    <footer>
        
    </footer>

    
</body>
</html>
