let altura=0;
let largura=0;

function ajustarPalco(){
altura = window.innerHeight;
largura = window.innerWidth;
console.log(largura,altura);
}

ajustarPalco();



function posRandomica(){

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
//ratos.style.className =


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