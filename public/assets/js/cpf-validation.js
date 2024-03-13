const inputCPF = document.querySelector('#input-cpf')
const labelCPF = document.querySelector("#label-cpf")
let validCPF = false

// Função para formatar o CPF
function formatCPF(inputCPF) {
    let cpf = inputCPF.value;
    cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos
    cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4'); // Formata o CPF
    inputCPF.value = cpf; // Atualiza o valor do input com a formatação
}

// Função para verificar se um CPF é válido
function TestaCPF(inputCPF) {
    let cpf = inputCPF.value.replace(/\D/g, ''); // Remove caracteres não numéricos
    let Soma;
    let Resto;
    let i = 0
    Soma = 0;
    if (cpf == "00000000000") return false;

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(cpf.substring(9, 10))) return false;

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(cpf.substring(10, 11))) return false;

    return true;
}

// Adiciona um ouvinte de evento 'input' para o input
inputCPF.addEventListener('input', () => {
    formatCPF(inputCPF); // Formata o CPF

    // Verifica se o CPF é válido
    if (TestaCPF(inputCPF)) {
        labelCPF.setAttribute('style', 'color: black')
        labelCPF.innerHTML = 'CPF: *'
        inputCPF.setAttribute('style', 'border-color:#d9d9d9')
        validCPF = true
    } else {
        labelCPF.setAttribute('style', 'color: red')
        labelCPF.innerHTML = 'CPF: *    Insira um CPF válido'
        inputCPF.setAttribute('style', 'border-color:red')
        validCPF = false
    }
});