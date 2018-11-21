<template>
    
        <div class="card">
            <div class="card-header">
                <h4>{{this.ttl}}</h4>
            <form-factor-component  @new="addFactor" :idf="idf" :ide="ide" :fdt="fdt" >
                </form-factor-component>
             </div>
            <table class="table table-striped" >
                <thead class="thead-dark">
                <tr>
                    <th style="width: 7%">#</th>
                    <th style="width: 68%">Descripción</th>
                    <th style="width: 25%">Opciones</th>
                </tr>
                
                </thead>
                <tbody>
                    <factor-component 
                    v-for="(factor,index) in factores" 
                    :key="factor.id"
                    :factor="factor"
                    :index="index"
                    :idf="idf" :ide="ide"
                    :fdt="fdt"
                    @update="updateFactor(index,...arguments)"
                    @delete="deleteFactor(index)">
                    </factor-component>
                </tbody>
            </table>
        </div>
</template>

<script>
    export default {
        
        props: ['ide','idf','fdt','ttl'],
        
        data(){
            return {
                factores:[],
                
            }
        },
        mounted() {
            axios.get(`/empresas/${this.ide}/fodas/${this.idf}/apiFactores/${this.fdt}`).then((response) => {
                this.factores = response.data;
            });
        },

        

        methods:{
            addFactor(factor){
                this.factores.push(factor);
            },
            updateFactor(index ,factor){
                this.factores[index] = factor;
            },
            deleteFactor(index){
                this.factores.splice(index,1);
            }
        }
    }
</script>
