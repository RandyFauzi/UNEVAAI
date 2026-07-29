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

            globe = createGlobe(canvas, {
                devicePixelRatio: 2,
                width: currentWidth * 2,
                height: currentHeight * 2,
                phi: 0,
                theta: 0.3,
                dark: 1,
                scale: 1.0,
                diffuse: 1.2,
                mapSamples: 16000,
                mapBrightness: 6,
                baseColor: [1, 1, 1], // Pure white dots (glow/dark mode handles contrast)
                markerColor: [0.1, 0.8, 1], // Cyan markers
                glowColor: [0.05, 0.05, 0.05], // Subtle glow for dark background
                opacity: 1,
                offset: [0, 0],
                markers: [
                    { location: [37.7595, -122.4367], size: 0.03 }, // San Francisco
                    { location: [40.7128, -74.0060], size: 0.1 }, // New York
                    { location: [51.5072, -0.1276], size: 0.05 }, // London
                    { location: [-6.2088, 106.8456], size: 0.08 }, // Jakarta
                    { location: [35.6895, 139.6917], size: 0.06 }, // Tokyo
                ],
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
