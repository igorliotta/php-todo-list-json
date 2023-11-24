const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'PHP ToDo List JSON',
        todos: [],
      }
    },
    methods: {
        // Creo una funzione che mi permetta, tramite una chiamata AXIOS di tipo GET, di recuperarmi i dati e successivamente assegnarli all'array todos
        fetchData() {
            axios.get('server.php').then((res) => {
                console.log(res.data)
                this.todos = res.data
            })
        }
    },
    created() {
        this.fetchData()
    }
  }).mount('#app')