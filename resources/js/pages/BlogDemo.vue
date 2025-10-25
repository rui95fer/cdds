<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';
import HeroBanner from '@/components/HeroBanner.vue';
</script>

<template>
    <Header />
    <HeroBanner
        title="Blog Details"
        :breadcrumbs="[
            { label: 'Início', href: '/' },
            { label: 'Blog Details' },
        ]"
    />
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="prose mx-auto max-w-3xl">
            <p class="font-[Montserrat] text-lg text-gray-600">
                Esta é uma página de demonstração do componente HeroBanner.
            </p>
        </div>
    </div>
    <Footer />
</template>

<style scoped></style>

