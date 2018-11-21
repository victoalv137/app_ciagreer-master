<template>
              <form action="" v-on:submit.prevent="newEstrategia()">
                <div class="form-group">
                  <label for="descripcionEstrategia">Agregar nueva estrategia</label>
                  <input type="text" class="form-control" v-model="descripcion">
                </div>

                <div class="row form-group">
                    <div class="col-sm-6">
                        <estrategia-factor-component @check="addF1(...arguments)" :factoresSelected="factoresSelected" :idf="idf" :ide="ide" :fdt="fdt1" :fctest="fdt1+fdt2"></estrategia-factor-component>
                    </div>
                    <div class="col-sm-6">
                        <estrategia-factor-component @check="addF2(...arguments)" :factoresSelected="factoresSelected" :idf="idf" :ide="ide" :fdt="fdt2" :fctest="fdt1+fdt2"></estrategia-factor-component>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </form>           
</template>

<script>
    export default {
        props: ['ide','idf','fdt1','fdt2'],

        data(){
            return{
                descripcion: '',
                fctSelect1:[],
                fctSelect2:[],
                factoresSelected:[],
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{

            addF1(factoresSelected){
                console.log(factoresSelected);
                // console.log(factoresSelected.constructor.name);
                this.fctSelect1=factoresSelected;
            },

            addF2(factoresSelected){
                console.log(factoresSelected);
                this.fctSelect2=factoresSelected;
            },

            newEstrategia(){
                
                const paramsEst = {
                    descripcion: this.descripcion,
                    tipo_Estrategia: (this.fdt1+ this.fdt2),
                    id_Foda:this.idf,
                };
            
                const constF1 = this.fctSelect1;
                const constF2 = this.fctSelect2;
                if (this.fctSelect1.length==0 || this.fctSelect2.length==0 ) {
                    alert("Debes Seleccionar una");
                    return;
                }

                this.descripcion = '';

                axios.post(`/fodas/${this.idf}/apiEstrategias`, paramsEst).then((response)=>{
                    const estrategia = response.data;

                    for (let index = 0; index < constF1.length; index++) {
                        axios.post(`/apiEstrategias/${estrategia.id}/factor/${constF1[index]}/save`);
                    }

                    for (let index = 0; index < constF2.length; index++) {
                        axios.post(`/apiEstrategias/${estrategia.id}/factor/${constF2[index]}/save`);
                    }    

                    this.$emit('new', estrategia);
                });

                $('input:checkbox:checked').click();

                $('input:checkbox').removeAttr('checked');
        

            },
        }
    }
</script>
