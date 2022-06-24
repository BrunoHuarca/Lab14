<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de ventas</title>
</head>
<body>
    <v-app id="inspire">
        <v-app-bar
            app
            color="white"
            flat
        >
            <v-avatar
                :color="$vuetify.breakpoint.smAndDown ? 'grey darken-1' : 'transparent'"
                size="32"
            ></v-avatar>

            <v-tabs
                centered
                class="ml-n9"
                color="grey darken-1"
            >
                <v-tab
                    v-for="link in links"
                    :key="link"
                >

                </v-tab>
            </v-tabs>

            <v-avatar
                class="hidden-sm-and-down"
                color="grey darken-1 shrink"
                size="32"
            ></v-avatar>
        </v-app-bar>

        <v-main>
            <v-container>
                <v-row>
                    <v-col
                        v-for="n in 6"
                        :key="n"
                        xs="1000"
                        sm="800"
                        md="600"
                    >
                        <example-component>
                        </example-component>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
<script>
    export default {
        data: () => ({
            links: [
                'Dashboard',
                'Messages',
                'Profile',
                'Updates',
            ],
        }),
    }
</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
