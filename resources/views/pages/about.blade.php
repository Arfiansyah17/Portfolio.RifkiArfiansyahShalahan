@extends('layouts.app')

@section('content')

<div class="overflow-x-hidden">

    <section class="w-full min-h-screen flex items-center pt-16 pb-12 px-8 md:pt-32 md:pb-16 md:px-8">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 items-center">

            <div class="text-center md:text-left reveal-from-left space-y-4 md:space-y-6">
                <h1 class="text-4xl md:text-5xl font-semibold leading-tight gradient-text-dark">
                    Where Ambition Meets Code.
                </h1>
                <p class="text-base text-justify text-theme-secondary leading-normal max-w-sm mx-auto md:max-w-xl md:text-lg md:leading-relaxed md:mx-0 mb-2">
                    <span id="typing-text"></span><span class="blinking-cursor">|</span>
                </p>
            </div>

            <div class="flex justify-center items-center reveal-from-right">
                <div
                    x-data="{
                        currentIndex: 0,
                        photos: [
                            { src: '{{ asset('foto1.jpg') }}', alt: 'Foto Profesional', gradient: 'from-indigo-500 to-pink-500' },
                            { src: '{{ asset('photo8.jpg') }}', alt: 'Foto Casual', gradient: 'from-sky-400 to-emerald-400' },
                            { src: '{{ asset('photo5.jpg') }}', alt: 'Foto Saat Bekerja', gradient: 'from-amber-400 to-orange-500' },
                            { src: '{{ asset('photo1.jpg') }}', alt: 'Foto Tambahan 1', gradient: 'from-purple-500 to-red-500' },
                            { src: '{{ asset('photo3.jpg') }}', alt: 'Foto Tambahan 2', gradient: 'from-green-500 to-blue-500' }
                        ],
                        autoplay: null,
                        startAutoplay() { this.autoplay = setInterval(() => { this.next(false); }, 5000); },
                        resetAutoplay() { clearInterval(this.autoplay); this.startAutoplay(); },
                        next(manual = true) {
                            this.currentIndex = (this.currentIndex + 1) % this.photos.length;
                            if(manual) this.resetAutoplay();
                        },
                        prev() {
                            this.currentIndex = (this.currentIndex - 1 + this.photos.length) % this.photos.length;
                            this.resetAutoplay();
                        }
                    }"
                    x-init="startAutoplay()"
                    class="relative w-64 h-80 md:w-80 md:h-96 group"
                >
                    <template x-for="(photo, index) in photos" :key="'card-'+index">
                        <div
                            x-show="index >= currentIndex && index < currentIndex + 3"
                            x-transition:leave="transition ease-in-out duration-300"
                            :class="photo.gradient"
                            class="absolute inset-0 bg-gradient-to-br rounded-2xl shadow-2xl will-change-transform will-change-opacity"
                            x-bind:style="
                                (index < currentIndex || index >= currentIndex + 3) ?
                                `transform: rotate(${(index - currentIndex) * 4 + 40}deg) translateX(${(index - currentIndex) * 100 + 100}px) translateY(${(index - currentIndex) * 100 + 100}px) scale(0.8); opacity: 0; z-index: ${photos.length - (index - currentIndex)}; transition-delay: ${(index - currentIndex) * 80}ms; transition: all 0.3s ease-in-out;` :
                                `transform: rotate(${(index - currentIndex) * 4 - 4}deg) translateX(${(index - currentIndex) * 20}px) scale(${1 - (index - currentIndex) * 0.05}); opacity: 1; z-index: ${photos.length - (index - currentIndex)}; transition-delay: 0ms; transition: all 0.3s ease-in-out;`
                            "
                        ></div>
                    </template>
                    <template x-for="(photo, index) in photos" :key="'photo-'+index">
                        <div
                            x-show="currentIndex === index"
                            x-transition:enter="transition ease-in-out duration-300"
                            x-transition:leave="transition ease-in-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            class="absolute inset-0 z-30 will-change-opacity"
                        >
                            <img :src="photo.src" :alt="photo.alt" class="relative w-full h-full rounded-2xl object-cover">
                        </div>
                    </template>
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex justify-between items-center z-50 pointer-events-none group-hover:pointer-events-auto">
                        <button @click="prev()" class="carousel-button-theme rounded-full p-2 ml-[-20px] focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button @click="next()" class="carousel-button-theme rounded-full p-2 mr-[-20px] focus:outline-none">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagian 2: Statistik --}}
    <section class="py-20 px-4">
        <div id="stats-section" class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 text-center">
            <div class="stat-item flex flex-col items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                <h3 class="text-5xl font-bold" data-count="30" data-suffix="+">0</h3>
                <p class="text-lg text-theme-secondary">Projects</p>
            </div>
            <div class="stat-item flex flex-col items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                <h3 class="text-5xl font-bold" data-count="3">0</h3>
                <p class="text-lg text-theme-secondary">Years Experience</p>
            </div>
            <div class="stat-item flex flex-col items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                <h3 class="text-5xl font-bold" data-count="80" data-suffix="%">0</h3>
                <p class="text-lg text-theme-secondary">Tech Skills</p>
            </div>
        </div>
    </section>

    {{-- Bagian 4: Tech Stack --}}
    <section class="py-16 px-4">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-semibold text-center mb-12">Tech Stack</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-10">
                <div class="group space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <i data-lucide="code-2" class="w-6 h-6 text-orange-500"></i>
                            <span class="font-medium text-theme-primary-text">HTML5</span>
                        </div>
                        <span class="text-sm text-theme-secondary-text">100%</span>
                    </div>
                    <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                        <div class="h-full rounded-full progress-bar gradient-orange" data-progress="100"></div>
                    </div>
                </div>
                <div class="group space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <i data-lucide="file-code" class="w-6 h-6 text-blue-500"></i>
                            <span class="font-medium text-theme-primary-text">CSS3</span>
                        </div>
                        <span class="text-sm text-theme-secondary-text">90%</span>
                    </div>
                    <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                        <div class="h-full rounded-full progress-bar gradient-blue" data-progress="90"></div>
                    </div>
                </div>
                <div class="group space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <i data-lucide="layout-dashboard" class="w-6 h-6 text-yellow-400"></i>
                            <span class="font-medium text-theme-primary-text">JavaScript</span>
                        </div>
                        <span class="text-sm text-theme-secondary-text">85%</span>
                    </div>
                    <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                        <div class="h-full rounded-full progress-bar gradient-yellow" data-progress="85"></div>
                    </div>
                </div>
                <div class="group space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <i data-lucide="server" class="w-6 h-6 text-red-500"></i>
                            <span class="font-medium text-theme-primary-text">Laravel</span>
                        </div>
                        <span class="text-sm text-theme-secondary-text">90%</span>
                    </div>
                    <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                        <div class="h-full rounded-full progress-bar gradient-red" data-progress="90"></div>
                    </div>
                </div>
                <div class="group space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <i data-lucide="database" class="w-6 h-6 text-indigo-500"></i>
                            <span class="font-medium text-theme-primary-text">MySQL</span>
                        </div>
                        <span class="text-sm text-theme-secondary-text">85%</span>
                    </div>
                    <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                        <div class="h-full rounded-full progress-bar gradient-indigo" data-progress="85"></div>
                    </div>
                </div>
                <div class="group space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <i data-lucide="layout-template" class="w-6 h-6 text-cyan-500"></i>
                            <span class="font-medium text-theme-primary-text">Tailwind CSS</span>
                        </div>
                        <span class="text-sm text-theme-secondary-text">85%</span>
                    </div>
                    <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                        <div class="h-full rounded-full progress-bar gradient-cyan" data-progress="85"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bagian 5: Tools --}}
   <section class="py-16 px-4">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-semibold text-center mb-12">Tools</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-10">
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="figma" class="w-6 h-6 text-purple-500"></i>
                        <span class="font-medium text-theme-primary-text">Figma</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">95%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-purple" data-progress="95"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="code" class="w-6 h-6 text-blue-500"></i>
                        <span class="font-medium text-theme-primary-text">Visual Studio Code</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">90%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-blue" data-progress="90"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="app-window" class="w-6 h-6 text-red-500"></i>
                        <span class="font-medium text-theme-primary-text">Canva</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">95%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-red" data-progress="95"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="file-text" class="w-6 h-6 text-blue-500"></i>
                        <span class="font-medium text-theme-primary-text">Ms Word</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">90%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-blue" data-progress="90"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="book-a" class="w-6 h-6 text-green-500"></i>
                        <span class="font-medium text-theme-primary-text">Ms Excel</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">85%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-green" data-progress="85"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="file-bar-chart" class="w-6 h-6 text-purple-500"></i>
                        <span class="font-medium text-theme-primary-text">Ms Power Point</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">90%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-purple" data-progress="90"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="scroll-text" class="w-6 h-6 text-cyan-500"></i>
                        <span class="font-medium text-theme-primary-text">Notion</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">90%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-cyan" data-progress="90"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="list-checks" class="w-6 h-6 text-indigo-500"></i>
                        <span class="font-medium text-theme-primary-text">Trello</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">95%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-indigo" data-progress="95"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="paintbrush" class="w-6 h-6 text-orange-500"></i>
                        <span class="font-medium text-theme-primary-text">Adobe Illustrator</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">85%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-orange" data-progress="85"></div>
                </div>
            </div>
            <div class="group space-y-2">
                <div class="flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <i data-lucide="server" class="w-6 h-6 text-blue-500"></i>
                        <span class="font-medium text-theme-primary-text">Laragon</span>
                    </div>
                    <span class="text-sm text-theme-secondary-text">90%</span>
                </div>
                <div class="w-full h-3 bg-gray-300 rounded-full overflow-hidden">
                    <div class="h-full rounded-full progress-bar gradient-green" data-progress="90"></div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- Bagian 3: Pencapaian --}}
    <section class="py-20 px-4">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-semibold text-center mb-12">Journey & Experience</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                <a href="https://www.upnvj.ac.id/en/berita/2025/06/upnvj-students-win-2nd-place-in-the-2025-national-nitro-event.html" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo11.jpg') }}" alt="Cover untuk artikel Laravel" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">April - June 2025</span><h3 class="text-xl font-medium mt-2">Web Developer Intern - Otoritas Jasa Keuangan</h3><p class="mt-2 text-theme-secondary">Assisted in developing and maintaining internal web based systems to support regulatory processes.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo8.jpg') }}" alt="Cover untuk Web Design Competition" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">May 2025</span><h3 class="text-xl font-medium mt-2">2nd Place National Information Technology Roll Out Hackathon</h3><p class="mt-2 text-theme-secondary">Secured second place in a national level hackathon through innovative tech solutions and strong team collaboration.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo3.jpg') }}" alt="Cover untuk Freelance Project" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">August - December 2024</span><h3 class="text-xl font-medium mt-2">MSIB Batch 7 Web Developer Intern - OK OCE Indonesia</h3><p class="mt-2 text-theme-secondary">Contributed to web development projects focused on empowering UMKM, while gaining hands on experience through the Kampus Merdeka program.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo10.jpg') }}" alt="Cover untuk Freelance Project" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">January - December 2024</span><h3 class="text-xl font-medium mt-2">Head of Media Creative BEM UPN "Veteran" Jakarta</h3><p class="mt-2 text-theme-secondary">Led the development of visual content and digital assets using Canva and Figma to enhance organizational branding.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo4.jpg') }}" alt="Cover untuk Freelance Project" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">July - August 2024 </span><h3 class="text-xl font-medium mt-2">Selected as Figma Design Instructor for Faculty Led Research in a Bogor Islamic Boarding School</h3><p class="mt-2 text-theme-secondary">Selected to teach design using Figma as part of a faculty led research program, supporting digital creativity and visual communication in a pesantren environment.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo9.jpg') }}" alt="Cover untuk Freelance Project" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">June 2024</span><h3 class="text-xl font-medium mt-2">Digital Innovation Technology Student Award of UPN "Veteran" Jakarta</h3><p class="mt-2 text-theme-secondary">Recognized for developing a digital canteen application to improve transaction efficiency and service in the campus canteen environment.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo15.png') }}" alt="Cover untuk kontribusi open source" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">April 2024</span><h3 class="text-xl font-medium mt-2">1st Place - Best Delegate, Entrepreneur Hub Goes to Campus</h3><p class="mt-2 text-theme-secondary">Selected as the best delegate representing UPN "Veteran" Jakarta in a national entrepreneurship development program.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo5.jpg') }}" alt="Cover untuk pembelajaran skill baru" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">February 2024</span><h3 class="text-xl font-medium mt-2">Local Heroes Creativox x Kahforward</h3><p class="mt-2 text-theme-secondary">Selected as a local creative representative with expertise in technology, spotlighting impactful and innovations through the Creativox x Kahforward collaboration.</p></div>
                </a>
                <a href="#" class="achievement-card-theme block rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('photo1.jpg') }}" alt="Cover untuk program mentorship" class="w-full h-48 object-cover">
                    <div class="p-6"><span class="text-sm text-theme-secondary">December 2023 - May 2025</span><h3 class="text-xl font-medium mt-2">Project Manager Q-Tin Application Web Based</h3><p class="mt-2 text-theme-secondary">Led the development of a digital canteen management system for UPN “Veteran” Jakarta. Coordinated cross-functional teams, managed timelines, and ensured a user centered design approach to streamline canteen operations..</p></div>
                </a>
            </div>
        </div>
    </section>

    {{-- Bagian Call to Action --}}
    <section class="py-24 px-4 text-center bg-theme-primary reveal-from-bottom">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-semibold leading-tight mb-4 animate-fade-in-down text-theme-primary-text">
                Ready to Build Something Amazing Together?
            </h2>
            <p class="text-xl md:text-2xl font-light leading-relaxed mt-6 mb-10 animate-fade-in text-theme-secondary-text">
                I'm always eager to discuss exciting projects, innovative ideas, or new opportunities. Let's connect and turn visions into reality.
            </p>
            <div class="mt-8">
                <a href="{{ route('contact') }}" class="cta-button-theme inline-flex items-center justify-center text-lg font-bold px-10 py-4 rounded-full shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl focus:outline-none focus:ring-4 focus:ring-offset-2 focus:ring-offset-theme-primary focus:ring-accent-color">
                    Get in Touch
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    // Flag untuk melacak apakah skrip sudah dimuat
    window.aboutPageScriptsLoaded = window.aboutPageScriptsLoaded || false;

    function initializeAboutPageScripts() {
        if (window.aboutPageScriptsLoaded) {
            return;
        }
        window.aboutPageScriptsLoaded = true;

        // Inisialisasi Lucide Icons
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Stats Count-Up Animation
        const statsSection = document.getElementById('stats-section');
        if (statsSection) {
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statItems = entry.target.querySelectorAll('h3[data-count]');
                        statItems.forEach(stat => {
                            // Cek jika animasi sudah berjalan, hindari pengulangan
                            if (stat.dataset.counting) return;
                            stat.dataset.counting = 'true';

                            const targetCount = parseFloat(stat.getAttribute('data-count'));
                            const suffix = stat.getAttribute('data-suffix') || '';
                            let currentCount = 0;
                            const duration = 1500;
                            const stepTime = 10;
                            const increment = targetCount / (duration / stepTime);

                            const updateCount = () => {
                                if (currentCount < targetCount) {
                                    currentCount = Math.min(targetCount, currentCount + increment);
                                    stat.textContent = Math.round(currentCount) + suffix;
                                    requestAnimationFrame(updateCount);
                                } else {
                                    stat.textContent = targetCount + suffix;
                                }
                            };
                            updateCount();
                        });
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            statsObserver.observe(statsSection);
        }

        // Progress Bar Animation
        const progressBars = document.querySelectorAll('.progress-bar');
        const progressObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const bar = entry.target;
                    // Cek jika animasi sudah berjalan
                    if (bar.dataset.animated) return;
                    bar.dataset.animated = 'true';

                    const target = bar.getAttribute('data-progress');
                    bar.style.width = target + '%';
                    bar.classList.add('glow');
                    progressObserver.unobserve(bar);
                }
            });
        }, { threshold: 0.4 });

        progressBars.forEach(bar => {
            bar.style.width = '0%';
            progressObserver.observe(bar);
        });

        // ScrollReveal Animations
        if (typeof ScrollReveal !== 'undefined') {
            const sr = ScrollReveal({
                duration: 1000,
                easing: 'cubic-bezier(0.5, 0, 0, 1)',
                reset: false
            });
            sr.reveal('.reveal-from-left', { origin: 'left', delay: 200 });
            sr.reveal('.reveal-from-right', { origin: 'right', delay: 200 });
            sr.reveal('.reveal-from-bottom', { origin: 'bottom' });
            sr.reveal('.stat-item', { origin: 'bottom', interval: 150 });
            sr.reveal('.achievement-card-theme', { origin: 'bottom', interval: 150, viewFactor: 0.3 });
        }

        const fullText = "Hello, my name is <b>Rifki Arfiansyah Shalahan</b>.<br>As a recent graduate of <b>Information Systems, UPN Veteran Jakarta</b>, with a <b>3.85/4.00 GPA</b>, I bring experience in <b>web development and UI/UX design</b>. I am highly motivated and eager to contribute my skills.";
        const typingText = document.getElementById("typing-text");
        let charIndex = 0;
        const typingDelay = 50;

        // Cek jika typing effect sudah berjalan
        if (typingText && !typingText.dataset.typed) {
            typingText.dataset.typed = 'true';

            function parseText(text) {
                const parts = [];
                let lastIndex = 0;
                const regex = /<[^>]+>/g;
                let match;
                while ((match = regex.exec(text)) !== null) {
                    if (match.index > lastIndex) {
                        for (let i = lastIndex; i < match.index; i++) {
                            parts.push({ type: 'text', value: text[i] });
                        }
                    }
                    parts.push({ type: 'tag', value: match[0] });
                    lastIndex = regex.lastIndex;
                }
                if (lastIndex < text.length) {
                    for (let i = lastIndex; i < text.length; i++) {
                        parts.push({ type: 'text', value: text[i] });
                    }
                }
                return parts;
            }

            const parsedContent = parseText(fullText);
            let currentTypedHtml = "";

            function typeCharacterOrTag() {
                if (charIndex < parsedContent.length) {
                    const item = parsedContent[charIndex];
                    if (item.type === 'text') {
                        currentTypedHtml += item.value;
                        typingText.innerHTML = currentTypedHtml;
                        charIndex++;
                        setTimeout(typeCharacterOrTag, typingDelay);
                    } else if (item.type === 'tag') {
                        currentTypedHtml += item.value;
                        typingText.innerHTML = currentTypedHtml;
                        charIndex++;
                        typeCharacterOrTag();
                    }
                } else {
                    const blinkingCursor = document.querySelector(".blinking-cursor");
                    if (blinkingCursor) {
                        blinkingCursor.remove();
                    }
                }
            }
            typeCharacterOrTag();
        }
    }

    // Panggil skrip saat DOMContentLoaded
    document.addEventListener('DOMContentLoaded', initializeAboutPageScripts);

    // Panggil kembali skrip saat Livewire selesai melakukan navigasi
    if (typeof Livewire !== 'undefined') {
        Livewire.on('livewire:navigated', () => {
            // Atur ulang flag agar skrip bisa berjalan lagi di halaman about
            window.aboutPageScriptsLoaded = false;
            // Panggil fungsi inisialisasi
            initializeAboutPageScripts();
        });
    }
</script>
@endpush