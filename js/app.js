const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'PHP ToDo List JSON',
        todos: ['Fare la spesa','Pulire casa',"Chiamare l'idraulico"]
      }
    }
  }).mount('#app')