<template>
    <tr>
        <td class="align-middle">{{estrategia.estrategia_Cod}}</td>

        <td v-if="editMode" class="align-middle">
            <input  type="text" class="form-control " v-model="estrategia.descripcion">
            <div class="row form-group">
                <div class="col-sm-6">
                    <estrategia-factor-component @check="addF1(...arguments)" :factoresSelected="factoresSelectedFirst" :idf="idf" :ide="ide" :fdt="fdt1" :fctest="fdt1+fdt2" :codEstrategia="estrategia.estrategia_Cod"></estrategia-factor-component>
                </div>
                <div class="col-sm-6">
                    <estrategia-factor-component @check="addF2(...arguments)" :factoresSelected="factoresSelectedLast" :idf="idf" :ide="ide" :fdt="fdt2" :fctest="fdt1+fdt2" :codEstrategia="estrategia.estrategia_Cod"></estrategia-factor-component>
                </div>
            </div>
        </td>
        <td v-else class="align-middle">{{textEstrategia}}
        </td>
        <td>
            <!-- <form method="" action=""> -->
                <!-- <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Editar Empresa">
                <i class="fas fa-edit"></i>
                </a> -->
                <button v-if="editMode" class="btn btn-outline-success" v-on:click="onClickUpdate()" data-toggle="tooltip" data-placement="top" title="Guardar Cambios">
                <i class="fas fa-check"></i>
                </button>
                <button v-else class="btn btn-outline-secondary" v-on:click="onClickEdit()" data-toggle="tooltip" data-placement="top" title="Editar estrategia">
                <i class="fas fa-edit"></i>
                </button>

                <button class="btn btn-outline-danger" v-on:click="onClickDelete()" data-toggle="tooltip" data-placement="top" title="Eliminar estrategia">
                <i class="far fa-trash-alt"></i>
                </button>
            <!-- </form> -->
        </td>
    </tr>
</template>

<script>
    export default {

        props: ['estrategia','ide','idf','fdt1','fdt2','index'],
        
        data(){
            return{
                editMode: false,
                factoresEstrategia:[],
                textEstrategia:null,
                factoresSelectedFirst:[],
                factoresSelectedLast:[],
                idEstrategia:'',
            };
        },
        mounted() {

            //  this.$nextTick(function() {
            //     $('[data-toggle="tooltip"]').tooltip('dispose');
                $('[data-toggle="tooltip"]').tooltip();
            //  });

            axios.get(`/apiEstrategias/${this.estrategia.id}/factoresEstrategia`).then((response) => {
                this.factoresEstrategia = response.data;
                this.textEstrategia=this.estrategia.descripcion + '(';
            for (let index = 0; index < this.factoresEstrategia.length; index++) {
                this.textEstrategia += this.factoresEstrategia[index].factor_Cod+',';
            }
            this.textEstrategia+=')';

            });


        },

        methods: {

            addF1(factoresSelected){
                console.log("gggg");
                console.log(factoresSelected);
                this.factoresSelectedFirst=factoresSelected;
            },

            addF2(factoresSelected){
                console.log(factoresSelected);
                this.factoresSelectedLast=factoresSelected;
            },


            onClickDelete(){
               
                axios.post(`/apiEstrategias/${this.estrategia.id}/delete`).then(()=>{
                    this.$emit('delete');
                });
                    
                // this.$nextTick(function() {
                $('[data-toggle="tooltip"]').tooltip('dispose');
                $('[data-toggle="tooltip"]').tooltip();
                // });
            },
            onClickEdit(){
                
                
                // this.$nextTick(function() {
                // $('[data-toggle="tooltip"]').tooltip('dispose');
                // $('[data-toggle="tooltip"]').tooltip();
                // });

                // const constF1 = this.factoresSelectedFirst;
                // const constF2 = this.factoresSelectedLast;

                console.log("Edit");

                
                axios.get(`/apiEstrategias/${this.estrategia.id}/factoresEstrategia/${this.fdt1}/tipoFactor`).then((response) => {
                    this.factoresSelectedFirst=response.data.map(a => a.factor_Cod);
                });

                axios.get(`/apiEstrategias/${this.estrategia.id}/factoresEstrategia/${this.fdt2}/tipoFactor`).then((response) => {
                    this.factoresSelectedLast=response.data.map(a => a.factor_Cod);
                });
                
                // console.log(this.factoresSelectedFirst);

                this.editMode=true;
                
            },
            onClickUpdate(){
                const params ={
                    descripcion : this.estrategia.descripcion,
                };

                const constF1 = this.factoresSelectedFirst;
                const constF2 = this.factoresSelectedLast;

                if (this.factoresSelectedFirst.length==0 || this.factoresSelectedLast.length==0 ) {
                    alert("Debes Seleccionar una");
                    return;
                }
                axios.post(`/apiEstrategias/${this.estrategia.id}/editar`,params).then((response)=>{
                    this.editMode=false;
                    const estrategia = response.data;
                    this.$emit('update',estrategia);
                    
                    for (let index = 0; index < constF1.length; index++) {
                        axios.post(`/apiEstrategias/${estrategia.id}/factor/${constF1[index]}/editar`);
                    }

                    for (let index = 0; index < constF2.length; index++) {
                        axios.post(`/apiEstrategias/${estrategia.id}/factor/${constF2[index]}/editar`);
                    }    

                    console.log(estrategia);
                    
                                axios.get(`/apiEstrategias/${this.estrategia.id}/factoresEstrategia`).then((response) => {
                this.factoresEstrategia = response.data;
                this.textEstrategia=this.estrategia.descripcion + '(';
            for (let index = 0; index < this.factoresEstrategia.length; index++) {
                this.textEstrategia += this.factoresEstrategia[index].factor_Cod+',';
            }
            this.textEstrategia+=')';

            });

                    this.$nextTick(function() {
                    $('[data-toggle="tooltip"]').tooltip('dispose');
                    $('[data-toggle="tooltip"]').tooltip();
                    });
                });
            },
        }
    }
</script>
