<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Head } from '@inertiajs/vue3';

</script>
<template>

    <Head :title="$page.props.title" />

    <MainLayout>
        <template #main>
            <div class="container ml-auto mr-auto mt-32 sm:px-32">
                <h1 class="text-3xl lg:text-4xl title-section text-center sm:mb-12">
                    Termos e Condições </h1>
                <p class="text-gray-500 dark:text-gray-400 font-medium sm:mb-10">
                    Bem-vindo ao site da <span class="text-clean-rose">Clinica Rampani</span>! <br>
                    Ao acessar e usar este site, você concorda em cumprir e ficar vinculado a estes termos e condições.
                    Se
                    você
                    não concordar com qualquer parte destes termos, por favor, não use nosso site.

                </p>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        1. Uso do Site
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        1.1 Ao usar este site, você concorda em obedecer a todas as leis e regulamentos locais,
                        nacionais e
                        internacionais aplicáveis, bem como estes termos e condições.
                        <br>
                        1.2 Você é responsável por garantir a segurança de suas credenciais de login e notificar-nos
                        imediatamente
                        em caso de qualquer uso não autorizado de sua conta.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        2. Propriedade Intelectual</h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        2.1 Todo o conteúdo neste site, incluindo, mas não se limitando a textos, gráficos, logotipos,
                        imagens,
                        vídeos e software, é de propriedade exclusiva de <span class="text-clean-rose">Clinica
                            Rampani</span> e está protegido por leis de direitos
                        autorais e propriedade intelectual.
                        <br>
                        2.2 Nenhum conteúdo deste site pode ser reproduzido, modificado, distribuído, transmitido ou
                        republicado
                        sem autorização prévia por escrito.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        3. Privacidade e Proteção de Dados

                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        3.1 Ao usar nosso site, você concorda com os termos de nossa <a
                            :href="route('privacy-policy')"><span class="text-clean-rose">Política de
                                Privacidade</span></a>, que descreve como coletamos, usamos e protegemos suas
                        informações
                        pessoais.
                        <br>
                        3.2 Reservamo-nos o direito de coletar dados anônimos para melhorar a experiência do usuário e
                        para
                        fins
                        estatísticos.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        4. Responsabilidades do Usuário
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        4.1 Você concorda em usar este site apenas para fins legais e éticos.
                        <br>
                        4.2 Não é permitido enviar, publicar ou transmitir qualquer conteúdo que seja ilegal,
                        difamatório,
                        obsceno, ameaçador, invasivo da privacidade, infrator de direitos autorais ou prejudicial.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        5. Links para Terceiros

                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        5.1 Nosso site pode conter links para sites de terceiros. Não temos controle sobre o conteúdo
                        desses
                        sites e não somos responsáveis por qualquer dano ou prejuízo decorrente do uso deles.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        6. Modificações nos Termos
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        6.1 Reservamo-nos o direito de modificar estes termos e condições a qualquer momento. As
                        alterações
                        serão efetivas imediatamente após a publicação no site.
                        <br>
                        6.2 Recomendamos que você revise periodicamente estes termos para estar ciente de quaisquer
                        alterações.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        7. Limitação de Responsabilidade
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        7.1 Este site é fornecido "como está", sem garantias de qualquer tipo, expressas ou implícitas.
                        <br>
                        7.2 Não nos responsabilizamos por quaisquer danos diretos, indiretos, incidentais, especiais ou
                        consequenciais resultantes do uso ou incapacidade de usar este site.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        8. Lei Aplicável
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        8.1 Estes termos e condições são regidos e interpretados de acordo com as leis do Republica
                        Federativa
                        do Brasil, sem consideração às suas disposições de conflitos de leis.
                        <br>
                        Ao usar este site, você concorda com a jurisdição exclusiva dos tribunais do Republica
                        Federativa do
                        Brasil.
                    </p>
                </div>

            </div>
        </template>
    </MainLayout>
</template>

<style scoped>
.title-section {
    font-size: 2rem;
    font-weight: 600;
    color: var(--color-standard);
}
</style>
