//função de edtitar uma tarefa
function editTask(button) {
    var row = button.parentNode.parentNode; 
    var title = row.cells[0].innerText; 
    var description = row.cells[1].innerText; 

    var newTitle = prompt("Editar título:", title);
    var newDescription = prompt("Editar descrição:", description);

    if (newTitle !== null && newDescription !== null) {
        row.cells[0].innerText = newTitle;
        row.cells[1].innerText = newDescription;
    }
}

    //função de remover a tarefa
    function removeTask(button){
        var row = button.parentNode.parentNode
        row.parentNode.removeChild(row);
    }

    document.getElementById("newTaskForm").addEventListener("submit", function(event) {
        event.preventDefault();
    
        var title = document.getElementById("taskTitle").value;
        var description = document.getElementById("taskDescription").value;
    
        addTask(title, description);
    
        document.getElementById("newTaskForm").reset();
    });
    
    //função de adicionar a tarefa
    // function addTask(title, description){
    //     var table = document.getElementById(taskTable);
    //     var newrow = table.insertRow(-1);
    //     var cell1 = newRow.insertCell(0);
    //     var cell2 = newRow.insertCell(1);
    //     var cell3 = newRow.insertCell(2);
    //     var cell4 = newRow.insertCell(3);

    //     cell1.innerText = title
    //     cell2.innerText = description
    //     cell3.innerText = "Pendente"
    //     cell4.innerText = '<button class="btn btn-warning" onclick="editTask(this)" title="Clique aqui para editar a tarefa"> </button> <button class="btn" onclick="removeTask(this)" title="Clique aqui para excluir a tarefa"> </button' ;

    // }

    // Função para adicionar uma nova tarefa
function newTask() {
    // Obter os valores dos campos de título e descrição
    let title = document.getElementById('taskTitle').value;
    let description = document.getElementById('taskDescription').value;
    
    // Verificar se o título e a descrição não estão vazios
    if (title.trim() === '' || description.trim() === '') {
        alert('Por favor, preencha todos os campos.');
        return;
    }
    
    // Criar uma nova linha para a tabela com os dados da nova tarefa
    let newRow = `<tr>
                    <td>${title}</td>
                    <td>${new Date().toLocaleDateString()}</td>
                    <td>
                        <select>
                            <option selected>Selecione uma das opções</option>
                            <option value="1">Concluída</option>
                            <option value="2">Em andamento</option>
                            <option value="3">Pendente</option>
                        </select>
                    </td>
                    <td>
                        <button class="btn btn-warning" onclick="editTask(this)" title="Clique aqui para editar a tarefa">
                            <img src="imagens/botao-editar.png">
                        </button>
                        <button class="btn" onclick="removeTask(this)" title="Clique aqui para excluir a tarefa">
                            <img src="imagens/excluir.png">
                        </button>
                        <button class="btn" title="Clique aqui para finalizar a tarefa">
                            <img src="imagens/tarefa-concluida.png">
                        </button>
                    </td>
                </tr>`;
    
    // Adicionar a nova linha à tabela
    document.getElementById('tabelas').innerHTML += newRow;
    
    // Limpar os campos de título e descrição após adicionar a nova tarefa
    document.getElementById('taskTitle').value = '';
    document.getElementById('taskDescription').value = '';
}
