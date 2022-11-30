<?php
//Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo. Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>ToDoList PHP</title>
</head>

<body>


    <div id="app">
        <div class="container">
            <div class="add_task">
                <h3 class="my-4 text-primary">ToDo</h3>
                <input type="text">
                <button class="mx-2">Aggiungi</button>
            </div>
            <div class="task_list py-3">
                <ul>
                    <li v-for="(task, i) in tasks">{{task}}</li>
                </ul>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="app.js"></script>
</body>

</html>