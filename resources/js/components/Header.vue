<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Menu, X } from 'lucide-vue-next';
import { onMounted, onUnmounted, ref } from 'vue';

// Reactive state
const isScrolled = ref(false);
const isMobileMenuOpen = ref(false);

// Navigation data
const navigationLinks = [
    { href: '/', label: 'Colégio' },
    { href: '/documentos-orientadores', label: 'Documentos' },
    { href: '/oferta-educativa', label: 'Oferta Educativa' },
    { href: '/inscricoes', label: 'Inscrições' },
    { href: '/noticias', label: 'Notícias' },
    { href: '/contactos', label: 'Contactos' },
];

// Mobile menu functions
const openMobileMenu = () => {
    isMobileMenuOpen.value = true;
    document.body.style.overflow = 'hidden'; // Prevent body scroll
};

const closeMobileMenu = () => {
    isMobileMenuOpen.value = false;
    document.body.style.overflow = ''; // Restore body scroll
};

const toggleMobileMenu = () => {
    if (isMobileMenuOpen.value) {
        closeMobileMenu();
    } else {
        openMobileMenu();
    }
};

// Mobile menu link click handler
const handleMobileLinkClick = () => {
    closeMobileMenu();
};

// Handle escape key to close mobile menu
const handleKeydown = (event: KeyboardEvent) => {
    if (event.key === 'Escape' && isMobileMenuOpen.value) {
        closeMobileMenu();
    }
};

// Dynamic CSS classes based on scroll state
const getButtonClasses = () => {
    const baseClasses =
        'flex h-10 w-10 items-center justify-center rounded-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2';
    if (isScrolled.value) {
        return `${baseClasses} text-gray-700 hover:bg-gray-100 hover:text-[#960A23] focus:ring-[#960A23] focus:ring-offset-white`;
    }
    return `${baseClasses} text-white hover:bg-white/10 hover:text-[#E8BA02] focus:ring-[#E8BA02] focus:ring-offset-transparent`;
};

const getNavLinkClasses = () => {
    const baseClasses =
        'text-base font-medium transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-md px-4 py-3';
    if (isScrolled.value) {
        return `${baseClasses} text-gray-700 hover:text-[#960A23] focus:ring-[#960A23] focus:ring-offset-white`;
    }
    return `${baseClasses} text-white hover:text-[#E8BA02] focus:ring-[#E8BA02] focus:ring-offset-transparent`;
};

// Scroll detection
const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
    document.addEventListener('keydown', handleKeydown);
    // Check initial scroll position
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
    document.removeEventListener('keydown', handleKeydown);
    document.body.style.overflow = ''; // Ensure body scroll is restored
});

const currentYear = new Date().getFullYear();
</script>

<template>
    <header
        :class="[
            'fixed top-0 right-0 left-0 py-3 font-[Montserrat] transition-all duration-300 sm:py-4',
            isScrolled
                ? 'z-[100] border-b border-gray-200/50 bg-white/95 shadow-md backdrop-blur-md'
                : 'z-50 bg-transparent',
        ]"
    >
        <div
            class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8"
        >
            <!-- Logo: Left -->
            <Link href="/" class="flex-shrink-0" @click="closeMobileMenu">
                <img
                    :src="isScrolled ? '/logo.webp' : '/logo-monocromatic.webp'"
                    alt="Logótipo do Colégio Dom Diogo de Sousa"
                    :class="[
                        'w-auto transition-all duration-300',
                        isScrolled
                            ? 'h-12 sm:h-14 lg:h-16'
                            : 'h-12 sm:h-14 lg:h-16',
                    ]"
                />
            </Link>

            <!-- Desktop Navigation: Right -->
            <nav
                class="hidden items-center gap-4 lg:flex xl:gap-6"
                aria-label="Navegação principal"
            >
                <Link
                    v-for="link in navigationLinks"
                    :key="link.href"
                    :href="link.href"
                    :class="getNavLinkClasses()"
                >
                    {{ link.label }}
                </Link>
            </nav>

            <!-- Menu toggle (mobile only) -->
            <button
                @click="toggleMobileMenu"
                :aria-label="isMobileMenuOpen ? 'Fechar menu' : 'Abrir menu'"
                :aria-expanded="isMobileMenuOpen"
                :class="getButtonClasses()"
                class="lg:hidden relative z-[110]"
            >
                <Transition
                    enter-active-class="transition-all duration-200 ease-out"
                    enter-from-class="opacity-0 rotate-180 scale-50"
                    enter-to-class="opacity-100 rotate-0 scale-100"
                    leave-active-class="transition-all duration-200 ease-in"
                    leave-from-class="opacity-100 rotate-0 scale-100"
                    leave-to-class="opacity-0 rotate-180 scale-50"
                >
                    <Menu v-if="!isMobileMenuOpen" :size="18" />
                    <X v-else :size="18" />
                </Transition>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <Teleport to="body">
            <Transition
                enter-active-class="transition-opacity duration-300 ease-out"
                enter-from-class="opacity-0"
                enter-to-class="opacity-100"
                leave-active-class="transition-opacity duration-200 ease-in"
                leave-from-class="opacity-100"
                leave-to-class="opacity-0"
            >
                <div
                    v-if="isMobileMenuOpen"
                    class="fixed inset-0 z-[105] bg-black/20 backdrop-blur-sm lg:hidden"
                    @click="closeMobileMenu"
                    aria-hidden="true"
                ></div>
            </Transition>

            <!-- Mobile Menu Panel -->
            <Transition
                enter-active-class="transition-transform duration-300 ease-out"
                enter-from-class="translate-x-full"
                enter-to-class="translate-x-0"
                leave-active-class="transition-transform duration-200 ease-in"
                leave-from-class="translate-x-0"
                leave-to-class="translate-x-full"
            >
                <div
                    v-if="isMobileMenuOpen"
                    class="fixed top-0 right-0 bottom-0 z-[106] w-80 max-w-[85vw] bg-white shadow-2xl lg:hidden"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="mobile-menu-title"
                >
                    <!-- Mobile Menu Header -->
                    <div class="flex items-center justify-between p-6 border-b border-gray-100">
                        <Link
                            href="/"
                            class="flex-shrink-0"
                            @click="closeMobileMenu"
                            aria-label="Voltar para a página inicial"
                        >
                            <img
                                src="/logo.webp"
                                alt="Logótipo do Colégio Dom Diogo de Sousa"
                                class="h-14 w-auto"
                            />
                        </Link>
                        <button
                            @click="closeMobileMenu"
                            class="p-2 text-gray-500 hover:text-[#960A23] hover:bg-gray-50 rounded-lg transition-colors"
                            aria-label="Fechar menu"
                        >
                            <X :size="20" />
                        </button>
                    </div>

                    <!-- Mobile Menu Content -->
                    <nav class="flex flex-col p-6" aria-label="Navegação mobile">
                        <!-- Main Navigation -->
                        <div class="space-y-2 mb-8">
                            <Link
                                v-for="link in navigationLinks"
                                :key="link.href"
                                :href="link.href"
                                @click="handleMobileLinkClick"
                                class="flex items-center px-4 py-3 text-base font-medium text-gray-700 hover:text-[#960A23] hover:bg-[#960A23]/5 rounded-lg transition-all duration-200 group"
                            >
                                <span class="flex-1">{{ link.label }}</span>
                                <div class="w-1 h-6 bg-[#960A23] opacity-0 group-hover:opacity-100 transition-opacity rounded"></div>
                            </Link>
                        </div>
                    </nav>

                    <!-- Mobile Menu Footer -->
                    <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-gray-100 bg-gray-50/30">
                        <div class="text-center space-y-3">
                            <p class="text-sm font-medium text-gray-500">
                                © {{ currentYear }} Colégio Dom Diogo de Sousa
                            </p>
                        </div>
                    </div>
                </div>
            </Transition>
        </Teleport>
    </header>
</template>

<style scoped>
/* Ensure font is loaded globally or via CSS import */
</style>
