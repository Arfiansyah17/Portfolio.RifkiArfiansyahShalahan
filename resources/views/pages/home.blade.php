{{-- Beritahu Laravel untuk menggunakan kerangka dari 'layouts.app' --}}
@extends('layouts.app')

{{-- Masukkan konten ini ke dalam "lubang" @yield('content') di kerangka --}}
@section('content')
{{-- Kita buat visibility: hidden agar elemen tidak "flash" sebelum animasi dimulai --}}
<section class="flex items-center justify-center h-screen text-center px-4" style="visibility: hidden;">
    <div class="flex flex-col items-center">
        
        {{-- Diberi class 'reveal-item' untuk target animasi --}}
        <h1 class="reveal-item text-4xl md:text-6xl font-medium mb-4 mt-7 gradient-text-dark">Rifki Arfiansyah Shalahan</h1>
        
        {{-- Diberi class 'reveal-item' untuk target animasi --}}
       <h2 class="reveal-item text-2xl md:text-4xl font-light">
    <span id="typed" class="inline gradient-text-dark"></span>
</h2>
        
        {{-- Diberi class 'reveal-item' untuk target animasi --}}
        <div class="reveal-item mt-8 flex justify-center gap-4">
            <a href="https://www.linkedin.com/in/arfiiansyaah/" target="_blank" rel="noopener noreferrer" class="social-link" title="LinkedIn">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <a href="https://www.instagram.com/arfiiansyaah/" target="_blank" rel="noopener noreferrer" class="social-link" title="Instagram">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.85-.07-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44c0-.795-.645-1.44-1.441-1.44z"/></svg>
            </a>
           <a href="https://mail.google.com/mail/?view=cm&to=arfiansyah1711@gmail.com" target="_blank" rel="noopener noreferrer" class="social-link" title="Email">
    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 
                 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 
                 4-8 5-8-5V6l8 5 8-5v2z"/>
    </svg>
</a>
        </div>
    </div>
</section>
@endsection

{{-- Masukkan script spesifik halaman ini ke dalam "lubang" @stack('scripts') --}}
@push('scripts')
{{-- Script untuk efek mengetik (Typed.js) --}}
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    // Inisialisasi Typed.js
    new Typed("#typed", {
        strings: ["Junior Web Developer", "UI/UX Designer", "Project Manager"],
        typeSpeed: 60, backSpeed: 40, backDelay: 1500, loop: true,
    });

    // Inisialisasi Animasi "Mewah" dengan ScrollReveal.js
    const sr = ScrollReveal({
        origin: 'bottom',
        distance: '20px',
        duration: 800,
        reset: false, // Animasi hanya berjalan sekali
        viewFactor: 0.5, // Item akan muncul saat 50% terlihat
        easing: 'cubic-bezier(0.5, 0, 0, 1)' // Easing yang halus
    });

    // Menerapkan animasi ke semua elemen dengan class 'reveal-item'
    // 'interval: 200' membuat setiap elemen muncul satu per satu (staggering)
    sr.reveal('.reveal-item', { interval: 200 });
</script>
@endpush