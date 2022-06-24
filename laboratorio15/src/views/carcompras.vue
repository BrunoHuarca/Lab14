<template>
    <v-main class="grey lighten-3">
        <v-container
            style="width: 80%"
        >
            <h1>Mi Carrito de Compras</h1>
            <v-row>
                <v-col
                    cols="8"
                >

                    <v-card
                        height="250"
                        v-for="n in 6"
                        :key="n"
                        style="margin-bottom:15px "
                    >

                    </v-card>
                </v-col>
                <v-col cols="1"></v-col>
                <v-col cols="3">
                    <v-card height="500"></v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-main>
</template>
