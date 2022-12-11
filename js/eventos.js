const INPUT_BUSCA = document.getElementsById('input-busca');
const clientes = document.getElementsById('clientes');

INPUT_BUSCA.addEventListener('keyup', () => {
    let expressao = INPUT_BUSCA.value;

    console.log(expressao);
    
});
