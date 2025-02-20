let altura=0;
let largura=0;
let vidas = 1;
let tempo = 15;

let nivel = window.location.search
    nivel = nivel.replace('?', '')
    
    if (nivel == 'facil'){
            temporizador = 1500
        } else if (nivel == 'normal'){
            temporizador = 1000
        } else {
            temporizador = 800
        }



function ajustarPalco(){
altura = window.innerHeight;
largura = window.innerWidth;
console.log(largura,altura);
}

ajustarPalco();

var VJCronometro = setInterval(function () { 
    
    tempo -= 1 
    if(tempo < 0)
    {
        clearInterval(VJCronometro);
        clearInterval(criarratos);
      window.location.href = "vitoria.html";
    }
    else{
         document.getElementById('meuCronemetro').innerHTML = tempo;
        }
},1000);

function posRandomica(){

if(document.getElementById('temporatos')){
document.getElementById('temporatos') .remove();

if(vidas>3){
    window.location.href = "finaljogo.html";
}
else{document.getElementById("v" + vidas).src="Soucers/coracao vazio.png"
    vidas++}

}


var posx = Math.floor(Math.random()*largura)-120;
var posy = Math.floor(Math.random()*altura)-120;

console.log(posx,posy);

posx = posx < 0 ? 0: posx;
posy = posy < 0 ? 0: posy;

var ratos = document.createElement('img');
ratos.src= "Soucers/rato.png";
document.body.appendChild(ratos);

ratos.style.left = `${posx}px`;
ratos.style.top = `${posy}px`;
ratos.className = tamanhoRatos() + ' ' + ladoAleatorio();
ratos.style.position = 'absolute';
ratos.id = 'temporatos';

ratos.onclick=function(){
    this.remove();
}

}

function tamanhoRatos(){
    var classe =  Math.floor(Math.random() * 3);

    switch(classe){
        case 0:
            return 'ratos01';
        case 1:
            return 'ratos02';
        
        case 2:
            return 'ratos03';    

    }
}

function ladoAleatorio(){
    var classe = Math.floor(Math.random()*2);
   
    switch(classe){
        case 0:
            return 'ladoA';
        case 1:
            return 'ladoB';
        
    }
}

function reiniciar(){
    window.location.href = 'telainicio.html'
}

function iniciar(){
    let nivel = document.getElementById('combo').value
    if(nivel == 0){
        alert('Obrigatório a seleção de um nível!')
    } else{
       // window.alert(nivel)
        window.location.href = 'index.html' + '?' + nivel
    }
}