<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    props: ['selectedDeal'],
    methods: {
        async submitForm() {

            let btnSubmit = document.querySelector('.action-btn');
            btnSubmit.style.pointerEvents = 'none';
            btnSubmit.innerHTML = `<div role="status"><svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg><span class="sr-only">Loading...</span></div>`;
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
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 5000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: response.data.message
                });
                btnSubmit.style.pointerEvents = 'all';
                btnSubmit.innerHTML = 'ENVIAR';
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
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-black rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-white dark:text-gray-900">
                        Agendar um horário!
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
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-900">Nome</label>
                                <input type="text" id="first_name" ref="first_name"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus-modal-landing border-modal-landing"
                                    placeholder="Juliana" required />
                            </div>
                            <div>
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-900">Sobrenome</label>
                                <input type="text" id="last_name" ref="last_name"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-modal-landing border-modal-landing"
                                    placeholder="Rampani" />
                            </div>
                            <div>
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-900">Contato</label>
                                <input type="tel" id="phone" ref="phone"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-modal-landing border-modal-landing"
                                    placeholder="(11) 94162-4610" required />
                            </div>
                            <div>
                                <label for="Email"
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-900">Email</label>
                                <input type="email" id="email" ref="email"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-modal-landing border-modal-landing"
                                    placeholder="contato@clinicarampani.com.br" required />
                            </div>
                            <div>
                                <label for="Date"
                                    class="block mb-2 text-sm font-medium text-white dark:text-gray-900">Selecione uma
                                    dia</label>
                                <input type="date" id="date" ref="date"
                                    class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-modal-landing border-modal-landing" />
                            </div>
                        </div>
                        <button type="submit" class="w-full btn-modal-landing action-btn">Agendar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.focus-modal-landing:focus,
.border-modal-landing {
    border-color: #690000 !important;
    outline: none;
    box-shadow: 0 0 20px red !important;
}

[type="checkbox"]:checked:hover,
[type="checkbox"]:checked:focus,
[type="radio"]:checked:hover,
[type="radio"]:checked:focus,
[type="checkbox"]:checked {
    background-color: #690000 !important;
}

.btn-modal-landing {
    font-size: 1rem;
    font-weight: 600;
    color: var(--color-white);
    text-transform: uppercase;
    padding: 10px;
    background-color: #690000 !important;
    transition: var(--transition-standard);

}

.btn-modal-landing:hover {
    background-color: #4b0000 !important;
    -webkit-box-shadow: 0px 0px 10px 0px red;
    -moz-box-shadow: 0px 0px 10px 0px red;
    box-shadow: 0px 0px 10px 0px red;

}
</style>
