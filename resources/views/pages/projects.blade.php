@extends('layouts.app')

@push('styles')
<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .initial-hidden { opacity: 0; }
    .animate-fadeInUp { animation: fadeInUp 0.8s ease-out forwards; }
    .project-card img { transition: transform 0.5s cubic-bezier(0.23, 1, 0.32, 1); }

    .hero-title-theme {
        color: var(--text-primary);
    }
    html:not(.light) .hero-title-theme {
        background-image: linear-gradient(to right, #d1d5db, #ffffff, #d1d5db);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    /* Biar semua card sama tinggi */
    .project-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }
    .project-content-wrapper {
        min-height: 160px; 
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>
@endpush

@section('content')
<div class="overflow-x-hidden antialiased">

  {{-- Hero --}}
  <section class="relative w-full min-h-screen flex flex-col items-center justify-center px-4 py-20 md:py-0">
    <div class="max-w-3xl mx-auto text-center z-10">
      <span id="hero-pre-title" class="text-sm font-semibold uppercase text-theme-secondary tracking-widest initial-hidden">
        Portfolio Highlights
      </span>

      <h1 id="hero-title" class="gradient-text-dark hero-title-theme text-4xl lg:text-6xl font-semibold mt-4 mb-6 leading-tight initial-hidden" style="line-height: 1.5;">
        My Digital Creations.
      </h1>

      <p id="hero-desc" class="text-lg text-theme-secondary leading-relaxed initial-hidden">
        A selection of digital products, from concept to completion, demonstrating my expertise in design, development, and delivering tangible results.
      </p>
    </div>

    {{-- Scroll Down Arrow --}}
    <div class="absolute bottom-10 md:bottom-12 z-20">
      <a href="#projects" class="flex flex-col items-center text-theme-secondary hover:text-gray-300 transition-colors duration-300 animate-bounce">
        <span class="text-sm uppercase font-medium tracking-wide mb-2">See More</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
      </a>
    </div>
  </section>

  {{-- Project Gallery --}}
  <section id="projects" class="py-20 px-4 relative">
    <div 
      x-data="{
        selectedCategory: 'all',
        projects: [
          { id: 1, title: 'Dashboard Internal DZPL Division – OJK', category: 'Web App', image: '{{ asset('project1.jpg') }}', link: '#' },
          { id: 2, title: 'Automatic System Holiday Reference – KOMINFOTIK ', category: 'Web App', image: '{{ asset('project2.jpg') }}', link: '#' },
          { id: 3, title: 'Q-Tin Canteen Application – UPNVJ', category: 'Web App', image: '{{ asset('project3.jpg') }}', link: 'https://q-tin.id/' },
          { id: 4, title: 'Company Profile Website – Sigrax CMMS', category: 'Web App', image: '{{ asset('project4.jpg') }}', link: 'https://sigrax.com/Index.html' },
          { id: 5, title: 'Company Profile Website – English Center', category: 'Web App', image: '{{ asset('project5.png') }}', link: '#' },
          { id: 6, title: 'Company Profile Website – BEM UPNVJ', category: 'Web App', image: '{{ asset('project6.jpg') }}', link: 'https://www.bemupnvj.com/' },
          { id: 7, title: 'UI/UX Company Profile Website Siaga –  P3M', category: 'Web App', image: '{{ asset('project7.png') }}', link: 'https://www.websitesiagap3m.com/' },
          { id: 8, title: 'UI/UX Website UMKM HUB – Hackathon Competition', category: 'UI/UX', image: '{{ asset('project8.png') }}', link: 'https://www.figma.com/design/naeUngSvILejxttd4OAwpI/TEAM-DOA-IBU---Digitalisasi-UMKM---NITRO?node-id=0-1&p=f&t=MFMHKHyRjwHGqz1w-0' },
          { id: 9, title: 'UI/UX Website Project Management –  OK OCE', category: 'UI/UX', image: '{{ asset('project9.png') }}', link: '#' },
          { id: 10, title: 'UI/UX Website Company Profile – Nirmatech ', category: 'UI/UX', image: '{{ asset('project10.png') }}', link: '#' },
          { id: 11, title: 'UI/UX Website Company Profile – Setu Babakan', category: 'UI/UX', image: '{{ asset('project11.jpg') }}', link: '#' },
          { id: 12, title: 'UI/UX Website Company Profile – GEKRAF Singapore', category: 'UI/UX', image: '{{ asset('project12.png') }}', link: '#' }
        ]
      }"
      class="max-w-6xl mx-auto"
    >

      {{-- Filter --}}
      <div class="flex justify-center flex-wrap gap-4 mb-12">
        <button @click="selectedCategory = 'all'" 
                class="filter-button-theme px-6 py-3 text-base font-semibold rounded-full transition-all duration-300 border border-gray-700 text-theme-secondary 
                        bg-white/10 backdrop-blur-md ring-1 ring-inset ring-white/20"
                :class="{ 'bg-gradient-to-r from-gray-700 to-gray-500 shadow-lg !text-white': selectedCategory === 'all' }">
          All Projects
        </button>
        <button @click="selectedCategory = 'Web App'" 
                class="filter-button-theme px-6 py-3 text-base font-semibold rounded-full transition-all duration-300 border border-gray-700 text-theme-secondary 
                        bg-white/10 backdrop-blur-md ring-1 ring-inset ring-white/20"
                :class="{ 'bg-gradient-to-r from-gray-700 to-gray-500 shadow-lg !text-white': selectedCategory === 'Web App' }">
          Web Apps
        </button>
        <button @click="selectedCategory = 'UI/UX'" 
                class="filter-button-theme px-6 py-3 text-base font-semibold rounded-full transition-all duration-300 border border-gray-700 text-theme-secondary 
                        bg-white/10 backdrop-blur-md ring-1 ring-inset ring-white/20"
                :class="{ 'bg-gradient-to-r from-gray-700 to-gray-500 shadow-lg !text-white': selectedCategory === 'UI/UX' }">
          UI/UX
        </button>
      </div>

      {{-- Project Grid --}}
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <template x-for="project in projects" :key="project.id">
          <div x-show="selectedCategory === 'all' || selectedCategory === project.category" 
               x-transition.duration.500ms
               class="transform hover:-translate-y-2 transition-transform duration-300">

            <div class="project-card group relative rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 border border-gray-700 
                        bg-white/6 backdrop-blur-md ring-1 ring-inset ring-white/15">

              {{-- Gambar --}}
              <div class="relative w-full aspect-video">
                  <img :src="project.image" :alt="project.title" 
                       class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                  <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-black/0 to-transparent opacity-0 group-hover:opacity-50 transition-opacity duration-300"></div> 
              </div>
              
              {{-- Konten --}}
              <div class="p-6 relative z-10 project-content-wrapper">
                <div>
                  <span class="text-xs font-semibold uppercase text-theme-secondary tracking-widest" x-text="project.category"></span> 
                  <h3 class="text-xl font-semibold text-theme-secondary mt-2" x-text="project.title"></h3>
                </div>

                {{-- Tombol (selalu ada, biar tinggi seragam) --}}
                <div class="mt-4">
                  <template x-if="project.link && project.link !== '#'">
                    <a :href="project.link" target="_blank" 
                       class="inline-block px-4 py-2 text-sm font-medium rounded-lg 
                              bg-gradient-to-r from-green-500 to-emerald-600 text-white shadow hover:shadow-lg transition-all">
                      View Project
                    </a>
                  </template>
                  <template x-if="!project.link || project.link === '#'">
                    <span class="inline-block px-4 py-2 text-sm font-medium rounded-lg 
                                   bg-gradient-to-r from-red-500 to-red-700 text-white cursor-not-allowed">
                      Private
                    </span>
                  </template>
                </div>
              </div>
            </div>

          </div>
        </template>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const heroPreTitle = document.getElementById('hero-pre-title');
    const heroTitle = document.getElementById('hero-title');
    const heroDesc = document.getElementById('hero-desc');

    if (heroTitle) {
      heroPreTitle.classList.add('animate-fadeInUp');
      setTimeout(() => heroTitle.classList.add('animate-fadeInUp'), 200);
      setTimeout(() => heroDesc.classList.add('animate-fadeInUp'), 400);
    }

    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = ((y - centerY) / centerY) * -7;
            const rotateY = ((x - centerX) / centerX) * 7;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });
});
</script>
@endpush

