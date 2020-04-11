<template>
    <div class="container container-task">
        <div class="row">
            <div class="col-md-12">
                <h2>Lista de tareas</h2>
                 <!-- Button trigger modal -->
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#staticBackdrop">
                        Agregar
                    </button>





                     <!-- Modal  -->
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Nueva Nota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <!-- Formulario para la creación o modificación de nuestras tareas-->
                                    <label>Nombre</label>
                                    <input v-model="nombre" type="text" class="form-control">

                                    <label>Contenido</label>
                                    <input v-model="contenido" type="text" class="form-control">
                                </div>

                            </div>
                            <div class="modal-footer">
                               
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                                <button type="button" v-if="update == 0" @click="saveNota()" class="btn btn-success"
                                    data-dismiss="modal">Añadir</button>
                                <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                                <button type="button" v-if="update != 0" @click="updateNota()" class="btn btn-warning"
                                    data-dismiss="modal">Actualizar</button>
                                <!-- Botón que limpia el formulario y inicializa la variable a 0, solo se muestra si la variable update es diferente a 0-->
                                <button type="button" v-if="update != 0" @click="clearFields()" class="btn btn-dark"
                                    data-dismiss="modal">Atrás</button>
                            </div>
                        </div>
                    </div>
                </div>








                <table class="table text-center m-4">
                    <!--Creamos una tabla que mostrará todas las tareas-->
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Contenido</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="nota in arrayNota" :key="nota.id">
                            <!--Recorremos el array y cargamos nuestra tabla-->
                            <td v-text="nota.nombre"></td>
                            <td v-text="nota.contenido"></td>
                            <td>
                                <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                <button type="button" class="btn btn-primary" @click="loadFieldsUpdate(nota)"
                                    data-toggle="modal" data-target="#staticBackdrop">Modificar</button>


                                   
                                <!--Botón que borra la tarea que seleccionemos-->
                                <button class="btn btn-danger" @click="deleteNota(nota)">Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
















            </div>
        </div>
    </div>
</template>







<script>
    export default {
        data() {
            return {
                nombre: "", //Esta variable, mediante v-model esta relacionada con el input del formulario
                contenido: "", //Esta variable, mediante v-model esta relacionada con el input del formulario
                update: 0,
                /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                                         ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/
                arrayNota: [], //Este array contendrá las tareas de nuestra bd
            }
        },
        methods: {
            getNota() {
                let me = this;
                let url = '/nota' //Ruta que hemos creado para que nos devuelva todas las nota
                axios.get(url).then(function (response) {
                        //creamos un array y guardamos el contenido que nos devuelve el response
                        me.arrayNota = response.data;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
            },
            saveNota() {
                let me = this;
                let url = '/nota/guardar' //Ruta que hemos creado para enviar una nota y guardarla
                axios.post(url, { //estas variables son las que enviaremos para que crear la tarea
                        'nombre': this.nombre,
                        'contenido': this.contenido,
                    }).then(function (response) {
                        me
                            .getNota(); //llamamos al metodo getNota(); para que refresque nuestro array y muestro los nuevos datos
                        me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
                    })
                    .catch(function (error) {
                        console.log(error);
                    });

            },
            updateNota() {
                /*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                                tarea que queremos modificar*/
                let me = this;
                axios.put('/nota/actualizar', {
                        'id': this.update,
                        'nombre': this.nombre,
                        'contenido': this.contenido,
                    }).then(function (response) {
                        me
                            .getNota(); //llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                        me.clearFields(); //Limpiamos los campos e inicializamos la variable update a 0
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            loadFieldsUpdate(
                data) { //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
                this.update = data.id
                let me = this;
                let url = '/nota/buscar?id=' + this.update;
                axios.get(url).then(function (response) {
                        me.nombre = response.data.nombre;
                        me.contenido = response.data.contenido;

                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    });
            },
            deleteNota(
                data) { //Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
                let me = this;
                let nota_id = data.id
                if (confirm('¿Seguro que deseas borrar esta Nota?')) {
                    axios.delete('/nota/borrar/' + nota_id).then(function (response) {
                            me.getNota();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
            },
            clearFields() {
                /*Limpia los campos e inicializa la variable update a 0*/
                this.nombre = "";
                this.contenido = "";
                this.update = 0;
            }
        },
        mounted() {
            this.getNota();
        }
    }

</script>
