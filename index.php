<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>



    <div id="app">
        
   

        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="Spotify logo" class="my-3 mx-5">
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-beetween flex-wrap ">

                            <div v-for="element in dischi" class="">
                        
                                <div class="dischi text-white my-3 mx-3 rounded">
                                    <div class="my-card text-center">
                                        <img :src="element.img" alt="element.title" class="my-3">
                                        <h6 class="card-title">  {{ element.title }}  </h6>
                                        <p class="card-text pt-3 fst-italic"> {{ element.artist }}</p>
                                        <p> {{ element.year }} </p>
                                    </div>
                                </div>
                            </div>




                        
                    </div>
                </div>
            </div>

        </main>



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