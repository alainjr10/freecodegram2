<template>
    <div>
        <button class="btn btn-primary ml-4" @click="followUser">Follow</button>
    </div>
</template>

<script>
    export default {

        props: ['userId'],   

        mounted() {
            console.log('Component mounted.')
        },

        methods: {
            followUser(){
                axios.post('/follow/' + this.userId) //axios makes us make api calls. here, we are calling to the follow route
                    .then(response =>{  //if succesfull, then ....
                        console.log(response.data);
                    });
            }
        }
    }
</script>
