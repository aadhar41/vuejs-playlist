new Vue({
    el: "#vue-app",
    data : {
        age: 27,
        x:0,
        y:0,
    },
    methods: {
       add : function (inc) {
           this.age += inc;
       },
       substract : function (dec) {  
           this.age -= dec;
       },
       updateXY : function (event) { 
            // console.log(event);
            this.x = event.offsetX;
            this.y = event.offsetY;
       }
    }
});