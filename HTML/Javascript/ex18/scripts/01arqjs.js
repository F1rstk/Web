document.addEventListener("DOMContentLoaded", () => {
    carregarMaisVendidos();
});

function toggleMenu() {
    document.querySelector(".menu").classList.toggle("active");
}

function carregarMaisVendidos() {
    const produtos = [
        { nome: "Sabonete de Lavanda", preco: "R$ 10,00" },
        { nome: "Sabonete de Mel", preco: "R$ 12,00" },
        { nome: "Sabonete de Ervas", preco: "R$ 9,00" },
        {nome:"Sabonte de Carvão", preco: "R$ 17,00"}
    ];

    const container = document.getElementById("mais-vendidos");
    produtos.forEach(produto => {
        const div = document.createElement("div");
        div.classList.add("produto");
        div.innerHTML = `
            <h3>${produto.nome}</h3>
            <p>${produto.preco}</p>
            <button onclick="comprar('${produto.nome}')">Comprar</button>
        `;
        container.appendChild(div);
    });
}

function comprar(produto) {
    alert(`Você comprou: ${produto}`);
}
