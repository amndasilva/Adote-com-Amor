function Limpar() {
    document.getElementById('cpf').value = '';
    document.getElementById('tipo').value = '';
    document.getElementById('faixaIdade').value = '';
    document.getElementById('porte').value = '';
    document.getElementById('cor').value = '';
    document.getElementById('status').value = '';
}

function Adicionar() {

    // Obtém os valores do formulário
    var cpf = document.getElementById('cpf').value;
    var tipo = document.getElementById('tipo').value;
    var faixaIdade = document.getElementById('faixaIdade').value;
    var porte = document.getElementById('porte').value;
    var cor = document.getElementById('cor').value;
    var status = document.getElementById('status').value;

    // Cria uma nova linha na tabela
    var table = document.getElementById('tabelaInteresseAdocao');
    var newRow = table.insertRow(-1); // Insere a linha no final da tabela

    // Insere as células na nova linha
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    var cell6 = newRow.insertCell(5);

    // Adiciona os valores do formulário nas células
    cell1.innerHTML = cpf;
    cell2.innerHTML = tipo;
    cell3.innerHTML = faixaIdade;
    cell4.innerHTML = porte;
    cell5.innerHTML = cor;
    cell6.innerHTML = status;

    // Limpa os campos do formulário após adicionar à tabela
    document.getElementById('cadastroInteresseAdocao').reset();
}