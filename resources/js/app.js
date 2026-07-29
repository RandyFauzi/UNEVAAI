import createGlobe from 'cobe';

document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('cobe-globe');
    if (canvas) {
        let phi = 0;
        let pointerInteracting = null;
        let pointerInteractionMovement = 0;
        let globe = null;

        const initGlobe = () => {
            if (globe) {
                globe.destroy();
            }
            
            // Get physical dimensions of canvas to render crisp high-res dots
            const currentWidth = canvas.offsetWidth;
            const currentHeight = canvas.offsetHeight;
            const size = Math.max(currentWidth, currentHeight, 500);

            globe = createGlobe(canvas, {
                devicePixelRatio: 2,
                width: size * 2,
                height: size * 2,
                phi: 0,
                theta: 0.3,
                dark: 1, // Dark mode background
                scale: 1.0,
                diffuse: 1.2,
                mapSamples: 16000, // Safe default for high density without crashing WebGL
                mapBrightness: 6,
                baseColor: [1, 1, 1], // Pure white dots for sharp contrast
                markerColor: [0.1, 0.8, 1],
                glowColor: [0.2, 0.5, 1], // Soft blue glow around the dark sphere
                opacity: 1,
                offset: [0, 0],
                markers: [],
                onRender: (state) => {
                    if (!pointerInteracting) {
                        phi += 0.003;
                    }
                    state.phi = phi + pointerInteractionMovement;
                },
            });
        };

        // Initialize and handle resizing
        initGlobe();
        window.addEventListener('resize', () => {
            initGlobe();
        });

        // Add interactive drag controls
        canvas.addEventListener('pointerdown', (e) => {
            pointerInteracting = e.clientX - pointerInteractionMovement;
            canvas.style.cursor = 'grabbing';
        });

        canvas.addEventListener('pointerup', () => {
            pointerInteracting = null;
            canvas.style.cursor = 'grab';
        });

        canvas.addEventListener('pointerout', () => {
            pointerInteracting = null;
            canvas.style.cursor = 'grab';
        });

        canvas.addEventListener('pointermove', (e) => {
            if (pointerInteracting !== null) {
                const delta = e.clientX - pointerInteracting;
                pointerInteractionMovement = delta * 0.01;
            }
        });
    }
});
