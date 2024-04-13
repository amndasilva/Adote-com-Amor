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
                return expReg.test(cadastro.cpf);
            });
        }
        datA = datA
            .sort((a, b) => {
                return a.cpf < b.cpf ? -1 : 1;
            })
            .map(cadastro => {
                return `<tr>
                        <td>${cadastro.id}</td>
                        <td>${cadastro.cpf}</td>
                        <td>${cadastro.tipo}</td>
                        <td>${cadastro.faixaIdade}</td>
                        <td>${cadastro.porte}</td>
                        <td>${cadastro.cor}</td>
                        <td>${cadastro.status}</td>
                        <td>
                            <button onclick='visualizar("cadastro", false, ${cadastro.id})'>Editar</button>
                           
                        </td>
                    </tr>`;
            });
        tbody.innerHTML = datA.join('');
    }
}

function insertCadastro(cpf, tipo, faixaIdade, porte, cor, status) {
    const id = listaRegistros.ultimoIdGerado + 1;
    listaRegistros.ultimoIdGerado = id;
    listaRegistros.cadastro.push({
        id,
        cpf,
        tipo,
        faixaIdade,
        porte,
        cor,
        status
    });
    desenhar();
    visualizar('lista');
}

function editCadastro(id, cpf, tipo, faixaIdade, porte, cor, status) {
    var cadastro = listaRegistros.cadastro.find(cadastro => cadastro.id == id);
    cadastro.cpf = cpf;
    cadastro.tipo = tipo;
    cadastro.faixaIdade = faixaIdade;
    cadastro.porte = porte;
    cadastro.cor = cor;
    cadastro.status = status;
    desenhar();
    visualizar('lista');
}


function limparEdicao() {
    document.getElementById('tipo').value = '';
    document.getElementById('faixaIdade').value = '';
    document.getElementById('porte').value = '';
    document.getElementById('cor').value = '';
    document.getElementById('status').value = '';
}

function visualizar(pagina, novo = false, id = null) {
    document.body.setAttribute('page', pagina);
    if (pagina === 'cadastro') {
        if (novo) limparEdicao();
        if (id) {
            const cadastro = listaRegistros.cadastros.find(cadastro => cadastro.id == id);
            if (cadastro) {
                document.getElementById('id').value = cadastro.id;
                document.getElementById('tipo').value = cadastro.tipo;
                document.getElementById('faixaIdade').value = cadastro.faixaIdade;
                document.getElementById('porte').value = cadastro.porte;
                document.getElementById('cor').value = cadastro.cor;
                document.getElementById('status').value = cadastro.status;

            }
        }
        document.getElementById('cpf').focus();
    }
}

function submeter(e) {
    e.preventDefault();
    console.log("Cadastro Realizado!");
    e.preventDefault();
    const datA = {
        id: document.getElementById('id').value,
        cpf: document.getElementById('cpf').value,
        tipo: document.getElementById('tipo').value,
        faixaIdade: document.getElementById('faixaIdade').value,
        porte: document.getElementById('porte').value,
        cor: document.getElementById('cor').value,
        status: document.getElementById('status').value
    };
    if (datA.id) {
        editCadastro(datA.id, datA.cpf, datA.tipo, datA.faixaIdade, datA.porte, datA.cor, datA.status);
    } else {
        insertCadastro(datA.cpf, datA.tipo, datA.faixaIdade, datA.porte, datA.cor, datA.status);
    }

    // Limpar os campos após salvar
    limparEdicao();
}