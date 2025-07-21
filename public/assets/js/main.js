// Configurações globais
const App = {
    baseUrl: window.location.origin,
    
    // Inicialização
    init() {
        this.setupEventListeners();
        this.loadComponents();
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