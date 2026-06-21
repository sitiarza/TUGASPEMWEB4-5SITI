const todoInput = document.getElementById('todo-input');
const addBtn = document.getElementById('add-btn');
const todoList = document.getElementById('todo-list');

let todos = JSON.parse(localStorage.getItem('todos')) || [];

function renderTodos() {
    todoList.innerHTML = '';

    todos.forEach((todo) => {
        const li = document.createElement('li');
        li.className = 'todo-item';

        li.innerHTML = `
            <span class="todo-text" onclick="toggleTodo(${todo.id})" style="flex:1; cursor:pointer; text-decoration: ${todo.completed ? 'line-through' : 'none'}; color: ${todo.completed ? '#aaa' : '#333'}">
                ${todo.text}
            </span>
            <button onclick="deleteTodo(${todo.id})" class="todo-delete-btn" style="background: #ff6b9d; padding: 5px 10px; border: none; border-radius: 5px; color: white; cursor: pointer; font-size: 18px;">
                ×
            </button>
        `;

        todoList.appendChild(li);
    });

    saveToLocalStorage();
}

function saveToLocalStorage() {
    localStorage.setItem('todos', JSON.stringify(todos));
}

function addTodo() {
    const value = todoInput.value.trim();
    if (value === '') return;

    const newTodo = {
        id: Date.now(),
        text: value,
        completed: false
    };

    todos = [...todos, newTodo];
    renderTodos();
    todoInput.value = '';
    todoInput.focus();
}

// Check if elements exist before adding event listeners


window.toggleTodo = (id) => {
    todos = todos.map(todo => {
        if (todo.id === id) {
            return { ...todo, completed: !todo.completed };
        }
        return todo;
    });
    renderTodos();
};

window.deleteTodo = (id) => {
    todos = todos.filter(todo => todo.id !== id);
    renderTodos();
};

// Render todos when page loads
if (todoList) {
    renderTodos();
}