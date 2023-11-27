<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP ToDo List JSON</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1>{{ title }}</h1>
            <div class="new-todo">
                <input type="text" v-model="newTodo" @keyup.enter="saveTodo" placeholder="Inserisci task">
            </div>
            <section>
                <div class="container">
                    <ul class="todos">
                        <li style="display: flex; justify-content: space-between; align-items: center;"
                        v-for="(todo, i) in todos" :key="i">
                            <span>{{ todo.task }}</span>
                            <span class="delete">Elimina</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <script src="./js/app.js"></script>
</body>

</html>