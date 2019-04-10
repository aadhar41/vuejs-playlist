<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vuejs Playlist - events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script type = "text/javascript" src="vue.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>
    <div id="vue-app">
        <h1>Events</h1>
        
        <button @click.once="add(1)">Add a Year</button>
        <button v-on:click="substract(1)">Substract a year</button>

        <button @dblclick="add(10)">Add 10 Year</button>
        <button v-on:dblclick="substract(10)">Substract 10 year</button>
        <p>My age is {{ age }}</p>

        <div id="canvas" v-on:mousemove="updateXY">
            {{x}},{{y}}
        </div>

        <a v-on:click.prevent="click" href="http://google.com">Google.com</a>
    </div>


    <script src="event-modifiers.js"></script>
</body>
</html>