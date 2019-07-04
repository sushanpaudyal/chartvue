<script>
    import {Line} from 'vue-chartjs';
    export default {
        extends : Line,
        data(){
          return {
              url : 'http://127.0.0.1:8000/products',
              years : [],
              labels : [],
              prices : [],
              data : ''
          }
        },
        methods: {
          getProducts(){
              axios.get(this.url).then((response) => {
                 // console.log(response.data)
                  this.data = response.data;
                  if(this.data){
                      this.data.forEach(element => {
                         this.years.push(element.year);
                          this.labels.push(element.name);
                          this.prices.push(element.price);

                      });
                  }
                  console.log(this.labels)
              });
          }
        },
        mounted() {
            this.getProducts();
        }
    }
</script>
