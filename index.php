<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>



    <div id="app">
    <div class="container">

            <div class="row">
                <div class="col-12">

                            <div v-for="element in dischi" class="card">
                                
                                <div class="card-body">
                                    <h5 class="card-title">  {{ element }}  </h5>
                                    <p class="card-text"> </p>
                                </div>
                            </div>



                
                    <ul class="list-group">
                        <!-- <li class="list-group-item" v-for="(element, index) in dischi">
                            {{ element }}
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>



    </div>
        
    
   
</body>
</html>


<script>
  const { createApp } = Vue

  createApp({
    data() {
      return {

        apiUrl : './server.php',
        dischi : [],
      }
    },

    methods: {
        getDischiList(){
            axios.get(this.apiUrl).then((response) =>{ 
                this.dischi = (response.data);

                console.log(response.data)
            })
        }
    },

    created (){
        this.getDischiList();
    }
  }).mount('#app')
</script>