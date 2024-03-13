const modalBtnClose = document.querySelector('#modal-frete-details-close-btn')
const modalBtns = document.querySelectorAll('.frete-details-panel-content-actions-item')
const modal = document.querySelector('.modal-caminhoneiro-wrapper')
const numberCaminhoneiros = document.querySelector('.frete-details-panel-candidatos-number')
const listCaminhoneiros = document.querySelector('.frete-details-panel-content-actions-caminhoneiros');
const modalList = document.querySelector('.modal-list-wrapper')
const modalListBtn = document.querySelector('.open-modal-list')
const modalListBtnClose = document.querySelector('.modal-list-top-close-btn')

modalBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
        modal.classList.add('active')
    });
});

modalBtnClose.addEventListener('click', () => {
    modal.classList.remove('active')
})

modalListBtn.addEventListener('click', () => {
    modalList.classList.add('active')
})

modalListBtnClose.addEventListener('click', () => {
    modalList.classList.remove('active')
})

modalBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
        modalList.classList.remove('active')
    });
});



if (listCaminhoneiros ) {
    const liElements = listCaminhoneiros.querySelectorAll('li'); // Obtenha todos os elementos <li> dentro da lista
    const numberOfLiElements = liElements.length
    numberCaminhoneiros.innerHTML = `${numberOfLiElements}`
  } else {
    console.log('A lista com a classe "frete-details-panel-content-actions" não foi encontrada.');
  }

