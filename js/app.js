const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'PHP ToDo List JSON',
        todos: [],
        newTodo: '',
      }
    },
    methods: {

        // Creo una funzione che mi permetta, tramite una chiamata AXIOS di tipo GET, di recuperarmi i dati e successivamente assegnarli all'array todos
        fetchData() {
            axios.get('server.php').then((res) => {
                console.log(res.data.results)
                this.todos = res.data.results
            })
        },

        // Creo una funzione che mi permetta di memorizzare un nuovo todo, tramite una chiamata AXIOS stavolta di tipo POST
        saveTodo() {
            console.log(this.newTodo)

            const data = {
                todo: this.newTodo,
            }

            axios.post('save.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                },
            })
        },
    },
    created() {
        this.fetchData()
    }
  }).mount('#app')