<template>
    <div class="grid grid-cols-1 gap-1 sm:grid-cols-2 sm:gap-2 align-center">
        <div>
            <div class="h-auto max-w-full rounded-lg maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d117049.7708377174!2d-46.79439538831038!3d-23.53950280428456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94ce57cf4256961f%3A0x14c5781a8739123f!2sAv.%20S%C3%A3o%20Gualter%2C%20499%20-%20Alto%20de%20Pinheiros%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005455-000%2C%20Brasil!3m2!1d-23.5395245!2d-46.711993799999995!5e0!3m2!1spt-BR!2spt!4v1708798349169!5m2!1spt-BR!2spt"
                    width="600" height="500" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        <div>
            <h2 class="text-center text-3xl lg:text-4xl title-section lg:mb-4 lg:mt-0 mt-6">
                Mande sua mensagem para a clínica.
            </h2>

            <form>
                <div class="grid gap-6 mb-6 md:grid-cols-2 px-4">
                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                        <input type="text" id="first_name"
                            class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                            placeholder="Juliana" required />
                    </div>
                    <div>
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sobrenome</label>
                        <input type="text" id="last_name"
                            class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                            placeholder="Rampani" required />
                    </div>
                    <div>
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contato</label>
                        <input type="tel" id="phone"
                            class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                            placeholder=" (11) 94162-4610" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                    </div>
                    <div>
                        <label for="Email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" id="email"
                            class="bg-clean-rose text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                            placeholder="contato@clinicaramapni.com.br" required />
                    </div>
                </div>
                <div class="mb-2 px-4">

                    <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mensagem</label>
                    <textarea id="message" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-clean-rose rounded-lg dark:placeholder-gray-400 dark:text-white focus-standard border-standard"
                        placeholder="Digite sua mensagem..." required></textarea>

                </div>
                <div class="flex items-start mb-6 px-4">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 rounded border-standard bg-clean-rose focus-standard dark:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Eu concordo com
                        os
                        <a href="#" class="color-text">termos e condições</a>.</label>
                </div>
                <div class="px-4">
                    <button type="submit" class="btn-submit">Enviar</button>
                </div>
            </form>

        </div>
    </div>
</template>

<style>
.maps iframe {
    width: 100%;
}

.align-center{
    align-items: center;
}

.color-text{
    color: var(--color-standard);
    border-bottom: 1px solid transparent;
    transition: --transition-standard;
}

.color-text:hover{
    border-bottom: 1px solid var(--color-standard);

}

.focus-standard:focus,
.border-standard {
    border-color: var(--color-standard) !important;
    outline: none;
    box-shadow: 0 0 3px var(--color-standard);
}

.btn-submit {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--color-white);
    text-transform: uppercase;
    padding: 5px 25px;
    background-color: var(--color-standard);
    border-radius: 25px 0px;
}

[type='checkbox']:checked:hover,
[type='checkbox']:checked:focus,
[type='radio']:checked:hover,
[type='radio']:checked:focus,
[type='checkbox']:checked {
    background-color: #e4a2a3;
}</style>
