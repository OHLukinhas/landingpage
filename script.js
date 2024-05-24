// //função de edtitar uma tarefa
// function editTask(button) {
//     var row = button.parentNode.parentNode; 
//     var title = row.cells[0].innerText; 
//     var description = row.cells[1].innerText; 

//     var newTitle = prompt("Editar título:", title);
//     var newDescription = prompt("Editar descrição:", description);

//     if (newTitle !== null && newDescription !== null) {
//         row.cells[0].innerText = newTitle;
//         row.cells[1].innerText = newDescription;
//     }
// }

// //função de remover a tarefa
// function removeTask(button){
//     var row = button.parentNode.parentNode
//     row.parentNode.removeChild(row);
// }

//     document.getElementById("newTaskForm").addEventListener("submit", function(event) {
//     event.preventDefault();
    
//     var title = document.getElementById("taskTitle").value;
//     var description = document.getElementById("taskDescription").value;
    
//     addTask(title, description);
    
//     document.getElementById("newTaskForm").reset();
//     });

// script.js

// function newTask(button) {
//     var titulo = document.getElementById("taskTitle").value;
//     var descricao = document.getElementById("taskDescription").value;
    
//     var tabela = document.getElementById("tabelas");

//     var novaLinha = tabela.insertRow();

//     var colunaTitulo = novaLinha.insertCell(0);
//     colunaTitulo.innerHTML = titulo;

//     var colunaDescricao = novaLinha.insertCell(1);
//     colunaDescricao.innerHTML = descricao;

//     var colunaData = novaLinha.insertCell(2);
//     var data = new Date();
//     var dataFormatada = data.getDate() + '/' + (data.getMonth() + 1) + '/' + data.getFullYear();
//     colunaData.innerHTML = dataFormatada;

//     var colunaStatus = novaLinha.insertCell(3);
//     colunaStatus.innerHTML = `
//         <select>
//             <option selected>Selecione uma das opções</option>
//             <option value="1">Concluída</option>
//             <option value="2">Em andamento</option>
//             <option value="3">Pendente</option>
//         </select>
//     `;

    //  var colunaAcoes = novaLinha.insertCell(4);
    // colunaAcoes.innerHTML = `
    //     <button class="btn btn-warning" onclick="editTask(this)" title="Clique aqui para editar a tarefa">
    //         <img src="imagens/botao-editar.png">
    //      </button>
    //     <button class="btn" onclick="removeTask(this)" title="Clique aqui para excluir a tarefa">
    //         <img src="imagens/excluir.png">
    //      </button>
    //     <button class="btn" title="Clique aqui para finalizar a tarefa">
    //          <img src="imagens/tarefa-concluida.png"></img>
    //     </button>
    //  `;

//     document.getElementById("taskTitle").value = "";
//     document.getElementById("taskDescription").value = "";
// }

function removeTask(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

function editTask(button) {
    var row = button.parentNode.parentNode;
    var titulo = row.cells[0].innerHTML;
    var descricao = row.cells[1].innerHTML;

    document.getElementById("taskTitle").value = titulo;
    document.getElementById("taskDescription").value = descricao;

    row.parentNode.removeChild(row);
}

function addTask() {
    // Obter os valores do título e da descrição da tarefa do formulário
    var titulo = document.getElementById("taskTitle").value;
    var descricao = document.getElementById("taskDescription").value;
    
    // Validar se os campos foram preenchidos
    if (titulo === "" || descricao === "") {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    // Criar um novo elemento de linha para a tabela
    var novaLinha = document.createElement("tr");

    // Preencher a nova linha com as células para o título, descrição e data
    novaLinha.innerHTML = "<td>" + titulo + "</td>" +
                          "<td>" + descricao + "</td>" +
                          "<td>" + new Date().toLocaleDateString() + "</td>" +
                          "<td>" +
                          "<select>" 
                          "<option>Selecione uma das opções</option>" 
                          "<option value='1'>Concluída</option>" 
                          "<option value='2'>Em andamento</option>" 
                          "<option value='3'>Pendente</option>" 
                      "</select>" +
                  "</td>" +
                  "<td>" +
                      "<button class='btn btn-warning' onclick='editTask(this)' title='Clique aqui para editar a tarefa'>" 
                          "<img src='imagens/botao-editar.png'> </img>" 
                      "</button>" 
                      "<button class='btn' onclick='removeTask(this)' title='Clique aqui para excluir a tarefa'>" 
                          "<img src='imagens/excluir.png'></img>" 
                      "</button>" 
                      "<button class='btn' title='Clique aqui para finalizar a tarefa'>" 
                          "<img src='imagens/tarefa-concluida.png'></img>" 
                      "</button>" +
                  "</td>";

    // Adicionar a nova linha à tabela de tarefas
    document.getElementById("tabelas").appendChild(novaLinha);

    // Limpar os campos do formulário após adicionar a tarefa
    document.getElementById("taskTitle").value = "";
    document.getElementById("taskDescription").value = "";

    // Alerta de sucesso
    alert("Tarefa adicionada com sucesso!");}