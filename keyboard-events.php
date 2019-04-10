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
        
        <h1>Keyboard Events</h1>
        <label for="">Name:</label>
        <input type="text" name="" id="" v-on:keyup.enter="logName" />
        <label for="">Age:</label>
        <input type="text" name="" id="" v-on:keyup.alt.enter="logAge" />

    </div>


    <script src="keyboard-events.js"></script>
</body>
</html>