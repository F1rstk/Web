function calcular(){
    var op=window.document.getElementById('número')
    var resp = window.document.getElementById('resp')
    
    var op = Number(op.value)

switch (op){
     case 1:
        {
            resp.innerText=`Você é Burro(a)`
            break
        }
        case 2:{
            resp.innerText=`Você é Lindo(a)`
            break
        }
        case 3:{
            resp.innerText=`Você é Feio(a)`
            break
        }
        case 4:{
            resp.innerText=`Você é Inteligente(a)`
            break
        }
        case 5:{
            resp.innerText=`Você é um Deus(a)`
            break
        }
        default:{
resp.innerText=`Você é digitou o número ${op} ,esse número está fora da tabela`
        }
  
   
}

}