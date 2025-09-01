// ==============================================
// ARQUIVO: assets/js/components/search.js
// ==============================================

class NFTSearch {
    constructor(options = {}) {
        this.options = {
            searchInputId: 'searchInput',
            gridSelector: '.nft-grid',
            cardSelector: '.card.nft-card',  // Ajustado para sua estrutura
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

        if (!this.searchInput) {
            console.error('❌ Input de busca não encontrado:', this.options.searchInputId);
            return;
        }

        if (!this.nftGrid) {
            console.error('❌ Grid de NFTs não encontrado:', this.options.gridSelector);
            return;
        }
    }

    loadOriginalNfts() {
        // Captura os NFTs originais do DOM para fazer busca
        const nftCards = document.querySelectorAll(this.options.cardSelector);
        this.originalNfts = Array.from(nftCards).map(card => {
            return {
                element: card,
                title: card.querySelector('.nft-title')?.textContent || '',
                price: card.querySelector('.price')?.textContent || '',  // Ajustado para .price
                creator: card.querySelector('.nft-creator strong')?.textContent || '',  // Pega só o nome do criador
                category: card.dataset.category || '',
                code: card.querySelector('.nft-code')?.textContent || '',  // Pega do DOM também
                status: card.dataset.status || '',
                categoryTag: card.querySelector('.category-tag')?.textContent || '',  // Tag da categoria
                searchText: '' // Será preenchido abaixo
            };
        });

        // Criar texto de busca combinado
        this.originalNfts.forEach(nft => {
            nft.searchText = [
                nft.title,
                nft.price,
                nft.creator,
                nft.category,
                nft.code,
                nft.status,
                nft.categoryTag
            ].join(' ').toLowerCase();
        });

        this.filteredNfts = [...this.originalNfts];
        this.updateStats(this.filteredNfts.length);
        
        console.log(`📊 ${this.originalNfts.length} NFTs carregados para busca`);
    }

    setupEventListeners() {
        if (!this.searchInput) return;

        // Busca em tempo real
        this.searchInput.addEventListener('input', (e) => {
            this.performSearch(e.target.value);
        });

        // Busca ao pressionar Enter
        this.searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                this.performSearch(e.target.value);
            }
        });

        // Busca ao clicar no ícone
        const searchIcon = document.querySelector('.search-icon');
        if (searchIcon) {
            searchIcon.addEventListener('click', () => {
                this.performSearch(this.searchInput.value);
            });
        }

        // Limpar busca com ESC
        this.searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.clearSearch();
            }
        });
    }

    performSearch(searchTerm) {
        const term = searchTerm.toLowerCase().trim();
        
        if (this.isSearching) return;
        this.isSearching = true;

        // Resetar se termo vazio
        if (term === '') {
            this.clearSearch();
            return;
        }

        console.log(`🔍 Buscando por: "${term}"`);

        // Filtrar NFTs
        this.filteredNfts = this.originalNfts.filter(nft => {
            return nft.searchText.includes(term);
        });

        // Renderizar resultados com animação
        this.renderResults();
        
        this.isSearching = false;
    }

    renderResults() {
        const foundCount = this.filteredNfts.length;
        
        if (foundCount === 0) {
            this.showNoResults();
        } else {
            this.showResults();
        }

        this.updateStats(foundCount);
        console.log(`📊 ${foundCount} resultados encontrados`);
    }

    showResults() {
        // Esconder mensagem de "sem resultados"
        if (this.noResults) {
            this.noResults.style.display = 'none';
        }

        // Mostrar grid
        if (this.nftGrid) {
            this.nftGrid.style.display = 'grid';
        }

        // Esconder todos os cards primeiro
        this.originalNfts.forEach(nft => {
            nft.element.style.display = 'none';
            nft.element.classList.remove('search-visible');
        });

        // Mostrar cards filtrados com animação
        this.filteredNfts.forEach((nft, index) => {
            setTimeout(() => {
                nft.element.style.display = 'block';
                nft.element.classList.add('search-visible');
                
                // Animação de entrada
                nft.element.style.opacity = '0';
                nft.element.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    nft.element.style.transition = 'all 0.3s ease';
                    nft.element.style.opacity = '1';
                    nft.element.style.transform = 'translateY(0)';
                }, 50);
                
            }, index * this.options.animationDelay);
        });
    }

    showNoResults() {
        // Esconder todos os cards
        this.originalNfts.forEach(nft => {
            nft.element.style.display = 'none';
        });

        // Esconder grid e mostrar mensagem
        if (this.nftGrid) {
            this.nftGrid.style.display = 'none';
        }

        if (this.noResults) {
            this.noResults.style.display = 'block';
        }
    }

    clearSearch() {
        this.searchInput.value = '';
        this.filteredNfts = [...this.originalNfts];

        // Mostrar todos os cards
        this.originalNfts.forEach(nft => {
            nft.element.style.display = 'block';
            nft.element.style.opacity = '1';
            nft.element.style.transform = 'translateY(0)';
            nft.element.classList.remove('search-visible');
        });

        // Mostrar grid
        if (this.nftGrid) {
            this.nftGrid.style.display = 'grid';
        }

        // Esconder mensagem de sem resultados
        if (this.noResults) {
            this.noResults.style.display = 'none';
        }

        this.updateStats(this.originalNfts.length);
        console.log('🧹 Busca limpa');
    }

    updateStats(count) {
        if (this.resultCount) {
            this.resultCount.textContent = count;
        }

        if (this.searchStats) {
            const text = count === 1 ? 'NFT encontrado' : 'NFTs encontrados';
            this.searchStats.innerHTML = `Mostrando <span id="resultCount">${count}</span> ${text}`;
        }
    }

    // Método público para busca programática
    search(term) {
        this.searchInput.value = term;
        this.performSearch(term);
    }

    // Método público para limpar
    clear() {
        this.clearSearch();
    }

    // Método público para recarregar NFTs (útil após AJAX)
    reload() {
        this.loadOriginalNfts();
        this.clearSearch();
    }
};



