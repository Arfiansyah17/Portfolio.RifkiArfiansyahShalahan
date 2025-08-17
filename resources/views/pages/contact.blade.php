@extends('layouts.app')

@section('content')
    <div class="overflow-x-hidden antialiased">
        {{-- Hero Section: Visual Interactive (Full Background) and Text Overlay + Contact --}}
        <section
            class="relative flex h-screen w-full items-center justify-center overflow-hidden bg-gradient-to-br from-[--bg-gradient-start] via-[--bg-gradient-via] to-[--bg-gradient-end]">
            {{-- Container for Three.js Visual --}}
            <div id="threejs-visual-container" class="absolute inset-0 z-10">
                <canvas id="particleCanvas" class="h-full w-full"></canvas>
            </div>

            {{-- Transparent Card for Overlay Text and Contact (Apple-like) --}}
            <div id="overlay-card"
                class="relative z-20 p-6 mx-4 md:p-8 md:mx-auto rounded-3xl shadow-2xl text-center max-w-2xl
                backdrop-blur-xl bg-[--card-bg] border border-[--card-border] transition-all duration-700 ease-in-out">
                {{-- Hero Text --}}
                <h2
                    class="text-3xl font-bold leading-tight drop-shadow-lg sm:text-4xl md:text-5xl lg:text-5xl text-[--text-primary] transition-colors duration-700">
                    <span class="block">Got an Idea? Let's Connect!</span>
                </h2>
                <p class="mt-3 text-base sm:text-lg text-[--text-secondary] transition-colors duration-700">
                  <b> I'm Ready to bring your vision to life, </b> just like the interconnected web behind, where <b>each color represents our unique connections.</b>
                </p>

                {{-- Contact and Social Media Icons --}}
                <div class="mt-8 md:mt-10 flex flex-wrap items-center justify-center gap-x-3 md:gap-x-5 gap-y-3">
                    {{-- Email Icon --}}
                    <a href="mailto:rifkiarfiansya@gmail.com"
                        class="social-link-small group" title="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300 ease-in-out" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </a>
                    {{-- Phone Icon --}}
                    <a href="tel:+6285600323373"
                        class="social-link-small group" title="Phone">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300 ease-in-out" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                    </a>

                    {{-- Social Media Icons --}}
                    <a href="https://www.linkedin.com/in/rifkiarfiansya/" target="_blank" rel="noopener noreferrer"
                        class="social-link-small group" title="LinkedIn">
                        <svg class="h-5 w-5 fill-current transition-all duration-300 ease-in-out" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                    <a href="https://github.com/rifkiarfiansya" target="_blank" rel="noopener noreferrer"
                        class="social-link-small group" title="GitHub">
                        <svg class="h-5 w-5 fill-current transition-all duration-300 ease-in-out" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/rifkiarfiansya/" target="_blank" rel="noopener noreferrer"
                        class="social-link-small group" title="Instagram">
                        <svg class="h-5 w-5 fill-current transition-all duration-300 ease-in-out" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.85-.07-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.644-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44c0-.795-.645-1.44-1.441-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </div>

    {{-- Custom CSS for Dark and Light Theme (Three.js and contact page specific elements) --}}
    <style>
        /* CSS Variables for Three.js and contact page specific elements */
        :root {
            /* Three.js color palette (dark mode values) */
            --threejs-particle-cyan: 0x00ffff;
            --threejs-particle-magenta: 0xff00ff;
            --threejs-particle-green: 0x00ff00;
            --threejs-particle-yellow: 0xffff00;
            --threejs-line-color: 0x60a5fa; /* Blue */
            --threejs-hover-color: 0xf0f8ff; /* AliceBlue */

            /* Social Link general styling (default for dark mode) */
            /* Default icon color for all social links when not hovered. */
            /* We will directly assign colors to SVG via CSS for a more robust approach. */
            --contact-social-link-bg-opacity: rgba(255, 255, 255, 0.08);
            --contact-social-link-hover-bg-opacity: rgba(255, 255, 255, 0.25);
            --contact-social-link-glow-opacity-1: rgba(255, 255, 255, 0.15);
            --contact-social-link-glow-opacity-2: rgba(255, 255, 255, 0.05);

            /* Specific default colors for social icons */
            --icon-email-default: #3b82f6; /* Blue-500 */
            --icon-phone-default: #22c55e; /* Green-500 */
            --icon-linkedin-default: #0a66c2; /* LinkedIn Blue */
            --icon-github-default: #1a1a1a; /* Dark Gray for GitHub */
            --icon-instagram-default: #e1306c; /* Instagram Red */
            --icon-x-twitter-default: #000000; /* Black for X/Twitter */

            /* Specific hover colors for social links (used for icon and border) */
            --social-email-hover: #3b82f6; /* Tailwind blue-500 */
            --social-phone-hover: #22c55e; /* Tailwind green-500 */
            --social-linkedin-hover: #0a66c2; /* LinkedIn Blue */
            --social-github-hover: #805ad5; /* Tailwind purple-600 */
            --social-instagram-hover: #ec4899; /* Tailwind pink-500 */
            --social-x-twitter-hover: #3b82f6; /* Tailwind blue-500 */
        }

        /* Light Mode overrides for Three.js and contact-specific elements */
        html.light {
            /* Three.js color palette (light mode values) */
            --threejs-particle-cyan: 0x00aaff;
            --threejs-particle-magenta: 0xaa00ff;
            --threejs-particle-green: 0x00aa00;
            --threejs-particle-yellow: 0xaa8800;
            --threejs-line-color: #374151; /* Darker Gray-700 */
            --threejs-hover-color: 0x7b68ee;

            /* Social Link general styling for light mode */
            --contact-social-link-bg-opacity: rgba(0, 0, 0, 0.05);
            --contact-social-link-hover-bg-opacity: rgba(0, 0, 0, 0.15);
            --contact-social-link-glow-opacity-1: rgba(0, 0, 0, 0.1);
            --contact-social-link-glow-opacity-2: rgba(0, 0, 0, 0.03);

            /* Specific default colors for social icons in light mode */
            --icon-email-default: #2563eb; /* Darker blue */
            --icon-phone-default: #16a34a; /* Darker green */
            --icon-linkedin-default: #1c529a; /* Darker LinkedIn Blue */
            --icon-github-default: #4a5568; /* Darker Gray for GitHub */
            --icon-instagram-default: #be185d; /* Darker Instagram Red */
            --icon-x-twitter-default: #111827; /* Darker Black for X/Twitter */

            /* Specific hover colors for social links in light mode */
            --social-email-hover: #2563eb; /* Darker blue */
            --social-phone-hover: #16a34a; /* Darker green */
            --social-linkedin-hover: #1c529a; /* Darker LinkedIn Blue */
            --social-github-hover: #6b46c1; /* Darker Tailwind purple-600 */
            --social-instagram-hover: #be185d; /* Darker Tailwind pink-500 */
            --social-x-twitter-hover: #2563eb; /* Darker Tailwind blue-500 */
        }

        /* Styling Card (uses variables defined in app.blade.php) */
        #overlay-card {
            box-shadow:
                0 4px 6px -1px var(--card-shadow-color-end),
                0 2px 4px -1px var(--card-shadow-color-end),
                0 10px 15px -3px var(--card-shadow-color-start),
                0 4px 6px -2px var(--card-shadow-color-start);
        }

        /* Social Link styling (for all icons) */
        .social-link-small {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            /* Default border color will be set by JS on load or by direct CSS rule */
            background-color: var(--contact-social-link-bg-opacity);
            box-shadow: 0 0 8px var(--contact-social-link-glow-opacity-1);
            padding: 0;
            flex-shrink: 0;
            /* Transition for the entire element, including border and transform */
            transition: all 0.3s ease-in-out; 
        }

        .social-link-small:hover {
            background-color: var(--contact-social-link-hover-bg-opacity);
            transform: translateY(-4px); /* Upward movement on hover */
            box-shadow: 0 0 12px var(--contact-social-link-glow-opacity-2), 0 0 20px var(--contact-social-link-glow-opacity-1);
        }

        /* Default colors for each icon */
        a[title="Email"] svg { color: var(--icon-email-default); }
        a[title="Phone"] svg { color: var(--icon-phone-default); }
        a[title="LinkedIn"] svg { color: var(--icon-linkedin-default); }
        a[title="GitHub"] svg { color: var(--icon-github-default); }
        a[title="Instagram"] svg { color: var(--icon-instagram-default); }
        a[title="X (Twitter)"] svg { color: var(--icon-x-twitter-default); }

        /* Default border color for each icon (matching its initial color) */
        a[title="Email"] { border-color: var(--icon-email-default); }
        a[title="Phone"] { border-color: var(--icon-phone-default); }
        a[title="LinkedIn"] { border-color: var(--icon-linkedin-default); }
        a[title="GitHub"] { border-color: var(--icon-github-default); }
        a[title="Instagram"] { border-color: var(--icon-instagram-default); }
        a[title="X (Twitter)"] { border-color: var(--icon-x-twitter-default); }


        /* Hover colors for icons and borders */
        a[title="Email"].group:hover { border-color: var(--social-email-hover) !important; }
        a[title="Email"].group:hover svg { color: var(--social-email-hover) !important; }

        a[title="Phone"].group:hover { border-color: var(--social-phone-hover) !important; }
        a[title="Phone"].group:hover svg { color: var(--social-phone-hover) !important; }

        a[title="LinkedIn"].group:hover { border-color: var(--social-linkedin-hover) !important; }
        a[title="LinkedIn"].group:hover svg { color: var(--social-linkedin-hover) !important; }

        a[title="GitHub"].group:hover { border-color: var(--social-github-hover) !important; }
        a[title="GitHub"].group:hover svg { color: var(--social-github-hover) !important; }

        a[title="Instagram"].group:hover { border-color: var(--social-instagram-hover) !important; }
        a[title="Instagram"].group:hover svg { color: var(--social-instagram-hover) !important; }

        a[title="X (Twitter)"].group:hover { border-color: var(--social-x-twitter-hover) !important; }
        a[title="X (Twitter)"].group:hover svg { color: var(--social-x-twitter-hover) !important; }


        /* Three.js Container Cursor (no change) */
        #threejs-visual-container:hover {
            cursor: grab;
        }

        #threejs-visual-container.is-dragging {
            cursor: grabbing;
        }
    </style>

    @push('scripts')
        {{-- Three.js and GSAP libraries are included in app.blade.php. No need to include them again here. --}}
        {{-- NOTE: Confirm if Three.js and GSAP are loaded in app.blade.php's head. If so, remove these lines. --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script> --}}

        <script>
            // Global variables for Three.js scene, camera, and renderer
            let camera, scene, renderer;
            let particles, particleGeom, particleMaterial;
            let lines, lineGeom, lineMaterial;
            let mouse = new THREE.Vector2();
            let mouse3D = new THREE.Vector3();

            let isDragging = false;
            let previousMouseX = 0;
            let previousMouseY = 0;
            let rotationX = 0;
            let rotationY = 0;
            let targetRotationX = 0;
            let targetRotationY = 0;
            const ROTATION_DAMPING = 0.95;
            const MOUSE_ROTATION_SPEED = 0.005;

            let particleData = [];

            const NUM_PARTICLES = 1500;
            // Kepadatan jaring-jaring dikurangi sedikit lagi (dari 70)
            const CONNECTION_RADIUS = 60; // Adjusted for slightly less density
            const INTERACTION_RADIUS = 120;
            const MOUSE_REPEL_FORCE = 0.02;
            const PARTICLE_FRICTION = 0.97;

            // Three.js color palette will be fetched from CSS variables
            let PARTICLE_COLOR_PALETTE = [];
            let LINE_COLOR;
            let HOVER_COLOR;


            /**
             * @function updateThreeJsColors
             * @description Fetches color values from CSS variables and updates Three.js color palette.
             * This is called every time the theme changes.
             */
            function updateThreeJsColors() {
                const rootStyles = getComputedStyle(document.documentElement);

                // Get Three.js CSS variable values
                PARTICLE_COLOR_PALETTE = [
                    new THREE.Color(rootStyles.getPropertyValue('--threejs-particle-cyan').trim().replace('0x', '#')),
                    new THREE.Color(rootStyles.getPropertyValue('--threejs-particle-magenta').trim().replace('0x', '#')),
                    new THREE.Color(rootStyles.getPropertyValue('--threejs-particle-green').trim().replace('0x', '#')),
                    new THREE.Color(rootStyles.getPropertyValue('--threejs-particle-yellow').trim().replace('0x', '#'))
                ];
                LINE_COLOR = new THREE.Color(rootStyles.getPropertyValue('--threejs-line-color').trim().replace('0x', '#'));
                HOVER_COLOR = new THREE.Color(rootStyles.getPropertyValue('--threejs-hover-color').trim().replace('0x', '#'));

                // If Three.js is already initialized (particles exist), we need to update their colors
                if (particles && particleData.length > 0) {
                    const particleColors = particleGeom.attributes.color.array;
                    for (let i = 0; i < NUM_PARTICLES; i++) {
                        const pData = particleData[i];
                        // Set originalColor of the particle to the corresponding new palette color (randomly select from the new palette)
                        pData.originalColor = PARTICLE_COLOR_PALETTE[Math.floor(Math.random() * PARTICLE_COLOR_PALETTE.length)].clone();
                        pData.currentColor = pData.originalColor.clone(); // Reset current color

                        // Immediately apply new color to particle geometry attribute
                        particleColors[i * 3] = pData.currentColor.r;
                        particleColors[i * 3 + 1] = pData.currentColor.g;
                        particleColors[i * 3 + 2] = pData.currentColor.b;
                    }
                    particleGeom.attributes.color.needsUpdate = true; // Tell Three.js to update colors
                }
                // Update line material color directly if lines exist
                if (lineMaterial) {
                    lineMaterial.color.set(LINE_COLOR);
                    // Also set line opacity here to change with theme
                    lines.material.opacity = document.documentElement.classList.contains('light') ? 0.4 : 0.5; // Darker in light mode, standard in dark mode
                }
            }


            function initThreeJS() {
                const container = document.getElementById('threejs-visual-container');
                const canvas = document.getElementById('particleCanvas');

                scene = new THREE.Scene();
                camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
                camera.position.z = 300;

                renderer = new THREE.WebGLRenderer({
                    antialias: true,
                    canvas: canvas,
                    alpha: true // Important for transparent canvas, so CSS background is visible
                });
                renderer.setPixelRatio(window.devicePixelRatio);
                renderer.setSize(container.offsetWidth, container.offsetHeight);
                renderer.setClearColor(0x000000, 0); // Three.js background (canvas) is always transparent

                // Call for the first time during initialization so Three.js colors match initial theme
                updateThreeJsColors();

                particleGeom = new THREE.BufferGeometry();
                const positions = new Float32Array(NUM_PARTICLES * 3);
                const colors = new Float32Array(NUM_PARTICLES * 3);
                const sizes = new Float32Array(NUM_PARTICLES);

                for (let i = 0; i < NUM_PARTICLES; i++) {
                    const x = Math.random() * 600 - 300;
                    const y = Math.random() * 600 - 300;
                    const z = Math.random() * 600 - 300;

                    positions[i * 3] = x;
                    positions[i * 3 + 1] = y;
                    positions[i * 3 + 2] = z;

                    // Use the initialized/updated PARTICLE_COLOR_PALETTE
                    const color = PARTICLE_COLOR_PALETTE[Math.floor(Math.random() * PARTICLE_COLOR_PALETTE.length)];
                    colors[i * 3] = color.r;
                    colors[i * 3 + 1] = color.g;
                    colors[i * 3 + 2] = color.b;

                    sizes[i] = 4;

                    particleData.push({
                        position: new THREE.Vector3(x, y, z),
                        velocity: new THREE.Vector3(
                            (Math.random() - 0.5) * 0.5 * 0.2,
                            (Math.random() - 0.5) * 0.5 * 0.2,
                            (Math.random() - 0.5) * 0.5 * 0.2
                        ),
                        originalColor: color.clone(), // Clone initial color from active palette
                        currentColor: color.clone(),
                        size: sizes[i]
                    });
                }

                particleGeom.setAttribute('position', new THREE.BufferAttribute(positions, 3));
                particleGeom.setAttribute('color', new THREE.BufferAttribute(colors, 3));
                particleGeom.setAttribute('size', new THREE.BufferAttribute(sizes, 1));

                particleMaterial = new THREE.PointsMaterial({
                    size: 3,
                    vertexColors: true,
                    blending: THREE.AdditiveBlending,
                    transparent: true,
                    opacity: 0.9,
                    sizeAttenuation: true
                });

                particles = new THREE.Points(particleGeom, particleMaterial);
                scene.add(particles);

                lineGeom = new THREE.BufferGeometry();
                const maxLineSegments = NUM_PARTICLES * 10;
                const linePositions = new Float32Array(maxLineSegments * 2 * 3);
                const lineColors = new Float32Array(maxLineSegments * 2 * 3);

                lineGeom.setAttribute('position', new THREE.BufferAttribute(linePositions, 3));
                lineGeom.setAttribute('color', new THREE.BufferAttribute(lineColors, 3));
                lineGeom.setDrawRange(0, 0);

                lineMaterial = new THREE.LineBasicMaterial({
                    vertexColors: true,
                    blending: THREE.AdditiveBlending,
                    transparent: true,
                    // Initial opacity adjusted with theme
                    opacity: document.documentElement.classList.contains('light') ? 0.4 : 0.5
                });

                lines = new THREE.LineSegments(lineGeom, lineMaterial);
                scene.add(lines);

                container.addEventListener('mousemove', onVisualContainerMouseMove, false);
                container.addEventListener('touchmove', onVisualContainerTouchMove, {
                    passive: false
                });

                container.addEventListener('mousedown', onMouseDown, false);
                container.addEventListener('mouseup', onMouseUp, false);
                container.addEventListener('mouseout', onMouseUp, false);
                container.addEventListener('touchstart', onMouseDown, {
                    passive: false
                });
                container.addEventListener('touchend', onMouseUp, {
                    passive: false
                });


                window.addEventListener('resize', onWindowResizeThreeJS, false);
            }

            function onMouseDown(event) {
                isDragging = true;
                previousMouseX = event.clientX || (event.touches ? event.touches[0].clientX : 0);
                previousMouseY = event.clientY || (event.touches ? event.touches[0].clientY : 0);
                document.getElementById('threejs-visual-container').classList.add('is-dragging');
            }

            function onMouseUp(event) {
                isDragging = false;
                document.getElementById('threejs-visual-container').classList.remove('is-dragging');
            }

            function onVisualContainerMouseMove(event) {
                const container = event.currentTarget;
                const rect = container.getBoundingClientRect();
                mouse.x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
                mouse.y = -(((event.clientY - rect.top) / rect.height) * 2 - 1);

                if (isDragging) {
                    const deltaX = event.clientX - previousMouseX;
                    const deltaY = event.clientY - previousMouseY;
                    targetRotationY += deltaX * MOUSE_ROTATION_SPEED;
                    targetRotationX += deltaY * MOUSE_ROTATION_SPEED;
                    previousMouseX = event.clientX;
                    previousMouseY = event.clientY;
                }
            }

            function onVisualContainerTouchMove(event) {
                if (event.touches.length === 1) {
                    event.preventDefault();
                    const container = event.currentTarget;
                    const rect = container.getBoundingClientRect();
                    mouse.x = ((event.touches[0].clientX - rect.left) / rect.width) * 2 - 1;
                    mouse.y = -(((event.touches[0].clientY - rect.top) / rect.height) * 2 - 1);

                    if (isDragging) {
                        const deltaX = event.touches[0].clientX - previousMouseX;
                        const deltaY = event.touches[0].clientY - previousMouseY;
                        targetRotationY += deltaX * MOUSE_ROTATION_SPEED;
                        targetRotationX += deltaY * MOUSE_ROTATION_SPEED;
                        previousMouseX = event.touches[0].clientX;
                        previousMouseY = event.touches[0].clientY;
                    }
                }
            }

            function onWindowResizeThreeJS() {
                const container = document.getElementById('threejs-visual-container');
                if (!container || container.offsetWidth === 0 || container.offsetHeight === 0) return;

                camera.aspect = container.offsetWidth / container.offsetHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.offsetWidth, container.offsetHeight);
            }

            function animateThreeJS() {
                requestAnimationFrame(animateThreeJS);

                const particlePositions = particleGeom.attributes.position.array;
                const particleColors = particleGeom.attributes.color.array;
                const particleSizes = particleGeom.attributes.size.array;

                const linePositions = lines.geometry.attributes.position.array;
                const lineColors = lines.geometry.attributes.color.array;
                let currentLineSegmentCount = 0;

                mouse3D.set(mouse.x, mouse.y, 0.5).unproject(camera);

                rotationX += (targetRotationX - rotationX) * 0.1;
                rotationY += (targetRotationY - rotationY) * 0.1;

                scene.rotation.x = rotationX;
                scene.rotation.y = rotationY;

                if (!isDragging) {
                    targetRotationX *= ROTATION_DAMPING;
                    targetRotationY *= ROTATION_DAMPING;
                } else {
                    scene.rotation.x *= ROTATION_DAMPING;
                    scene.rotation.y *= ROTATION_DAMPING;
                }

                for (let i = 0; i < NUM_PARTICLES; i++) {
                    const pData = particleData[i];
                    const pPos = pData.position;

                    pPos.add(pData.velocity);

                    const boundary = 300;
                    if (pPos.x > boundary || pPos.x < -boundary) pData.velocity.x *= -1;
                    if (pPos.y > boundary || pPos.y < -boundary) pData.velocity.y *= -1;
                    if (pPos.z > boundary || pPos.z < -boundary) pData.velocity.z *= -1;

                    const distToMouse = pPos.distanceTo(mouse3D);

                    if (distToMouse < INTERACTION_RADIUS) {
                        const repelDirection = mouse3D.clone().sub(pPos).normalize();
                        pData.velocity.addScaledVector(repelDirection, -MOUSE_REPEL_FORCE);

                        pData.currentColor.lerp(HOVER_COLOR, 0.08);
                        pData.size = THREE.MathUtils.lerp(pData.size, 6, 0.15);
                    } else {
                        pData.currentColor.lerp(pData.originalColor, 0.02);
                        pData.size = THREE.MathUtils.lerp(pData.size, 4, 0.05);
                    }

                    pData.velocity.multiplyScalar(PARTICLE_FRICTION);

                    particlePositions[i * 3] = pPos.x;
                    particlePositions[i * 3 + 1] = pPos.y;
                    particlePositions[i * 3 + 2] = pPos.z;

                    particleColors[i * 3] = pData.currentColor.r;
                    particleColors[i * 3 + 1] = pData.currentColor.g;
                    particleColors[i * 3 + 2] = pData.currentColor.b;

                    particleSizes[i] = pData.size;

                    for (let j = i + 1; j < NUM_PARTICLES; j++) {
                        const otherPData = particleData[j];
                        const otherPPos = otherPData.position;

                        const dist = pPos.distanceTo(otherPPos);

                        if (dist < CONNECTION_RADIUS) {
                            linePositions[currentLineSegmentCount * 6] = pPos.x;
                            linePositions[currentLineSegmentCount * 6 + 1] = pPos.y;
                            linePositions[currentLineSegmentCount * 6 + 2] = pPos.z;

                            linePositions[currentLineSegmentCount * 6 + 3] = otherPPos.x;
                            linePositions[currentLineSegmentCount * 6 + 4] = otherPPos.y;
                            linePositions[currentLineSegmentCount * 6 + 5] = otherPPos.z;

                            let lineColor = LINE_COLOR.clone();
                            if (pPos.distanceTo(mouse3D) < INTERACTION_RADIUS || otherPPos.distanceTo(mouse3D) <
                                INTERACTION_RADIUS) {
                                lineColor.lerp(HOVER_COLOR, 0.7);
                                lines.material.opacity = THREE.MathUtils.lerp(lines.material.opacity, 1.0, 0.1);
                            } else {
                                // Opacity of non-hovered lines is also made lower so the background is more visible
                                lineColor.lerp(LINE_COLOR, 0.1);
                                lines.material.opacity = THREE.MathUtils.lerp(lines.material.opacity, document.documentElement.classList.contains('light') ? 0.25 : 0.3, 0.02); // Adjusted for light/dark mode
                            }

                            lineColors[currentLineSegmentCount * 6] = lineColor.r;
                            lineColors[currentLineSegmentCount * 6 + 1] = lineColor.g;
                            lineColors[currentLineSegmentCount * 6 + 2] = lineColor.b;
                            lineColors[currentLineSegmentCount * 6 + 3] = lineColor.r;
                            lineColors[currentLineSegmentCount * 6 + 4] = lineColor.g;
                            lineColors[currentLineSegmentCount * 6 + 5] = lineColor.b;

                            currentLineSegmentCount++;
                        }
                    }
                }

                lines.geometry.setDrawRange(0, currentLineSegmentCount * 2);
                lines.geometry.attributes.position.needsUpdate = true;
                lines.geometry.attributes.color.needsUpdate = true;
                particles.geometry.attributes.position.needsUpdate = true;
                particles.geometry.attributes.color.needsUpdate = true;
                particles.geometry.attributes.size.needsUpdate = true;

                camera.position.x += (mouse.x * 50 - camera.position.x) * 0.05;
                camera.position.y += (-mouse.y * 50 - camera.position.y) * 0.05;
                camera.lookAt(scene.position);

                renderer.render(scene, camera);
            }

            // Initialize Three.js and start animation
            document.addEventListener('DOMContentLoaded', function() {
                initThreeJS();
                animateThreeJS();

                // Listen for 'theme-changed' event from app.blade.php
                window.addEventListener('theme-changed', (event) => {
                    updateThreeJsColors();
                });
            });

            // Ensure Three.js colors are updated when page is first loaded if there's a theme preference
            window.addEventListener('load', updateThreeJsColors);
        </script>
    @endpush
@endsection