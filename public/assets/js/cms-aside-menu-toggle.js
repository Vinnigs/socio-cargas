const menu = document.querySelector('.aside-wrapper')
const menuBtn = document.querySelector('.menu-cms-toggle')
const menuContent = document.querySelector('.cms-aside-menu')

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('active')
})

document.addEventListener('click', (event) => {
    if (!menuContent.contains(event.target) && event.target !== menuBtn) {
        // Verifica se o clique não ocorreu dentro da div e não foi no botão
        menuContent.classList.remove('active');
        menu.classList.remove('active');
    }
});