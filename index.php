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
            <input type="text" v-model="newTodo" placeholder="Inserisci task">
            </div>
            <section>
                <ul>
                    <li v-for="(todo, i) in todos" :key="i">{{ todo.task }}</li>
                </ul>
            </section>
        </div>
    </div>

    <script src="./js/app.js"></script>
</body>

</html>