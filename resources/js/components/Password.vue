<template>
    <div class="fw">
        <label for="password" class="form-label">Contraseña</label>
        <input
            type="password"
            class="form-control"
            :class="{
            'is-valid':isValid,
            'is-invalid':isInvalid
        }"
            v-model="password"
            id="password"
            name="password"
            placeholder="Ingrese su contraseña"

            @keyup="validarPassword()"
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
                feedback: '&nbsp;',
                isInvalid: false,
                isValid: false,
                password: '',
            }
        },
        methods: {
            validarPassword(){
                console.log('Ok')
            }
        }
    }
</script>

<style scoped>
    .fw {
        width: 100%;
    }
</style>
