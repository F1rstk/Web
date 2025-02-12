document.getElementById('alertButton').addEventListener('click', function() {
    alert('Obrigado por visitar nossa loja! Aproveite nossas promoções!');
  });
  
  setTimeout(function() {
    alert('Promoção: Frete grátis em compras acima de R$100!');
  }, 5000);
  
  function showLocation() {
    alert("Você está visitando a Loja de Sabonetes!");
  }
  
  document.getElementById('formCadastro').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
  
    if (nome && email) {
      alert(`Cadastro realizado com sucesso! Bem-vindo, ${nome}.`);
    } else {
      alert('Por favor, preencha todos os campos!');
    }
  });
  