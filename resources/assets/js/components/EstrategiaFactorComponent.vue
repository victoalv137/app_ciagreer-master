<template>
    <div class="card">
        <div class="card-header">Fortalezas</div>
        <div class="card-body">
            <!-- <h5 class="card-title">Fortalezas</h5> -->
            <div v-for="(factor) in factores" :key="factor.id" class="form-group" >
                <div class="custom-control custom-checkbox">
                    <input v-on:click="onClickCheck()" type="checkbox" class="custom-control-input" v-bind:value="factor.factor_Cod" v-model="form.factoresSelected" v-bind:id="codEstrategia+'customCheck'+fctest+factor.id">
                    <label class="custom-control-label" v-bind:for="codEstrategia+'customCheck'+fctest+factor.id">{{factor.factor_Cod +" : "+factor.descripcion}}</label>
                </div>  
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {

        props: ['idf','ide','fdt','fctest','factoresSelected','codEstrategia'],
        
        data(){
            return{
                factores:[],
                // factoresSelected:[],
                form:{
                    factoresSelected:[]
                }
            };
        },
        mounted() {
           axios.get(`/empresas/${this.ide}/fodas/${this.idf}/apiFactores/${this.fdt}`).then((response) => {
                this.factores = response.data;
                this.form.factoresSelected=this.factoresSelected;
            });
            
        },

        methods: {
            onClickCheck(){
                this.$nextTick(function() {
                this.$emit('check', this.form.factoresSelected);
                });  
            }
        }
    }
</script>
