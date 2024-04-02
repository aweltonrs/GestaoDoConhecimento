
// AQUI TEREMOS OS SCRIPTS DE TODOS OS EXERCÍCIOS
var data = new Date();
var img = document.getElementById('img');
var msg = document.getElementById('msg');
var botao = document.getElementById('click');
// SCRIPTS EX010 E 011
function carregarHora(){
    
    var hora = data.getHours();
    var msgConcat = `Agora são ${hora} horas. `;

    if(hora > 0 && hora < 12){
        img.src = "../img/manha.png";
        document.body.style.background = '#FED867'
        msgConcat += 'Bom Dia! '
    }else if(hora >= 12 && hora < 18){
        img.src = "../img/tarde.png";
        document.body.style.background = '#E59177'
        msgConcat += "Boa Tarde! "
    }else{
        img.src = "../img/noite.png";
        document.body.style.background='#173048'
        msgConcat += "Boa Noite! "
    }

    msg.innerHTML=msgConcat;
}

// SCRIPTS EX012
function calcularIdade(){
    var nascimento = document.getElementById('nascimento').value;
    var dataAtual = data.getDate();
    var idade = dataAtual-nascimento;

    if(idade < 13){
        msg.innerHTML = `Sua idade é: ${idade}`;
    }

}

botao.onclick = calcularIdade;