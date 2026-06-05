<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhirendra Tripathi | Portfolio</title>
    <script>
        (function () {
            var saved = localStorage.getItem('portfolio-theme');
            var theme = saved || (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>
    <!-- Link to our new modern css files -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myportfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/experience.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/effects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    <!-- Global Styles & Smooth Scrolling -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <!-- Include the Navbar Blade Component -->
    @include('navbar')

    <!-- Main Content -->
    <main class="hero-section" id="home">
        <div class="hero-grid">
            <div class="hero-copy" data-reveal="left">
                <p class="hero-intro">Hello</p>
                <h1 class="hero-title gradient-text">I'm Dhirendra Tripathi</h1>
                <p class="hero-subtitle">A passionate developer creating modern, beautiful, and dynamic web experiences.</p>

                <div class="code-card glow-card">
                    <div class="code-card-title">// About Me</div>
                    <pre class="code-block" id="hero-code-block"><span id="typed-text"></span><span class="typing-cursor" aria-hidden="true">|</span></pre>
                </div>
            </div>

            <div class="hero-profile-panel" data-reveal="right">
                <div class="hero-profile-glow pulse-glow"></div>
                <div class="profile-frame glow-card">
                    <div id="profilePreview" class="hero-profile-picture" style="background-image: url('{{ asset('images/dk.jpg.png') }}');"></div>
                </div>
                <div class="social-ring">
                    <a href="https://www.linkedin.com/in/dhirendra-tripathi-a7441a2a2/" data-tooltip="LinkedIn" target="_blank" rel="noopener">in</a>
                    <a href="https://github.com/dhirendratripathi45?tab=repositories" data-tooltip="GitHub" target="_blank" rel="noopener">GH</a>
                    <a href="https://www.facebook.com/" data-tooltip="Facebook" target="_blank" rel="noopener">fb</a>
                </div>
            </div>
        </div>

       
    </main>

    <!-- About Section -->
    @include('about')

    <!-- Experience Section -->
    @include('experience')

    <!-- Projects Section -->
    @include('projects')

    <!-- Lifestyle Section -->
    @include('services')

    <!-- Contact Me Section -->
    @include('contactme')

    <!-- Include the Footer Blade Component -->
    @include('footer')

    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>

</html>