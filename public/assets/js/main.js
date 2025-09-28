import createParticles from "./components/particles.js";


// Configurações globais
const App = {
    baseUrl: window.location.origin,
    components: {},
    
    // Inicialização
    init() {
        this.setupEventListeners();
        this.initComponents();
        this.initScrollReveal();
        this.initSearch();
        this.initParticles();
    },

    initSearch() {
        // Só inicializar se estiver na página de galeria
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            this.components.nftSearch = new NFTSearch({
                searchInputId: 'searchInput',
                gridSelector: '.nft-grid',
                cardSelector: '.card.nft-card', 
                noResultsSelector: '#noResults',
                statsSelector: '#searchStats',
                countSelector: '#resultCount'
            });
            console.log('✅ Sistema de busca inicializado');
        }
    },

    //método para inicializar as partículas
    initParticles() {
        const particleContainer = document.querySelector('.container-body');

        if (particleContainer) {
            console.log('✅ Container encontrado! Criando partículas...');
            createParticles(particleContainer, 30);
            console.log('particulas inicializadas');
        }
    },

    // Inicializa componentes (SEM ERRO)
    initComponents() {
       // this.components.tema = new trocarTema('claroBtn'); 

        const cubeElement = document.querySelector('#hero-cube');
        if (cubeElement) {
            // Só tentar criar o cubo se a classe existir
            if (typeof Cube3D !== 'undefined') {
                try {
                    this.components.heroCube = new Cube3D('#hero-cube', {
                        size: 200,
                        glowColor: '#00ccff',
                        theme: 'blue'
                    });
                    console.log('✅ Cubo 3D inicializado');
                } catch (error) {
                    console.log('❌ Erro no cubo:', error);
                }
            } else {
                console.log('⚠️ Classe Cube3D não carregada ainda');
            }
        }
    },

    // Scroll Reveal com MUITO debug
    initScrollReveal() {
        console.log('🚀 Iniciando scroll reveal...');
        
        // Verificar se o elemento existe
        const elementos = document.querySelectorAll('.feature-section .fade-up');
        console.log('🔍 Elementos encontrados:', elementos.length);
        
        if (elementos.length === 0) {
            console.log('❌ Nenhum elemento .feature-section .fade-up encontrado!');
            return;
        }

        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Se for card NFT, fazer em sequência
                    if (entry.target.classList.contains('nft-card')) {
                        const allCards = document.querySelectorAll('.nft-card.fade-up');
                        const index = Array.from(allCards).indexOf(entry.target);
                        
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, index * 150); // 150ms entre cada card
                    } else {
                        // Outros elementos normalmente
                        entry.target.classList.add('visible');
                    }
                }
            });
        }, { 
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });



        // Observar elementos
        elementos.forEach(el => {
            observer.observe(el);
            console.log('👀 Observando elemento:', el);
        });
    },
    
    // Event Listeners globais
    setupEventListeners() {

        document.addEventListener('click', (e) => {
            if (e.target.matches('[data-mobile-toggle]')) {
                this.toggleMobileMenu();
            }
        });
        
        document.addEventListener('change', (e) => {
            if (e.target.matches('input[type="file"]')) {
                this.handleFileUpload(e.target);
            }
        });
    }
};

// Inicializar
document.addEventListener('DOMContentLoaded', () => App.init());