<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Menu } from 'lucide-vue-next';
import { onMounted, onUnmounted, ref } from 'vue';

// Reactive state
const isScrolled = ref(false);

// Navigation data
const navigationLinks = [
    { href: '/', label: 'Início' },
    { href: '/courses', label: 'Cursos' },
    { href: '/about', label: 'Sobre' },
];

const secondaryNavigationLinks = [
    { href: '/pages', label: 'Páginas' },
    { href: '/blogs', label: 'Blogues' },
    { href: '/contacts', label: 'Contactos' },
];

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
    // Check initial scroll position
    handleScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
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
            <Link href="/" class="flex-shrink-0">
                <img
                    :src="isScrolled ? '/logo.webp' : '/logo-monocromatic.webp'"
                    alt="Logótipo do Colégio Dom Diogo de Sousa"
                    :class="[
                        'w-auto transition-all duration-300',
                        isScrolled
                            ? 'h-10 sm:h-12 lg:h-14'
                            : 'h-12 sm:h-16 lg:h-16',
                    ]"
                />
            </Link>

            <!-- Desktop Navigation: Right -->
            <nav
                class="hidden items-center gap-6 lg:flex xl:gap-8"
                aria-label="Navegação principal"
            >
                <Link
                    v-for="link in [
                        ...navigationLinks,
                        ...secondaryNavigationLinks,
                    ]"
                    :key="link.href"
                    :href="link.href"
                    :class="getNavLinkClasses()"
                >
                    {{ link.label }}
                </Link>
            </nav>

            <!-- Menu toggle (mobile only) -->
            <button
                aria-label="Abrir menu"
                :class="getButtonClasses()"
                class="lg:hidden"
            >
                <Menu :size="18" />
            </button>
        </div>
    </header>
</template>

<style scoped>
/* Ensure font is loaded globally or via CSS import */
</style>
