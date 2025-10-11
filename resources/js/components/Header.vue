<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Menu, Search } from 'lucide-vue-next';
import { siFacebook, siInstagram, siX } from 'simple-icons/icons';
</script>

<template>
    <header class="bg-[#890c25] py-4 sm:py-6 font-[Montserrat]">
        <div class="mx-auto flex w-full max-w-7xl items-center px-4 sm:px-6">
            <!-- Mobile Layout: Logo + Hamburger (visible on mobile only) -->
            <div class="flex w-full items-center justify-between lg:hidden">
                <Link href="/" class="flex-shrink-0">
                    <img
                        src="/logo.png"
                        alt="Logótipo do Colégio Dom Diogo de Sousa"
                        class="h-12 w-auto sm:h-14"
                    />
                </Link>
                <div class="flex items-center gap-2">
                    <!-- Search icon (mobile) -->
                    <button
                        aria-label="Pesquisar"
                        class="flex h-10 w-10 items-center justify-center rounded-md text-white transition-colors hover:bg-white/10 hover:text-[#e9bb01] active:bg-white/20"
                    >
                        <Search :size="20" />
                    </button>
                    <!-- Hamburger icon (mobile) -->
                    <button
                        aria-label="Menu"
                        class="flex h-10 w-10 items-center justify-center rounded-md text-white transition-colors hover:bg-white/10 hover:text-[#e9bb01] active:bg-white/20"
                    >
                        <Menu :size="20" />
                    </button>
                </div>
            </div>

            <!-- Desktop Layout (hidden on mobile) -->
            <div class="hidden w-full lg:flex lg:items-center">
                <!-- Social icons: left (hidden on tablet, visible on desktop) -->
                <nav class="hidden xl:flex items-center gap-3">
                    <a
                        href="https://facebook.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook"
                        class="flex h-9 w-9 items-center justify-center rounded-md text-white transition-colors hover:bg-white/10 hover:text-[#e9bb01] [&>svg]:h-4 [&>svg]:w-4 [&>svg]:fill-current [&>svg]:transition-colors"
                        v-html="siFacebook.svg"
                    >
                    </a>
                    <a
                        href="https://x.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="X"
                        class="flex h-9 w-9 items-center justify-center rounded-md text-white transition-colors hover:bg-white/10 hover:text-[#e9bb01] [&>svg]:h-4 [&>svg]:w-4 [&>svg]:fill-current [&>svg]:transition-colors"
                        v-html="siX.svg"
                    >
                    </a>
                    <a
                        href="https://instagram.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                        class="flex h-9 w-9 items-center justify-center rounded-md text-white transition-colors hover:bg-white/10 hover:text-[#e9bb01] [&>svg]:h-4 [&>svg]:w-4 [&>svg]:fill-current [&>svg]:transition-colors"
                        v-html="siInstagram.svg"
                    >
                    </a>
                </nav>

                <!-- Logo and navigation: center -->
                <div class="flex flex-1 justify-center">
                    <div class="flex items-center gap-8 xl:gap-12">
                        <nav class="flex items-center gap-6 lg:gap-8">
                            <Link
                                href="/"
                                class="text-base font-medium text-white transition-colors hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25] rounded px-2 py-1"
                                >Início</Link
                            >
                            <Link
                                href="/courses"
                                class="text-base font-medium text-white transition-colors hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25] rounded px-2 py-1"
                                >Cursos</Link
                            >
                            <Link
                                href="/about"
                                class="text-base font-medium text-white transition-colors hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25] rounded px-2 py-1"
                                >Sobre</Link
                            >
                        </nav>
                        <Link href="/" class="flex-shrink-0">
                            <img
                                src="/logo.png"
                                alt="Logótipo do Colégio Dom Diogo de Sousa"
                                class="h-14 w-auto xl:h-16"
                            />
                        </Link>
                        <nav class="flex items-center gap-6 lg:gap-8">
                            <Link
                                href="/pages"
                                class="text-base font-medium text-white transition-colors hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25] rounded px-2 py-1"
                                >Páginas</Link
                            >
                            <Link
                                href="/blogs"
                                class="text-base font-medium text-white transition-colors hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25] rounded px-2 py-1"
                                >Blogues</Link
                            >
                            <Link
                                href="/contacts"
                                class="text-base font-medium text-white transition-colors hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25] rounded px-2 py-1"
                                >Contactos</Link
                            >
                        </nav>
                    </div>
                </div>

                <!-- Search icon: right (desktop only) -->
                <div class="flex items-center">
                    <button
                        aria-label="Pesquisar"
                        class="flex h-10 w-10 items-center justify-center rounded-md text-white transition-colors hover:bg-white/10 hover:text-[#e9bb01] focus:outline-none focus:ring-2 focus:ring-[#e9bb01] focus:ring-offset-2 focus:ring-offset-[#890c25]"
                    >
                        <Search :size="20" />
                    </button>
                </div>
            </div>
        </div>
    </header>
</template>

<style scoped>
/* Ensure font is loaded globally or via CSS import */
</style>
