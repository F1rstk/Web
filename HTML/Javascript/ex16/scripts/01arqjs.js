document.getElementById('mostrar').addEventListener('click', function() {
    const pokemon = document.getElementById('pokemon').value;
    const nivel = parseInt(document.getElementById('nivel').value);
    const genero = document.getElementById('genero').value;
    let res =document.getElementById('res')
 
    let nomePokemon = '';
    let imagemPokemon = '';
 
    if (pokemon === 'nidoran') {
      if (nivel >= 1 && nivel <16) {
        nomePokemon = genero === 'masculino' ? 'Nidoran♂' : 'Nidoran♀';
        imagemPokemon = genero === 'masculino'
          ? 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/32.png'
          : 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/29.png';
          res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      } else if (nivel >=16 && nivel <= 35) {
        nomePokemon = genero === 'masculino' ? 'Nidorino' : 'Nidorina';
        imagemPokemon = genero === 'masculino'
          ? 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/33.png'
          : 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/30.png';
          res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      } else {
        nomePokemon = genero === 'masculino' ? 'Nidoking' : 'Nidoqueen';
        imagemPokemon = genero === 'masculino'
          ? 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/34.png'
          : 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/31.png';
          res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      }
    } else if (pokemon === 'pikachu') {
      if (nivel >= 1 && nivel <16) {
        nomePokemon = 'Pichu';
        imagemPokemon = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/172.png';
        res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      } else if (nivel >=16 && nivel <= 35) {
        nomePokemon = 'Pikachu';
        imagemPokemon = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/25.png';
        res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      } else {
        nomePokemon = 'Raichu';
        imagemPokemon = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/26.png';
        res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      }
    } else if (pokemon === 'pidove') {
      if (nivel >= 1 && nivel <16) {
        nomePokemon = 'Pidove';
        imagemPokemon = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/519.png';
        res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      } else if (nivel >=16 && nivel <= 35) {
        nomePokemon = 'Tranquill';
        imagemPokemon = 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/520.png';
        res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
        
      } else {
        nomePokemon = 'Unfezant';
        imagemPokemon = genero === 'masculino'
          ? 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/521.png'
          : 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon//521.png';
          res.innerText=(` Seu Pokémon é o ${nomePokemon} e seu Level é de ${nivel}, e é do genero ${genero}`)
      }
    }
 
    document.getElementById('nome-pokemon').textContent = nomePokemon;
    document.getElementById('imagem-pokemon').src = imagemPokemon;
    document.getElementById('imagem-pokemon').alt = nomePokemon;
  });