<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    props: ['selectedDeal'],
    methods: {
        async submitForm() {
            console.log('Selected Deal in Modal:', this.selectedDeal);

            const formData = {
                first_name: this.$refs.first_name.value,
                last_name: this.$refs.last_name.value,
                phone: this.$refs.phone.value,
                email: this.$refs.email.value,
                date: this.$refs.date.value,
                selectedDeal: this.selectedDeal,
            };

            try {
                const response = await axios.post('/geral-scheduling', formData);
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso!',
                    text: response.data.message,
                    confirmButtonColor: '#e4a2a3',
                    confirmButtonText: 'OK',
                    willOpen: () => {
                        const confirmButton = Swal.getConfirmButton();
                        confirmButton.setAttribute('data-modal-hide', 'authentication-modal');
                    }
                });
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: 'Ocorreu um erro ao processar o agendamento.',
                });
            }
        },
    },
};
</script>

<template>
    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full z-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Agende um horário conosco!
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="#" @submit.prevent="submitForm">
                        <div class="grid gap-4 mb-4 md:grid-cols-1">
                            <input type="hidden" :value="selectedDeal" />
                            <div>
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                                <input type="text" id="first_name" ref="first_name"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                                    placeholder="Juliana" required />
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sobrenome</label>
                                <input type="text" id="last_name" ref="last_name"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                                    placeholder="Rampani" />
                            </div>
                            <div>
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contato</label>
                                <input type="tel" id="phone" ref="phone"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                                    placeholder="(11) 94162-4610" required />
                            </div>
                            <div>
                                <label for="Email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" id="email" ref="email"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                                    placeholder="contato@clinicarampani.com.br" required />
                            </div>
                            <div>
                                <label for="Date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecione uma dia</label>
                                <input type="date" id="date" ref="date"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                                    />
                            </div>
                        </div>
                        <button type="submit" class="w-full btn-rose-modal">Agendar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
