// Configurações globais
const App = {
    baseUrl: window.location.origin,
    components: {}, //Armazena instâncias dos componentes
    
    // Inicialização
    init() {
        this.setupEventListeners();
        this.loadComponents();
        this.initComponents(); //inicia os componentes
    },

    //Inicializa componentes específicos por página
    initComponents() {
        //verifica se está na página
        if (document.querySelector('#hero-cube')) {
           this.components.heroCube = new Cube3D('#hero-cube', {
                size: 200,
                glowColor: '#00ccff',
                theme: 'blue'
           });
        }
    },

    //cubo 3d
    initComponents() {
    if (document.querySelector('#hero-cube')) {
        this.components.heroCube = new Cube3D('#hero-cube');
    }
},

    
    // Event Listeners globais
    setupEventListeners() {
        // Mobile menu toggle
        document.addEventListener('click', (e) => {
            if (e.target.matches('[data-mobile-toggle]')) {
                this.toggleMobileMenu();
            }
        });
        
        // Upload de imagens
        document.addEventListener('change', (e) => {
            if (e.target.matches('input[type="file"]')) {
                this.handleFileUpload(e.target);
            }
        });
    }
};

// Inicializar quando DOM estiver pronto
document.addEventListener('DOMContentLoaded', () => App.init());

