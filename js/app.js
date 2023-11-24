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
        }
    },
    created() {
        this.fetchData()
    }
  }).mount('#app')