// Selecione a div com a classe "profile-info-rating-level"
const profileInfoLevel = document.querySelector(".profile-info-rating-level");
const testeProfile = profileInfoLevel.classList[1]

// Crie um objeto que mapeia os níveis aos seus conteúdos correspondentes
const levelContents = {
    bronze: `
        <img src="./assets/img/bronze-medal.svg" alt="">
        <div class="profile-info-rating-level-info">
            <h3 class="profile-info-text-gradient profile-info-text-gradient-bronze">Caminhoneiro Bronze</h3>
            <div class="profile-info-levels">
                <img src="./assets/img/bronze-rectangle.svg" alt="">
                <img src="./assets/img/regular-rectangle.svg" alt="">
                <img src="./assets/img/regular-rectangle.svg" alt="">
                <img src="./assets/img/regular-rectangle.svg" alt="">
            </div>
        </div>
    `,
    prata: `
    <img src="./assets/img/prata-medal.svg" alt="">
    <div class="profile-info-rating-level-info">
        <h3 class="profile-info-text-gradient profile-info-text-gradient-prata">Caminhoneiro Prata</h3>
        <div class="profile-info-levels">
            <img src="./assets/img/prata-rectangle.svg" alt="">
            <img src="./assets/img/prata-rectangle.svg" alt="">
            <img src="./assets/img/regular-rectangle.svg" alt="">
            <img src="./assets/img/regular-rectangle.svg" alt="">
        </div>
    </div>
    `,
    ouro: `
    <img src="./assets/img/gold-medal.svg" alt="">
    <div class="profile-info-rating-level-info">
        <h3 class="profile-info-text-gradient profile-info-text-gradient-ouro">Caminhoneiro Ouro</h3>
        <div class="profile-info-levels">
            <img src="./assets/img/ouro-rectangle.svg" alt="">
            <img src="./assets/img/ouro-rectangle.svg" alt="">
            <img src="./assets/img/ouro-rectangle.svg" alt="">
            <img src="./assets/img/regular-rectangle.svg" alt="">
        </div>
    </div>
    `,
    diamante: `
    <img src="./assets/img/diamond-medal.svg" alt="">
    <div class="profile-info-rating-level-info">
        <h3 class="profile-info-text-gradient profile-info-text-gradient-diamond">Caminhoneiro Diamante</h3>
        <div class="profile-info-levels">
            <img src="./assets/img/diamond-rectangle.svg" alt="">
            <img src="./assets/img/diamond-rectangle.svg" alt="">
            <img src="./assets/img/diamond-rectangle.svg" alt="">
            <img src="./assets/img/diamond-rectangle.svg" alt="">
        </div>
    </div>
    `,
};

// Função para adicionar o conteúdo com base no nível
function addLevelContent(level) {
    profileInfoLevel.innerHTML = levelContents[level];
}

// Exemplo de como usar a função para adicionar o conteúdo do nível "bronze"
addLevelContent(testeProfile);