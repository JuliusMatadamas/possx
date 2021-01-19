<template>
<div class="container centrar">
    <div class="card shadow">
        <div class="card-header text-center">
            <h4><strong>POSSx</strong></h4>
        </div>

        <div class="card-body">
            <p>Ingrese sus datos para iniciar sesión</p>

            <form :action="url" @submit.prevent="validarForm">
                <div class="row">
                    <div class="col-md-12">
                        <email/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <password/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-block btn-dark">Ingresar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        name: "Login",
        props: {
            url: {
                type: String,
                default: '/login'
            }
        },
        methods: {
            validarForm(){
                console.log('Submit atrapado')
            }
        }
    }
</script>

<style scoped>

</style>
