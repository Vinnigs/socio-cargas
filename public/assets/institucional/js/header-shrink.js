window.addEventListener("scroll", function() {
    const header = document.querySelector(".header #container");
    if (window.scrollY >= 150) { // Ajuste a posição de rolagem desejada
        header.classList.add("shrink");
    } else {
        header.classList.remove("shrink");
    }
});