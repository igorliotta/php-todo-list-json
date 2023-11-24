const { createApp } = Vue

  createApp({
    data() {
      return {
        title: 'PHP ToDo List JSON',
        todos: ['JavaScript', 'PHP', 'HTML']
      }
    }
  }).mount('#app')