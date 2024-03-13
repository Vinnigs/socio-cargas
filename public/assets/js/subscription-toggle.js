const btnMonth = document.querySelector('#button-month')
const btnAnual = document.querySelector('#button-anual')
const pricesMonth = document.querySelector('.subscription-main-month')
const pricesAnual = document.querySelector('.subscription-main-anual')

btnMonth.addEventListener('click', () => {
    btnMonth.classList.add('active')
    btnAnual.classList.remove('active')
    pricesMonth.classList.add('active')
    pricesAnual.classList.remove('active')
})

btnAnual.addEventListener('click', () => {
    btnAnual.classList.add('active')
    btnMonth.classList.remove('active')
    pricesAnual.classList.add('active')
    pricesMonth.classList.remove('active')
})