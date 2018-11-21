<template>
              <form action="" v-on:submit.prevent="newFactor()">
                <div class="form-group">
                  <label for="descripcionFactor">Agregar nuevo factor</label>
                  <input type="text" class="form-control" v-model="descripcion">
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </form>           
</template>

<script>
    export default {
        props:['ide','idf','fdt'],

        data(){
            return{
                descripcion: '',
            }
        },
        mounted() {
            console.log('Component mounted.1111')
        },
        methods:{
            newFactor(){
                const params = {
                    descripcion: this.descripcion,
                    tipo_Factor: this.fdt,
                };
                this.descripcion = '';
                axios.post(`/empresas/${this.ide}/fodas/${this.idf}/apiFactores`, params).then((response)=>{
                    const factor =response.data;
                    this.ff=response.data;
                    this.$emit('new', factor);
                });
            }
        }
    }
</script>
