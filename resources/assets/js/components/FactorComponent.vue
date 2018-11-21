<template>
    <tr>
        <td class="align-middle">{{fdt+(index+1)}}</td>

        <td v-if="editMode" class="align-middle">
            <input  type="text" class="form-control " v-model="factor.descripcion">
        </td>
        <td v-else class="align-middle">{{factor.descripcion}}</td>
        <td>
            <!-- <form method="" action=""> -->
                <!-- <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="Editar Empresa">
                <i class="fas fa-edit"></i>
                </a> -->
                <button v-if="editMode" class="btn btn-outline-success" v-on:click="onClickUpdate()" data-toggle="tooltip" data-placement="top" title="Guardar Cambios">
                <i class="fas fa-check"></i>
                </button>
                <button v-else class="btn btn-outline-secondary" v-on:click="onClickEdit()" data-toggle="tooltip" data-placement="top" title="Editar Factor">
                <i class="fas fa-edit"></i>
                </button>

                <button class="btn btn-outline-danger" v-on:click="onClickDelete()" data-toggle="tooltip" data-placement="top" title="Eliminar Factor">
                <i class="far fa-trash-alt"></i>
                </button>
            <!-- </form> -->
        </td>
    </tr>
</template>

<script>
    export default {

        props: ['factor','ide','idf','fdt','index'],
        data(){
            return{
                editMode: false
            };
        },
        mounted() {
            console.log('Component mounted.')
            // this.$nextTick(function() {
                // $('[data-toggle="tooltip"]').tooltip('dispose');
                $('[data-toggle="tooltip"]').tooltip();
            // });
        },

        methods: {
            onClickDelete(){
                axios.post(`/empresas/${this.ide}/fodas/${this.idf}/apiFactores/${this.factor.id}/delete`).then(()=>{
                    this.$emit('delete');
                
                });
                this.$nextTick(function() {
                $('[data-toggle="tooltip"]').tooltip('dispose');
                $('[data-toggle="tooltip"]').tooltip();
                });
            },
            onClickEdit(){
                
                this.editMode=true;
                this.$nextTick(function() {
                $('[data-toggle="tooltip"]').tooltip('dispose');
                $('[data-toggle="tooltip"]').tooltip();
                });
                
            },
            onClickUpdate(){


                const params ={
                    descripcion : this.factor.descripcion
                }
                

                axios.post(`/empresas/${this.ide}/fodas/${this.idf}/apiFactores/${this.factor.id}/editar`,params).then((response)=>{
                    this.editMode=false;
                    const factor = response.data;
                    this.$emit('update',factor);
                    this.$nextTick(function() {
                    $('[data-toggle="tooltip"]').tooltip('dispose');
                    $('[data-toggle="tooltip"]').tooltip();
                    });
                });
            }
        }
    }
</script>
