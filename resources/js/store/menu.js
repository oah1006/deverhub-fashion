document.addEventListener('alpine:init', () => {
    Alpine.store('menu', {
        openSearch: false,
        toggleSearch() {
            this.openSearch = !this.openSearch
        }
    })
})