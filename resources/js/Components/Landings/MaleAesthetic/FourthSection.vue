<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    methods: {
        async submitFormMessage() {
            const formData = {
                first_name: this.$refs.first_name.value,
                last_name: this.$refs.last_name.value,
                phone: this.$refs.phone.value,
                email: this.$refs.email.value,
                date: this.$refs.date.value,
                terms_and_conditions: this.$refs.terms_and_conditions.checked
            };

            try {
                const response = await axios.post('/process-message', formData);

                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso!',
                    text: response.data.message,
                    confirmButtonColor: '#e4a2a3',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed || result.isDismissed) {
                        this.clearForm();
                    }
                });
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Ocorreu um erro ao processar a mensagem.',
                });
            }
        },
        clearForm() {
            this.$refs.first_name.value = '';
            this.$refs.last_name.value = '';
            this.$refs.phone.value = '';
            this.$refs.email.value = '';
            this.$refs.date.value = '';
            this.$refs.terms_and_conditions.checked = false;
        },
    },
};
</script>

<template>
    <div class="w-full my-8 py-4 bg-gray-200">
        <div class="container mx-auto flex flex-col items-center justify-center h-full px-4">
            <div class="sm:w-6/12 w-full">
                <h2 class="text-center text-3xl lg:text-4xl title-section lg:mb-4 lg:mt-0 sm:mt-6">
                    Agende um horário!
                </h2>
                <form @submit.prevent="submitFormMessage">
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                            <input type="text" id="first_name" ref="first_name"
                                class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus-form-landing border-form-landing"
                                placeholder="Juliana" required />
                        </div>
                        <div>
                            <label for="last_name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sobrenome</label>
                            <input type="text" id="last_name" ref="last_name"
                                class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-form-landing border-form-landing"
                                placeholder="Rampani" required />
                        </div>
                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contato</label>
                            <input type="tel" id="phone" ref="phone"
                                class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-form-landing border-form-landing"
                                placeholder=" (11) 94162-4610" required />
                        </div>
                        <div>
                            <label for="Email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email" ref="email"
                                class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-form-landing border-form-landing"
                                placeholder="contato@clinicaramapni.com.br" required />
                        </div>
                        <div>
                            <label for="Date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione o dia</label>
                            <input type="date" id="date" ref="date"
                                class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-form-landing border-form-landing"
                                placeholder="contato@clinicaramapni.com.br" required />
                        </div>
                    </div>
                    <div class="flex items-start sm:mb-2 mb-6">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" ref="terms_and_conditions"
                                class="w-4 h-4 rounded border-form-landing bg-clean-rose focus-form-landing dark:ring-offset-gray-800"
                                required />
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eu concordo
                            com
                            os
                            <a :href="route('terms-and-conditions')" target="_blank" class="color-text-landing">termos e
                                condições</a>.</label>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="w-full sm:w-3/12 btn-form-landing">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
.title-section {
    font-weight: 600;
    color: #121212;
    text-transform: uppercase;
}

.focus-form-landing:focus,
.border-form-landing {
    border-color: #690000 !important;
    outline: none;
    box-shadow: 0 0 2px red !important;
}

[type="checkbox"]:checked:hover,
[type="checkbox"]:checked:focus,
[type="radio"]:checked:hover,
[type="radio"]:checked:focus,
[type="checkbox"]:checked {
    background-color: #690000 !important;
}

.btn-form-landing {
    font-size: 1rem;
    font-weight: 600;
    color: var(--color-white);
    text-transform: uppercase;
    padding: 10px;
    background-color: #690000 !important;
    transition: var(--transition-standard);

}

.btn-form-landing:hover {
    background-color: #4b0000 !important;
    -webkit-box-shadow: 0px 0px 10px 0px #ff000033;
    -moz-box-shadow: 0px 0px 10px 0px #ff000033;
    box-shadow: 0px 0px 10px 0px #ff00005b;
}

.color-text-landing {
    color: #ad0000;
    border-bottom: 1px solid transparent;
    transition: --transition-standard;
}

.color-text-landing:hover {
    border-bottom: 1px solid #ad0000 !important;
}
</style>
