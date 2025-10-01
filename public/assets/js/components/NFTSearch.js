
export default class NFTSearch {
    constructor(options = {}) {
        this.options = {
            searchInputId: 'searchInput',
            gridSelector: '.nft-grid',
            cardSelector: '.card.nft-card',  
            noResultsSelector: '#noResults',
            statsSelector: '#searchStats', 
            countSelector: '#resultCount',
            animationDelay: 100,
            ...options
        };

        this.originalNfts = [];
        this.filteredNfts = [];
        this.isSearching = false;

        this.init();
    }

    init() {
        this.setupElements();
        this.setupEventListeners();
        this.loadOriginalNfts();
        console.log('✅ NFT Search Component inicializado');
    }

    setupElements() {
        this.searchInput = document.getElementById(this.options.searchInputId);
        this.nftGrid = document.querySelector(this.options.gridSelector);
        this.noResults = document.querySelector(this.options.noResultsSelector);
        this.searchStats = document.querySelector(this.options.statsSelector);
        this.resultCount = document.querySelector(this.options.countSelector);

        if (!this.searchInput || !this.nftGrid) {
            console.error('❌ Elementos essenciais de busca (input ou grid) não encontrados. Verifique os seletores.');
            return;
        }
    }

    loadOriginalNfts() {
        const nftCards = document.querySelectorAll(this.options.cardSelector);
        this.originalNfts = Array.from(nftCards).map(card => {
            const nftData = {
                element: card,
                title: card.querySelector('.nft-title')?.textContent || '',
                price: card.querySelector('.price')?.textContent || '',
                creator: card.querySelector('.nft-creator strong')?.textContent || '',
                category: card.dataset.category || '',
                code: card.querySelector('.nft-code')?.textContent || '',
                status: card.dataset.status || '',
                categoryTag: card.querySelector('.category-tag')?.textContent || '',
            };
            // Cria um texto unificado para busca
            nftData.searchText = Object.values(nftData).join(' ').toLowerCase();
            return nftData;
        });

        this.filteredNfts = [...this.originalNfts];
        this.updateStats(this.filteredNfts.length);
        
        console.log(`📊 ${this.originalNfts.length} NFTs carregados para busca`);
    }

    setupEventListeners() {
        if (!this.searchInput) return;

        this.searchInput.addEventListener('input', (e) => this.performSearch(e.target.value));
        this.searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                this.performSearch(e.target.value);
            }
        });
        this.searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this.clearSearch();
        });

        const searchIcon = document.querySelector('.search-icon');
        if (searchIcon) {
            searchIcon.addEventListener('click', () => this.performSearch(this.searchInput.value));
        }
    }

    performSearch(searchTerm) {
        const term = searchTerm.toLowerCase().trim();
        
        if (this.isSearching) return;
        this.isSearching = true;

        if (term === '') {
            this.clearSearch();
            this.isSearching = false;
            return;
        }

        console.log(`🔍 Buscando por: "${term}"`);
        this.filteredNfts = this.originalNfts.filter(nft => nft.searchText.includes(term));
        this.renderResults();
        
        this.isSearching = false;
    }

    renderResults() {
        const foundCount = this.filteredNfts.length;
        this.updateStats(foundCount);
        
        if (foundCount === 0) {
            this.showNoResults();
        } else {
            this.showResults();
        }
        console.log(`📊 ${foundCount} resultados encontrados`);
    }

    showResults() {
        if (this.noResults) this.noResults.style.display = 'none';
        if (this.nftGrid) this.nftGrid.style.display = 'grid';

        this.originalNfts.forEach(nft => nft.element.style.display = 'none');

        this.filteredNfts.forEach((nft, index) => {
            nft.element.style.display = 'block';
            nft.element.style.opacity = '0';
            nft.element.style.transform = 'translateY(20px)';
            nft.element.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
            
            setTimeout(() => {
                nft.element.style.opacity = '1';
                nft.element.style.transform = 'translateY(0)';
            }, 50 + (index * this.options.animationDelay / 2)); // Animação escalonada
        });
    }

    showNoResults() {
        this.originalNfts.forEach(nft => nft.element.style.display = 'none');
        if (this.nftGrid) this.nftGrid.style.display = 'none';
        if (this.noResults) this.noResults.style.display = 'block';
    }

    clearSearch() {
        if (this.searchInput) this.searchInput.value = '';
        this.filteredNfts = [...this.originalNfts];
        this.showResults();
        this.updateStats(this.originalNfts.length);
        console.log('🧹 Busca limpa');
    }

    updateStats(count) {
        if (this.resultCount) this.resultCount.textContent = count;
        if (this.searchStats) {
            const text = count === 1 ? 'NFT encontrado' : 'NFTs encontrados';
            this.searchStats.innerHTML = `Mostrando <span id="resultCount">${count}</span> ${text}`;
        }
    }

    // --- Métodos Públicos ---
    search(term) { this.searchInput.value = term; this.performSearch(term); }
    clear() { this.clearSearch(); }
    reload() { this.loadOriginalNfts(); this.clearSearch(); }
};