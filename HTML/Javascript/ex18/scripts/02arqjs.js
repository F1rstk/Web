// Função de validação e envio de cadastro
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
  