const looker = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
            startCounter(entry.target);
            looker.unobserve(entry.target); // Remova o observador após a ativação
        }
    });
});

document.querySelectorAll('.num').forEach((valueDisplay) => {
    looker.observe(valueDisplay);
});

function startCounter(valueDisplay) {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = 2300; // Tempo total da animação em milissegundos
    let interval = 16; // Intervalo de atualização (aproximadamente 60 FPS)
    let steps = Math.floor(duration / interval);
    let stepValue = endValue / steps;

    function updateCounter() {
        startValue += stepValue;
        if (startValue >= endValue) {
            startValue = endValue;
        }

        valueDisplay.textContent = Math.round(startValue);

        if (startValue < endValue) {
            requestAnimationFrame(updateCounter);
        }
    }

    updateCounter();
}

