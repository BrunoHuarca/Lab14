<template>
    <v-app id="inspire">
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Login form</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field
                                        prepend-icon="mdi-account"
                                        name="login"
                                        label="Login"
                                        type="text"
                                        v-model="formulario.usuario"
                                    ></v-text-field>
                                    <v-text-field
                                        id="password"
                                        prepend-icon="mdi-lock"
                                        name="password"
                                        label="Password"
                                        type="password"
                                        v-model="formulario.password"
                                    ></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click="ingresar()">Login</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
import axios from 'axios';
import router from "@/router";
    export default {
        name:"login",
        data(){
            return {
                formulario:{
                    usuario : null,
                    password : null
                }
            }
        },
        methods:{
            async ingresar(){
                try {
                    const envio = await axios.post('http://127.0.0.1:8000/login',this.formulario);
                    if (envio.data.usuario) {
                        router.push('/productos')
                    }
                }
                catch (e){
                    console.log('incorrecto')
                }
            }
        }
    }
</script>


