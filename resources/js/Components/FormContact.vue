<template>
    <div class="grid grid-cols-1 gap-1 sm:grid-cols-2 sm:gap-2 align-center">
        <div>
            <div class="h-auto max-w-full rounded-lg maps px-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d117049.7708377174!2d-46.79439538831038!3d-23.53950280428456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94ce57cf4256961f%3A0x14c5781a8739123f!2sAv.%20S%C3%A3o%20Gualter%2C%20499%20-%20Alto%20de%20Pinheiros%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005455-000%2C%20Brasil!3m2!1d-23.5395245!2d-46.711993799999995!5e0!3m2!1spt-BR!2spt!4v1708798349169!5m2!1spt-BR!2spt"
                    width="600" height="500" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        <div>
            <h2 class="text-center text-3xl lg:text-4xl title-section lg:mb-4 lg:mt-0 mt-6">
                Mande sua mensagem para a clínica.
            </h2>

            <form @submit.prevent="submitFormMessage">
                <div class="grid gap-6 mb-6 md:grid-cols-2 px-4">
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
                            placeholder="Rampani" required />
                    </div>
                    <div>
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contato</label>
                        <input type="tel" id="phone" ref="phone"
                            class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                            placeholder=" (11) 94162-4610" required />
                    </div>
                    <div>
                        <label for="Email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email" ref="email"
                            class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                            placeholder="contato@clinicaramapni.com.br" required />
                    </div>
                </div>
                <div class="mb-2 px-4">

                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mensagem</label>
                    <textarea id="message" rows="4" ref="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-clean-rose rounded-lg dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                        placeholder="Digite sua mensagem..." required></textarea>

                </div>
                <div class="flex items-start mb-6 px-4">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" ref="terms_and_conditions"
                            class="w-4 h-4 rounded border-standard bg-clean-rose focus-standard dark:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eu concordo
                        com
                        os
                        <a :href="route('terms-and-conditions')" class="color-text">termos e condições</a>.</label>
                </div>
                <div class="px-4">
                    <button type="submit" class="btn-submit action-btn">Enviar</button>
                </div>
            </form>

        </div>
    </div>
</template>

<style>
.maps iframe {
    width: 100%;
}

.align-center {
    align-items: center;
}
</style>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';

export default {
    methods: {
        async submitFormMessage() {

            let btnSubmit = document.querySelector('.action-btn');
            btnSubmit.style.pointerEvents = 'none';
            btnSubmit.innerHTML = `<div role="status"><svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-gray-600 dark:fill-gray-300" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/><path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/></svg><span class="sr-only">Loading...</span></div>`;

            const formData = {
                first_name: this.$refs.first_name.value,
                last_name: this.$refs.last_name.value,
                phone: this.$refs.phone.value,
                email: this.$refs.email.value,
                message: this.$refs.message.value,
                terms_and_conditions: this.$refs.terms_and_conditions.checked
            };

            try {
                const response = await axios.post('/process-message', formData);

                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 6000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: response.data.message,
                }).then((result) => {
                    if (result.isConfirmed || result.isDismissed) {
                        this.clearForm();
                    }
                });

                btnSubmit.style.pointerEvents = 'all';
                btnSubmit.innerHTML = 'ENVIAR';
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
            this.$refs.message.value = '';
            this.$refs.terms_and_conditions.checked = false;
        },
    },
};

</script>
