document.addEventListener('DOMContentLoaded', (event) => {
    loadTasks();
});

function loadTasks() {
    const tasks = JSON.parse(localStorage.getItem('tasks')) || [];
    const tableBody = document.getElementById('taskTableBody');

    tasks.forEach(task => {
        const newRow = document.createElement('tr');

        newRow.innerHTML = `
            <td>${task.title}</td>
            <td>${task.description}</td>
            <td>${task.date}</td>
            <td>
                <select>
                    <option value="1" ${task.status === '1' ? 'selected' : ''}>Concluída</option>
                    <option value="2" ${task.status === '2' ? 'selected' : ''}>Em andamento</option>
                    <option value="3" ${task.status === '3' ? 'selected' : ''}>Pendente</option>
                </select>
            </td>
            <td>
                <button class="btn" title="Clique aqui para editar a tarefa" onclick="editTask(this)">
                    <img src="imagens/botao-editar.png">
                </button>
                <button class="btn" title="Clique aqui para excluir a tarefa" onclick="deleteTask(this)">
                    <img src="imagens/excluir.png">
                </button>
            </td>
        `;

        tableBody.appendChild(newRow);
    });
}

function newTask() {
    const titulo = document.getElementById('titulo').value;
    const descricao = document.getElementById('descricao').value;

    if (titulo === '' || descricao === '') {
        alert('Por favor, preencha todos os campos.');
        return;
    }

    const tasks = JSON.parse(localStorage.getItem('tasks')) || [];

    // Verificação de título existente
    const taskExists = tasks.some(task => task.title === titulo);
    if (taskExists) {
        alert('Uma tarefa com este título já existe.');
        return;
    }

    const date = new Date();
    const formattedDate = date.toLocaleDateString('pt-BR');

    const newTask = {
        title: titulo,
        description: descricao,
        date: formattedDate,
        status: '3' // Pendente
    };

    tasks.push(newTask);
    localStorage.setItem('tasks', JSON.stringify(tasks));

    const tableBody = document.getElementById('taskTableBody');
    const newRow = document.createElement('tr');

    newRow.innerHTML = `
        <td>${titulo}</td>
        <td>${descricao}</td>
        <td>${formattedDate}</td>
        <td>
            <select>
                <option value="1">Concluída</option>
                <option value="2">Em andamento</option>
                <option value="3" selected>Pendente</option>
            </select>
        </td>
        <td>
            <button class="btn" title="Clique aqui para editar a tarefa" onclick="editTask(this)">
                <img src="imagens/botao-editar.png">
            </button>
            <button class="btn" title="Clique aqui para excluir a tarefa" onclick="deleteTask(this)">
                <img src="imagens/excluir.png">
            </button>
        </td>
    `;

    tableBody.appendChild(newRow);

    document.getElementById('titulo').value = '';
    document.getElementById('descricao').value = '';
}

function deleteTask(button) {
    const row = button.parentNode.parentNode;
    const title = row.cells[0].innerText;

    try {
        let tasks = JSON.parse(localStorage.getItem('tasks')) || [];
        
        tasks = tasks.filter(task => task.title.toLowerCase() !== title.toLowerCase());

        localStorage.setItem('tasks', JSON.stringify(tasks));

        row.parentNode.removeChild(row);
    } catch (error) {
        console.error('Error removing task:', error);
    }
}


function editTask(button) {
    const row = button.parentNode.parentNode;
    const cells = row.getElementsByTagName('td');

    const titulo = cells[0].innerText;
    const descricao = cells[1].innerText;

    document.getElementById('titulo').value = titulo;
    document.getElementById('descricao').value = descricao;

    deleteTask(button);
}
