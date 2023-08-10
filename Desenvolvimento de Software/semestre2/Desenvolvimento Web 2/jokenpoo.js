function blaze(usuario) 
    {
        const opcoes = ['pedra', 'papel', 'tesoura', 'lagarto', 'spock'];
        const maquina = opcoes[Math.floor(Math.random() * opcoes.length)];
    
        console.log(`Usuário escolheu: ${usuario}`);
        console.log(`Máquina escolheu: ${maquina}`);
    
        if (usuario === maquina) 
            {
                return 'Empatouuuu!';
            } else if (
        (usuario === 'pedra' && (maquina === 'tesoura' || maquina === 'lagarto')) ||
        (usuario === 'papel' && (maquina === 'pedra' || maquina === 'spock')) ||
        (usuario === 'tesoura' && (maquina === 'papel' || maquina === 'lagarto')) ||
        (usuario === 'lagarto' && (maquina === 'papel' || maquina === 'spock')) ||
        (usuario === 'spock' && (maquina === 'pedra' || maquina === 'tesoura'))
        ) {
            return 'Opaaa, você ganhou!';
        } else {
            return 'Opaaam, maquina ganhou!';
        }
     }
  
  const escolhaUsuario = 'pedra'; 
  const resultado = blaze(escolhaUsuario);
  console.log(resultado);