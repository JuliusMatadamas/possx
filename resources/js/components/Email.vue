<template>
<div class="fw">
    <label for="email" class="form-label">Correo electrónico</label>
    <input
        type="email"
        class="form-control"
        :class="{
            'is-valid':isValid,
            'is-invalid':isInvalid
        }"
        v-model="email"
        id="email"
        name="email"

        @keyup="validarEmail()"
    >
    <div :class="{
        'invalid-feedback':isInvalid,
        'valid-feedback':isValid
    }" v-html="feedback"></div>
</div>
</template>

<script>
    export default {
        name: "Email",
        data: function(){
            return {
                email: '',
                feedback: '&nbsp;',
                isInvalid: false,
                isValid: false,
            }
        },
        methods: {
            validarEmail(){
                let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if( !re.test(this.email) ){
                    this.feedback = "¡Ingrese un correo electrónico válido!"
                    this.isInvalid = true
                    this.isValid = false
                }
                else {
                    this.feedback = "El correo electrónico parece válido"
                    this.isInvalid = false
                    this.isValid = true
                }
            }
        }
    }
</script>

<style scoped>
    .fw {
        width: 100%;
    }
</style>
