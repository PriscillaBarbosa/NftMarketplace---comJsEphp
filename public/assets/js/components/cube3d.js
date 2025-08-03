// Referência do cubo
        const cube = document.getElementById('hero-cube');
        let isPaused = false;

        // Adiciona mais partículas dinamicamente
        function createParticles() {
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.left = (60 + Math.random() * 40) + '%'; // Só no lado direito
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (4 + Math.random() * 4) + 's';
                document.body.appendChild(particle);
            }
        }

         // Controle por click - pausa/play
        cube.addEventListener('click', function() {
            if (isPaused) {
                cube.style.animationPlayState = 'running';
                isPaused = false;
                console.log('▶️ Cubo retomado');
            } else {
                cube.style.animationPlayState = 'paused';
                isPaused = true;
                console.log('⏸️ Cubo pausado');
            }
        });


        // Cria as partículas quando a página carrega
        window.addEventListener('load', createParticles);

      //  // Muda o conteúdo das faces periodicamente
         // const alternativeNames = [
            //  'Cosmic Cat', 'Digital Dragon', 'Cyber Punk', 'Meta Monkey',
            //  'Space Whale', 'Neon Tiger', 'Quantum Bird', 'Pixel Phoenix',
            //  'Ghost Rider', 'Crystal Wolf', 'Fire Fox', 'Ice Bear'
       //   ];


         //setInterval(() => {
            // Só muda se não estiver pausado
            // if (!isPaused) {
               //  const faces = document.querySelectorAll('.cube-face');
               //  faces.forEach(face => {
               //      const randomName = alternativeNames[Math.floor(Math.random() * alternativeNames.length)];
               //      face.textContent = randomName;
              //   });
            // }
       //  }, 12000); // Muda a cada 12 segundos