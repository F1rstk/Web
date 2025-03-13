document.addEventListener("DOMContentLoaded", function () {
    console.log("Site carregado com sucesso!");
    
    // Exemplo de funcionalidade: mensagem ao clicar em um link
    document.querySelectorAll("nav ul li a").forEach(link => {
        link.addEventListener("click", function () {
            alert("Você clicou em " + this.textContent);
        });
    });
});



function clickmenu() {
    if (itens.style.display == "block") {
        itens.style.display = "none"
    } else {
        itens.style.display = "block"
    }
}

function mudouTamanho(){
    if (window.innerWidth >= 768){
        itens.style.display = 'block'
    } else {
        itens.style.display = 'none'
    }
}
