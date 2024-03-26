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
                    Política de Privacidade </h1>

                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        1. Coleta de Informações Pessoais
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        1.1 Ao usar o site da <span class="text-clean-rose">Clinica Rampani</span>, podemos coletar
                        informações
                        pessoais identificáveis, incluindo, mas não se
                        limitando a: nome, endereço de e-mail, informações de contato, informações de pagamento e outros
                        dados
                        relevantes.
                        <br>
                        1.2 Essas informações podem ser coletadas quando você se registra no site, faz uma compra, preenche
                        formulários, participa de promoções ou interage de outras formas conosco.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        2. Uso de Informações Pessoais

                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        2.1 As informações pessoais coletadas podem ser usadas para os seguintes fins:

                        <li class="list-privacy">Processar transações e fornecer os produtos ou serviços solicitados.</li>
                        <li class="list-privacy">Personalizar a experiência do usuário e responder às necessidades
                            individuais.
                        </li>
                        <li class="list-privacy">Fornecer suporte ao cliente.</li>
                        <li class="list-privacy">Enviar e-mails periódicos, incluindo atualizações, informações sobre
                            pedidos,
                            etc.</li>
                        <li class="list-privacy">Administrar promoções, pesquisas ou outros recursos do site.</li>
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        3. Proteção de Informações Pessoais


                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        3.1 Implementamos medidas de segurança para proteger suas informações pessoais contra acesso não
                        autorizado, alteração, divulgação ou destruição.
                        <br>
                        3.2 No entanto, reconhecemos que nenhuma transmissão de dados pela internet é completamente segura,
                        e
                        não podemos garantir a segurança absoluta das informações enviadas para nós.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        4. Compartilhamento de Informações Pessoais
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        4.1 Não vendemos, trocamos ou transferimos suas informações pessoais para terceiros sem o seu
                        consentimento, exceto quando necessário para fornecer os produtos ou serviços solicitados.
                        <br>
                        4.2 Podemos divulgar informações pessoais quando acreditarmos que a divulgação é apropriada para
                        cumprir
                        com a lei, proteger nossos direitos ou garantir a segurança dos usuários.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        6. Links para Sites de Terceiros
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        6.1 Nosso site pode conter links para sites de terceiros. Não somos responsáveis pelas práticas de
                        privacidade desses sites e recomendamos que você revise suas políticas de privacidade.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        7. Alterações na Política de Privacidade
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        7.1 Reservamo-nos o direito de modificar esta política a qualquer momento. As alterações entrarão em
                        vigor imediatamente após a publicação no site.
                        <br>
                        7.2 Recomendamos que você revise periodicamente esta política para estar ciente de quaisquer
                        alterações.
                    </p>
                </div>
                <div class="my-10">
                    <h4 class="text-md lg:text-lg font-bold text-gray-500 dark:text-gray-400">
                        8. Contato
                    </h4>
                    <p class="text-gray-500 dark:text-gray-400 font-medium sm:ml-10">
                        8.1 Se você tiver dúvidas sobre esta política de privacidade, entre em contato conosco através das
                        informações fornecidas no site.
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

.list-privacy {
    margin-left: 2.5rem;
}
</style>
