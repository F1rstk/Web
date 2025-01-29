function calcular(){
    var Idade=window.document.getElementById('Idade')
    var resp = window.document.getElementById('resp')
    
    var c1 = Number(Idade.value)
    
    if (c1 <16 ){
        resp.innerText=`A sua idade é de  ${c1} , portanto você não está permetida a votar`
    }
    if(c1 >15 && c1 <18){
        resp.innerText=`A sua idade é de  ${c1} , portanto você  está permetida a votar`
    }
    if(c1 >=18){
        resp.innerText=`A sua idade é de  ${c1} , portanto você  está obrigado a votar`
    }
    if(c1>=65){
        resp.innerText=`A sua idade é de  ${c1} , portanto você está em voto facultativo `
    }


}