const KEY_BD = '@CadastroUsuarios';

var listaRegistros = {
    ultimoIdGerado: 0,
    cadastro: []
};

var FILTRO = '';


function lerBD() {
    fetch('http://localhost:8080') // Atualize o URL conforme necessário
        .then(response => response.json())
        .then(data => {
            listaRegistros.cadastro = data;
            desenhar();
        })
        .catch(error => console.error('Erro ao obter dados do servidor:', error));
}



function desenhar() {
    const tbody = document.getElementById('listaRegistrosBody');
    if (tbody) {
        var datA = listaRegistros.cadastro;
        if (FILTRO.trim()) {
            const expReg = eval(`/${FILTRO.trim().replace(/[^\d\w]+/g, '.*')}/i`);
            datA = datA.filter(cadastro => {
                return expReg.test(cadastro.nome);
            });
        }
        datA = datA
            .sort((a, b) => {
                return a.nome < b.nome ? -1 : 1;
            })
            .map(cadastro => {
                return `<tr>
                        <td>${cadastro.id}</td>
                        <td>${cadastro.nome}</td>
                        <td>${cadastro.idade}</td>
                        <td>${cadastro.sexo}</td>
                        <td>${cadastro.raca}</td>
                        <td>${cadastro.cor_pelagem}</td>
                        <td>${cadastro.tamanho}</td>
                        <td>${cadastro.vacinas}</td>
                        td>${cadastro.imagem}</td>
                        <td>
                            <button onclick='visualizar("cadastro", false, ${editCadastro.id})'>Editar</button>
                           
                        </td>
                    </tr>`;
            });
        tbody.innerHTML = datA.join('');
    }
}

function insertCadastro(nome, idade, sexo, raca, cor_pelagem, tamanho, vacinas, imagem) {
    const id = listaRegistros.ultimoIdGerado + 1;
    listaRegistros.ultimoIdGerado = id;
    listaRegistros.cadastro.push({
        id,
        nome,
        idade,
        sexo,
        raca,
        cor_pelagem,
        tamanho,
        vacinas,
        imagem
    });
    desenhar();
    visualizar('lista');
}

function editCadastro(id, nome, cpf, data, renda, endereco, email, senha) {
    var cadastro = listaRegistros.cadastro.find(cadastro => cadastro.id == id);
    cadastro.nome = nome;
    cadastro.idade = idade;
    cadastro.sexo = sexo;
    cadastro.raca = raca;
    cadastro.cor_pelagem = cor_pelagem;
    cadastro.tamanhp = tamanho;
    cadastro.vacinas = vacinas;
    cadastro.imagem = imagemm;
    desenhar();
    visualizar('lista');
}


function limparEdicao() {
    document.getElementById('nome').value = '';
    document.getElementById('idade').value = '';
    document.getElementById('sexo').value = '';
    document.getElementById('raca').value = '';
    document.getElementById('cor_pelagem').value = '';
    document.getElementById('tamanho').value = '';
    document.getElementById('vacinas').value = '';
    document.getElementById('imagem').value = '';
}

function visualizar(pagina, novo = false, id = null) {
    document.body.setAttribute('page', pagina);
    if (pagina === 'cadastro') {
        if (novo) limparEdicao();
        if (id) {
            const cadastro = listaRegistros.cadastros.find(cadastro => cadastro.id == id);
            if (cadastro) {
                document.getElementById('id').value = cadastro.id;
                document.getElementById('nome').value = cadastro.nome;
                document.getElementById('idade').value = cadastro.idade;
                document.getElementById('sexo').value = cadastro.sexo;
                document.getElementById('raca').value = cadastro.raca;
                document.getElementById('cor_pelagem').value = cadastro.cor_pelagem;
                document.getElementById('tamanho').value = cadastro.tamanho;
                document.getElementById('vacinas').value = cadastro.vacinas;
                document.getElementById('imagem').value = cadastro.imagem;

            }
        }
        document.getElementById('nome').focus();
    }
}

function submeter(e) {
    e.preventDefault();
    console.log("Cadastro Realizado!");
    e.preventDefault();
    const datA = {
        id: document.getElementById('id').value,
        nome: document.getElementById('nome').value,
        idade: document.getElementById('idade').value,
        sexo: document.getElementById('sexo').value,
        raca: document.getElementById('raca').value,
        cor_pelagem: document.getElementById('cor_pelagem').value,
        tamanho: document.getElementById('tamanho').value,
        vacinas: document.getElementById('vacinas').value,
        imagem: document.getElementById('imagem').value,
    };
    if (datA.id) {
        editCadastro(datA.id, datA.nome, datA.idade, datA.sexo, datA.raca, datA.cor_pelagem, datA.tamanho, datA.vacinas, datA.imagem);
    } else {
        insertCadastro(datA.id, datA.nome, datA.idade, datA.sexo, datA.raca, datA.cor_pelagem, datA.tamanho, datA.vacinas, datA.imagem);
    }

    // Limpar os campos após salvar
    limparEdicao();
}