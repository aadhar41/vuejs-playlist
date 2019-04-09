new Vue({
    el: "#vue-app",
    data : {
        name: 'Aadhar',
        job: 'Ninja'
    },
    methods: {
        greet: function (time) {  
            
            return 'Good ' + time + ' ' + this.name
        }
    }
});