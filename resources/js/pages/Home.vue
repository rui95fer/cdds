<script setup lang="ts">
import AboutUs from '@/components/AboutUs.vue';
import Blog from '@/components/Blog.vue';
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';
import HeroCarousel from '@/components/HeroCarousel.vue';
import Partners from '@/components/Partners.vue';
import Quote from '@/components/Quote.vue';
</script>

<template>
    <div class="min-h-screen bg-white">
        <Header />
        <HeroCarousel />
    </div>
    <AboutUs />
    <Partners />
    <Blog />
    <Quote />
    <Footer />
</template>

<style scoped></style>
