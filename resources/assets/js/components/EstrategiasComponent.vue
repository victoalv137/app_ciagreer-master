<template>
    
        <div class="card">
            <div class="card-header">
                <form-estrategia-component @new="addEstrategia" :idf="idf" :ide="ide" :fdt1="fdt1" :fdt2="fdt2">
                </form-estrategia-component>
             
             </div>
            <table class="table table-striped" >
                <thead class="thead-dark">
                <tr>
                    <th style="width: 7%">#</th>
                    <th style="width: 68%">Descripción</th>
                    <th style="width: 25%">Eliminar</th>
                </tr>
                
                </thead>
                <tbody>
                    <estrategia-component 
                    v-for="(estrategia,index) in estrategias" 
                    :key="estrategia.id"
                    :index="index"
                    :estrategia="estrategia"
                    :idf="idf" :ide="ide"
                    :fdt1="fdt1" :fdt2="fdt2"
                    @update="updateEstrategia(index,...arguments)"
                    @delete="deleteEstrategia(index)">
                    </estrategia-component>
                </tbody>
            </table>
        </div>
</template>

<script>
    export default {
        
        props: ['ide','idf','fdt1','fdt2'],
        
        data(){
            return {
                estrategias:[],
            }
        },
        mounted() {
            axios.get(`/empresas/${this.ide}/fodas/${this.idf}/apiEstrategias/${this.fdt1+this.fdt2}`).then((response) => {
                this.estrategias = response.data;
            });

            console.log("Prueba");
        },

        methods:{
            addEstrategia(estrategia){
                this.estrategias.push(estrategia);
            },
            updateEstrategia(index ,estrategia){
                this.estrategias[index] = estrategia;
            },
            deleteEstrategia(index){
                this.estrategias.splice(index,1);
            }
        }
    }
</script>
