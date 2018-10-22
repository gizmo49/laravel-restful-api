<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blog demo</title>

        <!-- Fonts -->
       
                 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


        <!-- Styles -->
        
    </head>
    <body>
       <div class="container" id="app">
        
          <h1 v-text="message"></h1>

          @foreach ($projects as $key)
            <h1>{{$key->name}}</h1>
          @endforeach
           <form id="made" action="{{url('projects')}}" method="POST" @submit.prevent="onSubmit" @keydown="errors.clear($event.target.name)">
               <label>Project Name:</label><br>
               <input type="text" name="name" placeholder="." v-model="name"><br>
               <span class="error" v-text="errors.get('name')"></span><br>
               <label>Projet description:</label> <br>
               <input type="text" name="description" v-model="description"><br><br> 
               <span class="error" v-text="errors.get('description')"></span>  <br>
               <button class="btn btn-primary" :disabled="errors.any()">Submit</button>
           </form>
       </div>


        <style type="text/css">
        .container{
        padding-top: 20px;
        }
        #made input{
        width: 1000px;
        }
        .error{
          color: red;
          font-size: 10px;
        }
        </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <script type="text/javascript" src="js/start.js"></script>

    </body>
</html>
