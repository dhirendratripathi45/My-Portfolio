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
                <p class="hero-subtitle">A passionate developer creating modern, beautiful, and dynamic web experiences.
                </p>

                <div class="code-card glow-card">
                    <div class="code-card-title">// About Me</div>
                    <pre class="code-block"
                        id="hero-code-block"><span id="typed-text"></span><span class="typing-cursor" aria-hidden="true">|</span></pre>
                </div>
            </div>


            <div class="hero-profile-panel" data-reveal="right">
                <div class="hero-profile-glow pulse-glow"></div>
                <div class="profile-frame glow-card">
                    <div id="profilePreview" class="hero-profile-picture"
                        style="background-image: url('{{ asset('images/dktt.jpg') }}');"></div>
                </div>
                <div class="social-ring">
                    <a href="https://www.linkedin.com/in/dhirendra-tripathi-a7441a2a2/" data-tooltip="LinkedIn"
                        target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M22.23 0H1.77C.8 0 0 .77 0 1.72v20.56C0 23.23.8 24 1.77 24h20.46c.98 0 1.77-.77 1.77-1.72V1.72C24 .77 23.2 0 22.23 0zM7.12 20.45H3.56V9h3.56v11.45zM5.34 7.43a2.06 2.06 0 1 1 0-4.13 2.06 2.06 0 0 1 0 4.13zM20.45 20.45h-3.56v-5.56c0-1.33-.03-3.03-1.85-3.03-1.84 0-2.13 1.44-2.13 2.94v5.65H9.36V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.26 2.37 4.26 5.45v6.29z" />
                        </svg>
                    </a>
                    <a href="https://github.com/dhirendratripathi45?tab=repositories" data-tooltip="GitHub"
                        target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.87 8.17 6.84 9.5.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34-.45-1.16-1.11-1.47-1.11-1.47-.91-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.87 1.52 2.34 1.07 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.92 0-1.11.38-2 1.03-2.71-.1-.25-.45-1.29.1-2.64 0 0 .84-.27 2.75 1.02.79-.22 1.65-.33 2.5-.33.85 0 1.71.11 2.5.33 1.91-1.29 2.75-1.02 2.75-1.02.55 1.35.2 2.39.1 2.64.65.71 1.03 1.6 1.03 2.71 0 3.82-2.34 4.66-4.57 4.91.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/" data-tooltip="Facebook" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 1.326v21.348C0 23.406.593 24 1.325 24H12.82v-9.294H9.692V11.1h3.128V8.41c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.716-1.794 1.763v2.313h3.587l-.467 3.607h-3.12V24h6.116C23.406 24 24 23.406 24 22.674V1.326C24 .593 23.406 0 22.675 0Z" />
                        </svg>
                    </a>
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