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
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
