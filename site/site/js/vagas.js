
var vagaSwitch = false;
var vagaSwitch2 = false;
var vagaSwitch3 = false;
var vagaSwitch4 = false;
var vagas = 0;
var disponiveis = 4;
var dinheiro = 0;



function vaga1() {

    var timer = (new Date);


    if (vagaSwitch) {

        window.document.getElementById("vaga1").src = "images/verde.jpg";
    }
    else {

        window.document.getElementById("vaga1").src = "images/vermelho.jpg";
    }

    vagaSwitch = !vagaSwitch;


    if (vagaSwitch) {
        vagas = vagas + 1;
        dinheiro = dinheiro + 1;
        disponiveis = 4 - vagas;

        
        console.log("horario de entrada na vaga1: " + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }
    else {
        vagas = vagas - 1;
        disponiveis = 4 - vagas;

        console.log("horario da said na vaga1: " + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }

}

function vaga2() {

    var timer = (new Date);

    if (vagaSwitch2) {

        window.document.getElementById("vaga2").src = "images/verde.jpg";
    } else {

        window.document.getElementById("vaga2").src = "images/vermelho.jpg";
    }

    vagaSwitch2 = !vagaSwitch2;


    if (vagaSwitch2) {
        vagas = vagas + 1;
        dinheiro = dinheiro + 1;
        disponiveis = 4 - vagas;

        console.log("horario de entrada na vaga2: " + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }
    else {
        vagas = vagas - 1;
        disponiveis = 4 - vagas;

        console.log("horario da saida na vaga2: " + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }

}
function vaga3() {

    var timer = (new Date);

    if (vagaSwitch3) {

        window.document.getElementById("vaga3").src = "images/verde.jpg";
    } else {

        window.document.getElementById("vaga3").src = "images/vermelho.jpg";
    }

    vagaSwitch3 = !vagaSwitch3;


    if (vagaSwitch3) {
        vagas = vagas + 1;
        dinheiro = dinheiro + 1;
        disponiveis = 4 - vagas;

        console.log("horario de entrada na vaga3:" + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }
    else {
        vagas = vagas - 1;
        disponiveis = 4 - vagas;

        console.log("horario da saida na vaga3: " + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }

}

function vaga4() {

    var timer = (new Date);

    if (vagaSwitch4) {

        window.document.getElementById("vaga4").src = "images/verde.jpg";
    } else {

        window.document.getElementById("vaga4").src = "images/vermelho.jpg";
    }

    vagaSwitch4 = !vagaSwitch4;


    if (vagaSwitch4) {
        vagas = vagas + 1;
        dinheiro = dinheiro + 1;
        disponiveis = 4 - vagas;

        console.log("horario de entrada na vaga4:" + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }
    else {
        vagas = vagas - 1;
        disponiveis = 4 - vagas;

        console.log("horario da saida na vaga4: " + timer)
        console.log('Numero de vagas disponiveis: ' + disponiveis)
        console.log('Numero de entradas no Estacionamento: ' + dinheiro)
        console.log('Valor ganho: R$ ' + dinheiro * 10)
        console.log("=============================================================")

    }

}
function receberValores() {
    alert('Numero de vagas disponiveis: ' + disponiveis)
    alert('Numero de entradas no Estacionamento: ' + dinheiro)
    alert('Valor ganho: R$ ' + dinheiro * 10)
}

