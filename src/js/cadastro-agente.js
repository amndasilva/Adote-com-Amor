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
                        <td>${cadastro.cpf}</td>
                        <td>${cadastro.data}</td>
                        <td>${cadastro.renda}</td>
                        <td>${cadastro.endereco}</td>
                        <td>${cadastro.email}</td>
                        <td>${cadastro.senha}</td>
                        <td>
                            <button onclick='visualizar("cadastro", false, ${editCadastro})'>Editar</button>
                           
                        </td>
                    </tr>`;
            });
        tbody.innerHTML = datA.join('');
    }
}

function insertCadastro(nome, cpf, data, renda, endereco, email, senha) {
    const id = listaRegistros.ultimoIdGerado + 1;
    listaRegistros.ultimoIdGerado = id;
    listaRegistros.cadastro.push({
        id,
        nome,
        cpf,
        data,
        renda,
        endereco,
        email,
        senha
    });
    desenhar();
    visualizar('lista');
}

function editCadastro(id, nome, cpf, data, renda, endereco, email, senha) {
    var cadastro = listaRegistros.cadastro.find(cadastro => cadastro.id == id);
    cadastro.nome = nome;
    cadastro.data = data;
    cadastro.renda = renda;
    cadastro.endereco = endereco;
    cadastro.senha = senha;
    desenhar();
    visualizar('lista');
}


function limparEdicao() {
    document.getElementById('nome').value = '';
    document.getElementById('data').value = '';
    document.getElementById('renda').value = '';
    document.getElementById('endereco').value = '';
    document.getElementById('senha').value = '';
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
                document.getElementById('data').value = cadastro.data;
                document.getElementById('renda').value = cadastro.renda;
                document.getElementById('endereco').value = cadastro.endereco;

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
        cpf: document.getElementById('cpf').value,
        data: document.getElementById('data').value,
        renda: document.getElementById('renda').value,
        endereco: document.getElementById('endereco').value,
        email: document.getElementById('email').value,
        senha: document.getElementById('senha').value
    };
    if (datA.id) {
        editCadastro(datA.id, datA.nome, datA.cpf, datA.data, datA.renda, datA.endereco, datA.email, datA.senha);
    } else {
        insertCadastro(datA.nome, datA.cpf, datA.data, datA.renda, datA.endereco, datA.email, datA.senha);
    }

    // Limpar os campos após salvar
    limparEdicao();
}