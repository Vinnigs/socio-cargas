const filterBtn = document.querySelector('#filter-button-toggle')
const filter = document.querySelector('.filter')
const filterCloseBtn = document.querySelector('#filter-close-btn')

filterBtn.addEventListener('click', () => {
    filter.classList.toggle('active')
})

filterCloseBtn.addEventListener('click', () => {
    filter.classList.toggle('active')
})

document.addEventListener('click', (event) => {
    if (!filter.contains(event.target) && event.target !== filterBtn) {
        // Verifica se o clique não ocorreu dentro da div e não foi no botão
        filter.classList.remove('active');
    }
});