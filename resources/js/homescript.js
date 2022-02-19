var vue_det = new Vue({
    el: '#intro',
    data: {
       timestamp: "" ,
       greeting: ""
    },
    created() {
        setInterval(this.getNow, 1000);
    },
    methods: {
        getNow: function() {
            const today = new Date();
            const time = today.getHours() + ":" ;
            const dateTime = time;
            this.timestamp = dateTime;
 //24hrs
  //อรุณ6-11 ทิวา12-17 สายัณห์18-21 ราตรี22-5
  //const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            const con = ["night","night","night","night","night","night",
            "morning","morning","morning","morning","morning","morning",
            "afternoon","afternoon","afternoon","afternoon","afternoon","afternoon",
            "evening","evening","evening","evening","night","night",]

            const i = time.indexOf(":")
            if (parseInt(time.slice(0, i)) > 6 && parseInt(time.slice(0, i)) < 22 ){
            this.greeting = "Good " + con[parseInt(time.slice(0, i))] + "," ;
            }
            else{
            this.greeting = "In a good " + con[parseInt(time.slice(0, i))] ;}
        },
    }
 });

 var vue_det = new Vue({
    el: '#intro1',
    data: {
       timestamp: "" ,
       greeting: ""
    },
    created() {
        setInterval(this.getNow, 1000);
    },
    methods: {
        getNow: function() {
            const today = new Date();
            const time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            const dateTime = time;
            this.timestamp = dateTime;

            const con = ["ราตรี","ราตรี","ราตรี","ราตรี","ราตรี","ราตรี",
            "อรุณ","อรุณ","อรุณ","อรุณ","อรุณ","อรุณ",
            "ทิวา","ทิวา","ทิวา","ทิวา","ทิวา","ทิวา",
            "สายัณห์","สายัณห์","สายัณห์","สายัณห์","ราตรี","ราตรี",]

            const i = time.indexOf(":")
            this.greeting = con[parseInt(time.slice(0, i))] + "สวัสดิ์" ;
        },
    }
 });

 new Vue({
    el: '#app',
    data: {
      showNav: false
    }
  });

new Vue({
    el: '#app2',
    data: {
        showMore: false,
        showMoreEdu: false
      },

    methods: {
        goto(refName) {

        const element = this.$refs[refName];
        const top = element.offsetTop;

        window.scrollTo({ top: top, behavior: 'smooth' });          
        }  
      }
  });



