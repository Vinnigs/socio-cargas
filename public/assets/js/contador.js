// Suponha que você tenha uma data inicial
var dataInicialStr = document.getElementById('hora').getAttribute('dataCriado');
var dataInicial = new Date(dataInicialStr);
var dataFinalStr = document.getElementById('hora').getAttribute('dataFinal');
var dataFinal = parseInt(dataFinalStr);
// Adiciona 24 horas à data inicial
dataInicial.setHours(dataInicial.getHours() + dataFinal);
var $elemento = document.getElementById('hora');


// Define a função para atualizar o contador
function atualizarContador() {
    // Obtém a data e hora atuais
    var agora = new Date();

    // Calcula a diferença em milissegundos
    var diferenca = dataInicial - agora;

    // Converte a diferença de milissegundos para horas, minutos e segundos
    var horas = Math.floor(diferenca / (1000 * 60 * 60));
    var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
    var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);

    // Adiciona zeros à frente dos números menores que 10
    horas = horas < 10 ? "0" + horas : horas;
    minutos = minutos < 10 ? "0" + minutos : minutos;
    segundos = segundos < 10 ? "0" + segundos : segundos;

    // Exibe o contador
    $elemento.innerHTML = `${horas} : ${minutos} : ${segundos}`

    if (diferenca <= 0) {
        clearInterval(intervalID);
        $elemento.innerHTML = "Recarregue a página.";
    }
}

// Chama a função a cada segundo (1000 milissegundos)
var intervalID = setInterval(atualizarContador, 1000);