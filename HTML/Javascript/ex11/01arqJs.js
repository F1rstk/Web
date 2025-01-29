function calcular(){
    var vel=window.document.getElementById('vel')
    var resp = window.document.getElementById('resp')
    
    var c1 = Number(vel.value)
    
    if (c1 == 40){
        resp.innerText=`A velocidade do seu  carro é de  ${c1} , portanto seu carro está na velocidade permitida.`
    }
    if(c1 >40){
        resp.innerText=`A velocidade do seu  carro é de  ${c1} , portanto seu carro está acima da velocidade permitida.`
    }
    if(c1 >=100){
        resp.innerText=`A velocidade do seu  carro é de  ${c1} , portanto seu carro está acima da velocidade permitida e seu carro está apreendido.`
    }
}