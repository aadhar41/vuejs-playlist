<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vuejs Playlist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script type = "text/javascript" src="vue.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css">
</head>
<body>
    <div id="vue-app">
        <h1>Data Binding</h1>
        <a v-bind:href="website">Google</a>
        <input type="text" v-bind:value="name">
        <p>Name : {{ name }}</p>
        <p v-html="websiteTag"></p>
    
    </div>


    <script src="app.js"></script>
</body>
</html>