<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import {
    ArrowUp,
    Facebook,
    Instagram,
    Mail,
    MapPin,
    Phone,
    ChevronDown,
} from 'lucide-vue-next';
import { onMounted, onUnmounted, ref } from 'vue';

// Show back to top button when scrolled
const showBackToTop = ref(false);
const newsletterEmail = ref('');
const isSubmitting = ref(false);
const subscriptionMessage = ref('');

// Navigation links
const navigationLinks = [
    { href: '/', label: 'Início' },
    { href: '/sobre', label: 'Sobre' },
    { href: '/contactos', label: 'Contactos' },
    { href: '/ajuda', label: 'Centro de Ajuda' },
    { href: '/politica-privacidade', label: 'Política de Privacidade' },
];

// Quick links (educational offerings)
const quickLinks = [
    { href: '/oferta-educativa/pre-escolar', label: 'Pré-Escolar' },
    { href: '/oferta-educativa/1-ciclo', label: '1.º Ciclo' },
    { href: '/oferta-educativa/2-ciclo', label: '2.º Ciclo' },
    { href: '/oferta-educativa/3-ciclo', label: '3.º Ciclo' },
    { href: '/oferta-educativa/secundario', label: 'Ensino Secundário' },
    { href: '/inscricoes', label: 'Inscrições' },
];

// Social media links
const socialLinks = [
    { href: 'https://facebook.com', label: 'Facebook', icon: Facebook },
    { href: 'https://instagram.com', label: 'Instagram', icon: Instagram },
    { href: 'mailto:geral@cdds.pt', label: 'Email', icon: Mail },
];

// Handle scroll for back to top button
const handleScroll = () => {
    showBackToTop.value = window.scrollY > 400;
};

// Scroll to top function
const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
};

// Newsletter subscription handler
const handleSubscribe = async () => {
    if (!newsletterEmail.value || isSubmitting.value) {
        return;
    }

    isSubmitting.value = true;
    subscriptionMessage.value = '';

    // Simulate API call - replace with actual implementation
    try {
        // TODO: Implement actual newsletter subscription API call
        await new Promise((resolve) => setTimeout(resolve, 1000));

        subscriptionMessage.value = 'Obrigado pela sua subscrição!';
        newsletterEmail.value = '';

        setTimeout(() => {
            subscriptionMessage.value = '';
        }, 5000);
    } catch (error) {
        subscriptionMessage.value = 'Erro ao subscrever. Tente novamente.';
    } finally {
        isSubmitting.value = false;
    }
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

const currentYear = new Date().getFullYear();
const isNavOpen = ref(false);
const isQuickLinksOpen = ref(false);
</script>

<template>
    <footer class="relative bg-[#1C1C1E] font-[Montserrat] text-[#F8F2E8]">
        <!-- Main footer content -->
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <div
                class="grid grid-cols-1 gap-8 justify-items-center md:grid-cols-2 lg:grid-cols-4 lg:gap-12 lg:justify-items-start"
            >
                <!-- Brand / Contact Column -->
                <div class="space-y-6 w-full max-w-xs md:max-w-none md:w-auto text-center md:text-left">
                    <div>
                        <Link
                            href="/"
                            class="inline-flex items-center gap-3 rounded-md focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                        >
                            <img
                                src="/logo-monocromatic.webp"
                                alt="Logótipo monocromático do Colégio Dom Diogo de Sousa"
                                class="h-12 w-auto object-contain mx-auto md:mx-0"
                            />
                        </Link>
                    </div>

                    <p class="text-sm leading-relaxed text-[#F8F2E8]/90">
                        Colégio Dom Diogo de Sousa, a referência nacional em
                        excelência académica
                    </p>

                    <div class="space-y-3">
                        <a
                            href="tel:+351253201290"
                            class="flex items-center gap-3 justify-center md:justify-start rounded-md text-sm text-[#F8F2E8]/90 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                        >
                            <Phone :size="16" class="flex-shrink-0" />
                            <span>253 201 290</span>
                        </a>
                        <a
                            href="https://maps.google.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-start gap-3 justify-center md:justify-start rounded-md text-sm text-[#F8F2E8]/90 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                        >
                            <MapPin :size="16" class="mt-0.5 flex-shrink-0" />
                            <span class="leading-relaxed">
                                Rua Conselheiro Bento Miguel<br />
                                4710-294 Braga
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Navigate Column -->
                <div class="w-full max-w-xs md:max-w-none md:w-auto md:text-left">
                    <!-- Mobile: Collapsible -->
                    <div class="block md:hidden">
                        <button
                            @click="isNavOpen = !isNavOpen"
                            :aria-expanded="isNavOpen"
                            aria-controls="nav-links"
                            class="w-full flex items-center justify-between rounded-md px-2 py-3 text-lg font-bold text-white"
                        >
                            Navegar
                            <ChevronDown :size="20" :class="isNavOpen ? 'rotate-180' : ''" class="transition-transform duration-200" />
                        </button>
                        <Transition
                            enter-active-class="transition-all duration-300 ease-out"
                            enter-from-class="opacity-0 max-h-0"
                            enter-to-class="opacity-100 max-h-96"
                            leave-active-class="transition-all duration-200 ease-in"
                            leave-from-class="opacity-100 max-h-96"
                            leave-to-class="opacity-0 max-h-0"
                        >
                            <nav v-if="isNavOpen" id="nav-links" aria-label="Links de navegação" class="overflow-hidden">
                                <ul class="space-y-3 py-2 text-left">
                                    <li v-for="link in navigationLinks" :key="link.href">
                                        <Link
                                            :href="link.href"
                                            class="inline-block rounded-md px-1 text-sm text-[#F8F2E8]/90 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                                        >
                                            {{ link.label }}
                                        </Link>
                                    </li>
                                </ul>
                            </nav>
                        </Transition>
                    </div>
                    <!-- Desktop: Always expanded -->
                    <div class="hidden md:block">
                        <h3 class="mb-6 text-lg font-bold text-white">Navegar</h3>
                        <nav aria-label="Links de navegação">
                            <ul class="space-y-3 text-left">
                                <li v-for="link in navigationLinks" :key="link.href">
                                    <Link
                                        :href="link.href"
                                        class="inline-block rounded-md px-1 text-sm text-[#F8F2E8]/90 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                                    >
                                        {{ link.label }}
                                    </Link>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Quick Links Column (Educational offerings) -->
                <div class="w-full max-w-xs md:max-w-none md:w-auto md:text-left">
                    <!-- Mobile: Collapsible -->
                    <div class="block md:hidden">
                        <button
                            @click="isQuickLinksOpen = !isQuickLinksOpen"
                            :aria-expanded="isQuickLinksOpen"
                            aria-controls="quick-links"
                            class="w-full flex items-center justify-between rounded-md px-2 py-3 text-lg font-bold text-white"
                        >
                            Oferta Educativa
                            <ChevronDown :size="20" :class="isQuickLinksOpen ? 'rotate-180' : ''" class="transition-transform duration-200" />
                        </button>
                        <Transition
                            enter-active-class="transition-all duration-300 ease-out"
                            enter-from-class="opacity-0 max-h-0"
                            enter-to-class="opacity-100 max-h-96"
                            leave-active-class="transition-all duration-200 ease-in"
                            leave-from-class="opacity-100 max-h-96"
                            leave-to-class="opacity-0 max-h-0"
                        >
                            <nav v-if="isQuickLinksOpen" id="quick-links" aria-label="Links rápidos" class="overflow-hidden">
                                <ul class="space-y-3 py-2 text-left">
                                    <li v-for="link in quickLinks" :key="link.href">
                                        <Link
                                            :href="link.href"
                                            class="inline-block rounded-md px-1 text-sm text-[#F8F2E8]/90 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                                        >
                                            {{ link.label }}
                                        </Link>
                                    </li>
                                </ul>
                            </nav>
                        </Transition>
                    </div>
                    <!-- Desktop: Always expanded -->
                    <div class="hidden md:block">
                        <h3 class="mb-6 text-lg font-bold text-white">
                            Oferta Educativa
                        </h3>
                        <nav aria-label="Links rápidos">
                            <ul class="space-y-3 text-left">
                                <li v-for="link in quickLinks" :key="link.href">
                                    <Link
                                        :href="link.href"
                                        class="inline-block rounded-md px-1 text-sm text-[#F8F2E8]/90 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                                    >
                                        {{ link.label }}
                                    </Link>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Newsletter Column -->
                <div class="w-full max-w-xs md:max-w-none md:w-auto text-center md:text-left">
                    <h3 class="mb-6 text-lg font-bold text-white">
                        Newsletter
                    </h3>
                    <p class="mb-4 text-sm text-[#F8F2E8]/90">
                        Receba as últimas notícias e eventos do colégio.
                    </p>

                    <form @submit.prevent="handleSubscribe" class="space-y-4">
                        <div class="relative w-full">
                            <label for="newsletter-email" class="sr-only">
                                Endereço de email
                            </label>
                            <input
                                id="newsletter-email"
                                v-model="newsletterEmail"
                                type="email"
                                required
                                placeholder="Endereço de email"
                                :disabled="isSubmitting"
                                class="w-full rounded-full border border-white/30 bg-white/10 px-4 py-2.5 pr-12 text-sm text-white placeholder-[#F8F2E8]/60 backdrop-blur-sm transition-all focus:border-white focus:ring-0 focus:outline-none disabled:opacity-50"
                            />
                            <button
                                type="submit"
                                :disabled="isSubmitting"
                                aria-label="Subscrever newsletter"
                                class="absolute top-1/2 right-2 flex h-8 w-8 -translate-y-1/2 items-center justify-center rounded-full bg-[#960A23] text-white transition-all duration-200 hover:bg-[#7a0820] focus:bg-[#7a0820] focus:outline-none disabled:cursor-not-allowed disabled:opacity-50"
                                tabindex="0"
                            >
                                <ArrowUp :size="16" class="rotate-90" />
                            </button>
                        </div>

                        <Transition
                            enter-active-class="transition-all duration-300 ease-out"
                            enter-from-class="opacity-0 -translate-y-2"
                            enter-to-class="opacity-100 translate-y-0"
                            leave-active-class="transition-all duration-200 ease-in"
                            leave-from-class="opacity-100 translate-y-0"
                            leave-to-class="opacity-0 -translate-y-2"
                        >
                            <p
                                v-if="subscriptionMessage"
                                class="text-sm"
                                :class="
                                    subscriptionMessage.includes('Erro')
                                        ? 'text-red-300'
                                        : 'text-[#E8BA02]'
                                "
                            >
                                {{ subscriptionMessage }}
                            </p>
                        </Transition>
                    </form>

                    <!-- Social Media Links -->
                    <div class="mt-6">
                        <p class="mb-3 text-sm font-semibold text-white">
                            Siga-nos
                        </p>
                        <div class="flex items-center justify-center md:justify-start gap-3">
                            <a
                                v-for="social in socialLinks"
                                :key="social.href"
                                :href="social.href"
                                :aria-label="social.label"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex h-10 w-10 items-center justify-center rounded-full bg-[#960A23] text-[#F8F2E8] backdrop-blur-sm transition-all duration-200 hover:bg-[#7a0820] hover:text-white focus:bg-[#7a0820] focus:text-white focus:ring-2 focus:ring-[#7a0820] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                            >
                                <component :is="social.icon" :size="18" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Close grid container -->
        <!-- Bottom bar -->
        <div class="border-t border-[#F8F2E8]/20">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div
                    class="flex flex-col items-center justify-center text-center gap-4 sm:flex-row sm:justify-between sm:items-center sm:text-left"
                >
                    <p class="text-[#F8F2E8]/80">
                        Copyright © {{ currentYear }} Colégio Dom Diogo de Sousa | Todos os direitos reservados
                    </p>

                    <nav aria-label="Links legais" class="flex items-center gap-4">
                        <Link
                            href="/termos-condicoes"
                            class="rounded-md px-1 text-[#F8F2E8]/80 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                        >
                            Termos e Condições
                        </Link>
                        <Link
                            href="/politica-privacidade"
                            class="rounded-md px-1 text-[#F8F2E8]/80 transition-colors hover:text-[#E8BA02] focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-[#1C1C1E] focus:outline-none"
                        >
                            Política de Privacidade
                        </Link>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped></style>
