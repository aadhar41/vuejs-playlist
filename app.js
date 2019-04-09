new Vue({
    el: "#vue-app",
    data : {
        name: 'Aadhar',
        job: 'Ninja',
        website: 'http://google.com',
        websiteTag: '<a href="http://google.com">Google.com</a>'
    },
    methods: {
        greet: function (time='morning') {  
            
            return 'Good ' + time + ' ' + this.name
        }
    }
});