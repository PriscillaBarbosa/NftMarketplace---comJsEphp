class trocarTema {
    constructor(buttonId) {
        this.button = document.getElementById(buttonId); 
        this.setupEventListeners(); 
    }

    setupEventListeners() {
    this.button.addEventListener('click', this.toggle.bind(this));
    }

    toggle(event) {
        event.preventDefault();
        document.body.classList.toggle('light-mode');
    }
}

