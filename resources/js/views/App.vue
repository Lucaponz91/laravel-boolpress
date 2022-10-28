<template>
  <div>
    <h1>{{title}}</h1>
    <div>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
      <ul>
        <li v-for="post in posts" :key="post.id">
          {{post.title}}

        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return{
            title: 'Ancora vue e js',
            posts: []
        } 

    },
    methods: {
      fetchPosts() {
        axios.get('/api/posts').then((res)=>{
          console.log(res.data)
        })
      }
    }

}
</script>

<style lang="scss" scoped >

</style>