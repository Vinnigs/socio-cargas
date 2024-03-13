const btnVerSenha = document.querySelector("#see-password")
const btnVerSenhaConfirm = document.querySelector('#see-password-repeat')

const formButton = document.querySelector('#form-submit')

const inputName = document.querySelector("#input-name")
const labelName = document.querySelector("#label-name")
let validName = false

const inputEmail = document.querySelector("#input-email")
const labelEmail = document.querySelector("#label-email")
let validEmail = false

const inputPassword = document.querySelector("#input-password")
const labelPassword = document.querySelector("#label-password")
let validPassword = false

const inputConfirmPassword = document.querySelector("#input-repeat-password")
const labelConfirmPassword = document.querySelector("#label-repeat-password")
let validConfirmPassword = false

const inputCPFCad = document.querySelector('#input-cpf')
const labelCPF = document.querySelector("#label-cpf")
let validCPF = false

inputName.addEventListener('keyup', () => {
    if (inputName.value.length <= 2) {
        labelName.setAttribute('style', 'color: red')
        labelName.innerHTML = 'Nome: *    Insira no mínimo 3 caracteres'
        inputName.setAttribute('style', 'border-color:red')
        validName = false
    } else {
        labelName.setAttribute('style', 'color: black')
        labelName.innerHTML = ' Nome: *'
        inputName.setAttribute('style', 'border-color:#d9d9d9')
        validName = true
    }
})

function validateEmail(inputEmail) {
    let re = /\S+@\S+\.\S+/;
    return re.test(inputEmail);
}

inputEmail.addEventListener('keyup', () => {
    if (validateEmail(inputEmail.value) == false) {
        labelEmail.setAttribute('style', 'color: red')
        labelEmail.innerHTML = 'E-mail: *    Insira um endereço de e-mail válido'
        inputEmail.setAttribute('style', 'border-color:red')
        validEmail = false
    } else if (validateEmail(inputEmail.value) == true) {
        labelEmail.setAttribute('style', 'color: black')
        labelEmail.innerHTML = ' E-mail: *'
        inputEmail.setAttribute('style', 'border-color:#d9d9d9')
        validEmail = true
    }
})

inputPassword.addEventListener('keyup', () => {
    if (inputPassword.value.length <= 7) {
        labelPassword.setAttribute('style', 'color: red')
        labelPassword.innerHTML = 'Senha: *    Insira no mínimo 8 caracteres'
        inputPassword.setAttribute('style', 'border-color:red')
    } else {
        labelPassword.setAttribute('style', 'color: black')
        labelPassword.innerHTML = ' Senha: *'
        inputPassword.setAttribute('style', 'border-color:#d9d9d9')
        validPassword = true
    }
})

inputConfirmPassword.addEventListener('keyup', () => {
    if (inputPassword.value != inputConfirmPassword.value) {
        labelConfirmPassword.setAttribute('style', 'color: red')
        labelConfirmPassword.innerHTML = 'Repita sua senha: * As senhas não conferem'
        inputConfirmPassword.setAttribute('style', 'border-color:red')
        validConfirmPassword = false
    } else {
        labelConfirmPassword.setAttribute('style', 'color: black')
        labelConfirmPassword.innerHTML = ' Repita sua senha: *'
        inputConfirmPassword.setAttribute('style', 'border-color:#d9d9d9')
        validConfirmPassword = true
    }
})

inputCPFCad.addEventListener('keyup', () => {
    if(labelCPF.innerHTML === 'CPF: *') {
        validCPF = true
    } else {
        validCPF = false
    }
})

formButton.addEventListener('click', () => {
    if (validName && validEmail && validPassword && validConfirmPassword && validCPF) {
        alert('deu bommm')
    } else {
        alert('ta tudo vazio')
    }
})


btnVerSenha.addEventListener('click', () => {
    let inputSenha = document.querySelector('#input-password')

    if (inputSenha.getAttribute('type') == 'password') {
        inputSenha.setAttribute('type', 'text')
    } else {
        inputSenha.setAttribute('type', 'password')
    }
})

btnVerSenhaConfirm.addEventListener('click', () => {
    let inputSenhaConfirm = document.querySelector('#input-repeat-password')

    if (inputSenhaConfirm.getAttribute('type') == 'password') {
        inputSenhaConfirm.setAttribute('type', 'text')
    } else {
        inputSenhaConfirm.setAttribute('type', 'password')
    }
})

