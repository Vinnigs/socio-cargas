var divElements = document.querySelectorAll(".profile-info-rating-rate-bars");
const rateText = document.querySelector('.profile-info-text-gradient')
const rateNumber = document.querySelector('.profile-info-rating-rate-number')
const pElement = document.querySelector('.profile-info-rating-rate-number');

if (pElement) {
    pElement.textContent = '4.8'
    pElement.value = 4.8;
}

// Loop através dos elementos
divElements.forEach(function (divElement) {
    // Verifica se a div contém a classe "profile-info-rating-rate-bars-bronze"
    if (pElement.value >= 0 && pElement.value < 2) {
        adicionarImagensBronze(divElement);
    }
    // Verifica se a div contém a classe "profile-info-rating-rate-bars-prata"
    else if (pElement.value >= 2 && pElement.value < 3) {
        adicionarImagensPrata(divElement);
    }
    else if (pElement.value >= 3 && pElement.value < 4) {
        adicionarImagensOuro(divElement);
    }
    else if (pElement.value >= 4 && pElement.value < 5) {
        adicionarImagensPlatinum(divElement);
    }
    else if (pElement.value == 5) {
        adicionarImagensDiamante(divElement);
    }
    // Adicione mais verificações para outras classes conforme necessário
});

// Função para adicionar imagens para a classificação "bronze"
function adicionarImagensBronze(divElement) {
    let imagens = [
        "./assets/img/star-fill.svg",
        "./assets/img/star.svg",
        "./assets/img/star.svg",
        "./assets/img/star.svg",
        "./assets/img/star.svg",
    ];

    adicionarImagens(divElement, imagens);
}

// Função para adicionar imagens para a classificação "prata"
function adicionarImagensPrata(divElement) {
    let imagens = [
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star.svg",
        "./assets/img/star.svg",
        "./assets/img/star.svg",
    ];

    adicionarImagens(divElement, imagens);
}

function adicionarImagensOuro(divElement) {
    let imagens = [
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star.svg",
        "./assets/img/star.svg",
    ];

    adicionarImagens(divElement, imagens);
}

function adicionarImagensPlatinum(divElement) {
    let imagens = [
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star.svg",
    ];

    adicionarImagens(divElement, imagens);
}

function adicionarImagensDiamante(divElement) {
    let imagens = [
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
        "./assets/img/star-fill.svg",
    ];

    adicionarImagens(divElement, imagens);
}

// Função genérica para adicionar imagens à div
function adicionarImagens(divElement, imagens) {
    imagens.forEach(function (imagemSrc) {
        var img = document.createElement("img");
        img.src = imagemSrc;
        img.alt = "Descrição da imagem"; // Pode personalizar a descrição, se necessário
        divElement.appendChild(img);
    });
}

function adicionarTexto(textoDesc) {
    rateText.innerHTML = textoDesc
}