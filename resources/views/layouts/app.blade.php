<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Rifki Arfiansyah Shalahan</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/countup.js@2.0.7/dist/countUp.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Variabel CSS untuk Tema (Default: Dark Mode) */
        :root {
            --bg-gradient-start: #06101a;
            --bg-gradient-via: #12345a;
            --bg-gradient-end: #06101a;
            --text-primary: #e5e5e5;
            --text-secondary: #a3a3a3;
            
            /* Glassmorphism Navbar */
            --nav-bg: rgba(255, 255, 255, 0.05);
            --nav-border: rgba(255, 255, 255, 0.2);
            --nav-link-hover-bg: rgba(255, 255, 255, 0.1);
            --mobile-menu-bg: rgba(255, 255, 255, 0.1);
            --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37); 
            
            --hamburger-icon-color: #ffffff;
            --blob-opacity: 0.5;
            --card-bg: rgba(26, 26, 26, 0.3);
            --card-border: rgba(255, 255, 255, 0.1);
            --cta-bg: #e5e5e5;
            --cta-text: #1a1a1a;
            --cta-hover: #c0c0c0;
            --card-shadow-color-start: rgba(255, 255, 255, 0.1);
            --card-shadow-color-end: rgba(255, 255, 255, 0.05);
        }

        /* Variabel CSS untuk Light Mode */
        html.light {
            --bg-gradient-start: #ffffff;
            --bg-gradient-via: #d4d4d8;
            --bg-gradient-end: #ffffff;
            --text-primary: #111827;
            --text-secondary: #1f2937;
            
            /* Glassmorphism Navbar */
            --nav-bg: rgba(255, 255, 255, 0.4);
            --nav-border: rgba(0, 0, 0, 0.1);
            --nav-link-hover-bg: rgba(0, 0, 0, 0.05);
            --mobile-menu-bg: rgba(243, 244, 246, 0.8);
            --glass-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);

            --hamburger-icon-color: #111827;
            --blob-opacity: 0.7;
            --card-bg: rgba(255, 255, 255, 0.6);
            --card-border: rgba(0, 0, 0, 0.1);
            --card-shadow-color-start: rgba(0, 0, 0, 0.08);
            --card-shadow-color-end: rgba(0, 0, 0, 0.03);
            --cta-bg: #1e293b;
            --cta-text: #ffffff;
            --cta-hover: #334155;
        }

        /* Styling Dasar */
        body {
            background-image: linear-gradient(to bottom right, var(--bg-gradient-start), var(--bg-gradient-via), var(--bg-gradient-end));
            color: var(--text-primary);
            transition: background-color 0.5s ease, color 0.5s ease;
        }
        .text-theme-secondary { color: var(--text-secondary); }
        
        /* Gradien untuk Teks di Mode Gelap */
        html:not(.light) .gradient-text-dark {
            background-image: linear-gradient(to right, #a8a8a8, #e5e5e5, #a8a8a8);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Navigasi */
        .nav-link-text-active { color: var(--text-primary); }
        .nav-link-text { color: var(--text-secondary); }
        
        /* Tambahkan efek glassmorphism di sini */
        .nav-container, .mobile-menu {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: var(--glass-shadow);
        }
        
        .nav-container { 
            background-color: var(--nav-bg); 
            border: 1px solid var(--nav-border);
        }

        .nav-link { transition: all 0.2s ease-in-out; padding: 0.5rem 1rem; }
        .nav-link:hover { background: var(--nav-link-hover-bg); backdrop-filter: blur(5px); border-radius: 9999px; }
        .hamburger-line { background-color: var(--hamburger-icon-color); }
        .mobile-menu { 
            background-color: var(--mobile-menu-bg); 
            border: 1px solid var(--nav-border);
        }
        
        /* Komponen Lain */
        .social-link { display: inline-block; padding: 0.5rem; border-radius: 9999px; border: 1px solid var(--nav-border); color: var(--text-secondary); transition: all 0.2s ease-in-out; }
        .social-link:hover { color: var(--text-primary); border-color: var(--text-primary); background-color: var(--nav-link-hover-bg); transform: scale(1.1); }
        .achievement-card-theme { background-color: var(--card-bg); border: 1px solid var(--card-border); transition: all 0.3s ease-in-out; }
        .achievement-card-theme:hover { transform: translateY(-0.5rem); box-shadow: 0 10px 15px -3px rgba(229, 229, 229, 0.1), 0 4px 6px -2px rgba(229, 229, 229, 0.05); }
        .achievement-card-theme img { transition: transform 0.3s ease-in-out; }
        .achievement-card-theme:hover img { transform: scale(1.05); }
        .carousel-button-theme { background-color: rgba(0, 0, 0, 0.2); backdrop-filter: blur(4px); color: rgba(255, 255, 255, 0.8); transition: background-color 0.2s ease; }
        .carousel-button-theme:hover { background-color: rgba(0, 0, 0, 0.4); }
        html.light .carousel-button-theme { background-color: rgba(255, 255, 255, 0.3); color: rgba(0, 0, 0, 0.7); }
        html.light .carousel-button-theme:hover { background-color: rgba(255, 255, 255, 0.5); }
        .cta-button-theme { background-color: var(--cta-bg); color: var(--cta-text); transition: all 0.2s ease-in-out; }
        .cta-button-theme:hover { background-color: var(--cta-hover); transform: scale(1.05); }
        .filter-button-theme { background-color: var(--card-bg); color: var(--text-secondary); transition: all 0.3s ease; }
        .filter-button-theme.active, .filter-button-theme:hover { background-color: var(--cta-bg); color: var(--cta-text); }
        .project-card-overlay { background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0.1)); }
        html.light .project-card-overlay { background: linear-gradient(to top, rgba(0,0,0,0.7), transparent); }
        .form-input-theme { width: 100%; background-color: var(--card-bg); border: 1px solid var(--card-border); color: var(--text-primary); padding: 0.75rem 1rem; border-radius: 0.5rem; outline: none; transition: all 0.2s ease-in-out; }
        .form-input-theme:focus { border-color: #a3a3a3; box-shadow: 0 0 0 2px rgba(163, 163, 163, 0.4); }
        .form-label-theme { color: var(--text-secondary); margin-bottom: 0.5rem; display: block; }
        .hero-title-theme { color: var(--text-primary); }
        html:not(.light) .hero-title-theme { background-image: linear-gradient(to right, #a3a3a3, #e5e5e5, #a3a3a3); -webkit-background-clip: text; background-clip: text; color: transparent; }
        
        /* Tech */
        .tech-stack-item {
            @apply reveal-from-bottom;
            transition-property: transform;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
        }
        .progress-bar {
            width: 0%;
            transition: width 1.8s cubic-bezier(0.65, 0, 0.35, 1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 9999px;
        }

        /* Gradasi + Glow per skill (silver/white) */
        .gradient-orange, .gradient-blue, .gradient-yellow, .gradient-red,
        .gradient-indigo, .gradient-cyan, .gradient-purple, .gradient-green {
            background: linear-gradient(90deg, #94a3b8, #ffffff);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5), 0 0 20px rgba(148, 163, 184, 0.4);
        }

        .tech-stack-item:hover { transform: translateY(-8px); }

        .blinking-cursor {
            font-weight: bold;
            font-size: 1rem;
            color: inherit;
            animation: blink 1s step-end infinite;
        }
        .tech-stack-item .tech-icon-wrapper {
            transition-property: background-color, box-shadow;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
        }

        .tech-stack-item:hover .tech-icon-wrapper {
            @apply shadow-lg;
            @apply dark:shadow-gray-500/10 dark:bg-gray-700;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .animate-bounce { animation: bounce 1.5s infinite; }
    </style>
</head>
<body class="antialiased min-h-screen" x-data="{
    open: false,
    isDarkMode: true,
    init() {
        const storedTheme = localStorage.getItem('theme');
        if (storedTheme) {
            this.isDarkMode = storedTheme === 'dark';
        } else {
            this.isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
        }
        this.applyTheme();
    },
    toggleTheme() {
        this.isDarkMode = !this.isDarkMode;
        localStorage.setItem('theme', this.isDarkMode ? 'dark' : 'light');
        this.applyTheme();
    },
    applyTheme() {
        document.documentElement.classList.toggle('light', !this.isDarkMode);
        window.dispatchEvent(new CustomEvent('theme-changed', {
            detail: {
                isDarkMode: this.isDarkMode
            }
        }));
    }
}" x-init="init()">

    <div class="blob-container">
        <div class="blob one"></div>
        <div class="blob two"></div>
        <div class="blob three"></div>
        <div class="blob four"></div>
    </div>

    <header class="w-full absolute top-2 z-50 px-4 py-2">
        <nav class="flex justify-center">
            <div class="nav-container hidden md:flex items-center gap-2 border px-4 py-2 rounded-full text-sm">
                <a href="{{ route('home') }}" class="nav-link">
                    <span class="{{ request()->routeIs('home') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">Home</span>
                </a>
                <a href="{{ route('about') }}" class="nav-link">
                    <span class="{{ request()->routeIs('about') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">About</span>
                </a>
                
                <button @click="toggleTheme()" title="Ganti Tema" class="mx-4 w-10 h-10 flex items-center justify-center rounded-full focus:outline-none transition-transform duration-300" :class="{ 'rotate-180': !isDarkMode }">
                    <svg x-show="isDarkMode" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" /></svg>
                    <svg x-show="!isDarkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>

                <a href="{{ route('projects') }}" class="nav-link">
                    <span class="{{ request()->routeIs('projects') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">Projects</span>
                </a>
                <a href="{{ route('contact') }}" class="nav-link">
                    <span class="{{ request()->routeIs('contact') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">Contact</span>
                </a>
            </div>
        </nav>

        <button @click="open = !open" title="Buka Menu" class="md:hidden absolute right-4 top-4 z-[99] h-8 w-8 flex flex-col items-center justify-center space-y-1.5 focus:outline-none">
            <span class="block h-0.5 w-6 transform transition duration-300 ease-in-out hamburger-line" :class="{ 'translate-y-2 rotate-45': open }"></span>
            <span class="block h-0.5 w-6 transform transition duration-300 ease-in-out hamburger-line" :class="{ 'opacity-0': open }"></span>
            <span class="block h-0.5 w-6 transform transition duration-300 ease-in-out hamburger-line" :class="{ '-translate-y-2 -rotate-45': open }"></span>
        </button>
        
        <div x-show="open" @click.outside="open = false" x-transition class="mobile-menu fixed inset-x-4 top-20 z-40 border p-4 rounded-xl md:hidden space-y-3 text-center shadow-lg">
            <a href="{{ route('home') }}" class="block py-2 {{ request()->routeIs('home') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">Home</a>
            <a href="{{ route('about') }}" class="block py-2 {{ request()->routeIs('about') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">About</a>
            <a href="{{ route('projects') }}" class="block py-2 {{ request()->routeIs('projects') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">Projects</a>
            <a href="{{ route('contact') }}" class="block py-2 {{ request()->routeIs('contact') ? 'nav-link-text-active font-medium' : 'nav-link-text' }}">Contact</a>
            <div class="border-t border-white/10 dark:border-black/10 my-2"></div>
            <div class="flex justify-center">
                <button @click="toggleTheme()" title="Ganti Tema" class="w-12 h-12 flex items-center justify-center rounded-full focus:outline-none transition-transform duration-300" :class="{ 'rotate-180': !isDarkMode }">
                    <svg x-show="isDarkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300" viewBox="0 0 20 20" fill="currentColor"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" /></svg>
                    <svg x-show="!isDarkMode" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
    
    @stack('scripts')
    <script>
        lucide.createIcons();
    </script>
</body>
</html>