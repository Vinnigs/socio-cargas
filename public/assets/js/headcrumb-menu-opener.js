const menuBtn = document.querySelector('#breadcrumb-menu-opener')
const menu = document.querySelector('.menu')
const menuWrapper = document.querySelector('.aside-wrapper')

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('active')
    menuWrapper.classList.toggle('active')
})

document.addEventListener('click', (event) => {
    if (!menu.contains(event.target) && event.target !== menuBtn) {
        // Verifica se o clique não ocorreu dentro da div e não foi no botão
        menu.classList.remove('active');
        menuWrapper.classList.remove('active')
    }
});