<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                       <p @click="login()">login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
      methods:{
       async login(){
        await axios.get('/sanctum/csrf-cookie');
        await axios.post('/login',{
             email: 'test@mail.com',
             password: '1234'
          });
        let response = await axios.get('/api/user');
        console.log(response)    

        }
      }
    }
</script>
