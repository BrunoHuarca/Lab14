<template>
    <v-app id="inspire">
        <v-navigation-drawer
            v-model="drawer"
            app>
            <v-system-bar></v-system-bar>
            <v-list>
                <v-list-item>
                    <v-list-item-avatar>
                        <v-img src="https://cdn.vuetifyjs.com/images/john.png"></v-img>
                    </v-list-item-avatar>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-content>
                        <v-list-item-title class="text-h6">
                            John Leider
                        </v-list-item-title>
                        <v-list-item-subtitle>john@vuetifyjs.com</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
            <v-divider></v-divider>
            <v-list>
                <v-list-group
                    :value="false"
                    prepend-icon="mdi-account-circle"
                >
                    <template v-slot:activator>
                        <v-list-item-title>Categorias</v-list-item-title>
                    </template>

                    <v-list-item
                        v-for="([title, icon], i) in admins"
                        :key="i"
                        link
                    >
                        <v-list-item-title v-text="title"></v-list-item-title>

                        <v-list-item-icon>
                            <v-icon v-text="icon"></v-icon>
                        </v-list-item-icon>
                    </v-list-item>
                </v-list-group>
                <v-list
                    nav
                >
                    <v-list-item-group
                    >
                        <v-list-item
                            v-for="(item, i) in items"
                            :key="i"
                        >
                            <v-list-item-icon>
                                <v-icon v-text="item.icon"></v-icon>
                            </v-list-item-icon>

                            <v-list-item-content>
                                <v-list-item-title v-text="item.text"></v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list-item-group>
                </v-list>
            </v-list>
        </v-navigation-drawer>

        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>
        <router-view></router-view>
    </v-app>
</template>

<script>
export default {
    data: () => ({ drawer: "" ,
        selectedItem: 0,
        items: [
            { text: 'Carrito de compras', icon: 'mdi-folder' },
            { text: 'Shared with me', icon: 'mdi-account-multiple' },
            { text: 'Starred', icon: 'mdi-star' },
        ],
        admins: [
            ['Niñas', 'mdi-account-multiple-outline'],
            ['Niños', 'mdi-cog-outline'],
            ['Bebes', 'mdi-cog-outline'],
            ['Collecionables', 'mdi-cog-outline'],
        ],
        cruds: [
            ['Create', 'mdi-plus-outline'],
            ['Read', 'mdi-file-outline'],
            ['Update', 'mdi-update'],
            ['Delete', 'mdi-delete'],
        ],
    }),
}
</script>
