const App = {
    data(){
        return{
            message: "",
            comments:[]
        }
    },
    methods:{
        input: function(){
            let input = document.getElementById('input').value
            
            this.comments.push(input)
        },
        plus: function(){
            alert("plus di klik")
        },
        minus: function(){
            alert("minus di klik")
        }
    }
}
Vue.createApp(App).mount('.app')