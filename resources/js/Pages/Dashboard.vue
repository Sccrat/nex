<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios';
import BreezeButton from '@/Components/Button.vue';

// const user_id = computed(() => usePage().props.auth.user.id)
// const user_id = props;
// console.log(user_id);


</script>

<style>
body {
    font-family: Helvetica Neue, Arial, sans-serif;
    font-size: 14px;
    color: #444;
}

table {
    border: 2px solid #42b983;
    border-radius: 3px;
    background-color: #fff;
}

th {
    background-color: #42b983;
    color: rgba(255, 255, 255, 0.66);
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

td {
    background-color: #f9f9f9;
}

th,
td {
    min-width: 120px;
    padding: 10px 20px;
}

th.active {
    color: #fff;
}

th.active .arrow {
    opacity: 1;
}

.arrow {
    display: inline-block;
    vertical-align: middle;
    width: 0;
    height: 0;
    margin-left: 5px;
    opacity: 0.66;
}

.arrow.asc {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-bottom: 4px solid #fff;
}

.arrow.dsc {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #fff;
}
</style>

<template>

    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        Eliminar
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Telefono
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="key in datos">
                                    <td>
                                        <BreezeButton class="ml-4" v-on:click="deleteUser(key.id)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path
                                                    d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                            </svg>
                                        </BreezeButton>
                                    </td>
                                    <td>
                                        {{ key.name }}
                                    </td>
                                    <td>
                                        {{ key.email }}
                                    </td>
                                    <td>
                                        {{ key.phone }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
export default {
    data() {
        return {
            user_id: "",
            result: [],
            datos: []
        }
    }, methods: {

        getUsers() {
            this.user_id = this.$page.props.auth.user.id;
            axios.get('/GetUsers')
                .then(response => this.datos =
                    response.data.filter(word => word.id !== this.user_id)
                )
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
        },
        deleteUser(id) {
            axios.get('/DeleteUser/' + id)
                .then(response => { console.log(response) }
                )
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            this.getUsers();
        }
    },
    mounted() {


    }, created() {
        this.getUsers();
    }
}
</script>
