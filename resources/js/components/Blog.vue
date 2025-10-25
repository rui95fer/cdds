<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Calendar, User } from 'lucide-vue-next';

interface Article {
    id: number;
    title: string;
    excerpt: string;
    image: string;
    date: string;
    author: string;
    slug: string;
}

// Sample articles data - this would typically come from props or API
const articles: Article[] = [
    {
        id: 1,
        title: 'Excelência Académica: Os Nossos Alunos Brilham',
        excerpt:
            'Conheça as histórias inspiradoras dos nossos alunos que alcançaram resultados excecionais este ano letivo.',
        image: '/slide1.webp',
        date: '2025-10-15',
        author: 'Catarina Vilela',
        slug: 'excelencia-academica',
    },
    {
        id: 2,
        title: 'Projeto Educativo Inovador em Ciências',
        excerpt:
            'Descubra como os nossos alunos estão a explorar o mundo da ciência através de metodologias ativas.',
        image: '/slide2.webp',
        date: '2025-10-10',
        author: 'Débora Fernandes',
        slug: 'projeto-educativo-ciencias',
    },
    {
        id: 3,
        title: 'Comunidade CDDS: 75 Anos de História',
        excerpt:
            'Celebramos três quartos de século de dedicação à educação de excelência em Portugal.',
        image: '/slide3.webp',
        date: '2025-10-05',
        author: 'Mónica Silva',
        slug: 'comunidade-75-anos',
    },
];

const formatDate = (dateString: string): string => {
    const date = new Date(dateString);
    return date.toLocaleDateString('pt-PT', {
        day: 'numeric',
        month: 'short',
        year: 'numeric',
    });
};
</script>

<template>
    <section class="bg-white py-16" aria-labelledby="blog-heading">
        <div class="container mx-auto max-w-7xl px-4">
            <!-- Header -->
            <div class="mb-12 md:mb-16">
                <!-- Section Label with decorative line -->
                <div class="mb-6 flex items-center gap-3">
                    <div class="bg-burgundy h-0.5 w-8"></div>
                    <span
                        class="text-burgundy text-sm font-semibold tracking-wide uppercase"
                        >Notícias</span
                    >
                </div>

                <h2
                    id="blog-heading"
                    class="text-navy text-4xl leading-tight font-bold lg:text-5xl"
                >
                    Todas as notícias, eventos e novidades
                </h2>
            </div>

            <!-- Articles Grid -->
            <div
                class="grid grid-cols-1 gap-6 md:grid-cols-2 md:gap-8 lg:grid-cols-3"
            >
                <article
                    v-for="article in articles"
                    :key="article.id"
                    class="flex flex-col overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
                >
                    <!-- Article Image -->
                    <div class="relative aspect-[4/3] overflow-hidden">
                        <img
                            :src="article.image"
                            :alt="`Imagem do artigo: ${article.title}`"
                            class="h-full w-full object-cover transition-transform duration-500 hover:scale-105"
                            loading="lazy"
                        />
                    </div>

                    <!-- Article Content -->
                    <div class="flex flex-grow flex-col p-6">
                        <!-- Meta Information -->
                        <div
                            class="mb-4 flex flex-wrap items-center gap-4 text-sm text-gray-600"
                        >
                            <time
                                :datetime="article.date"
                                class="flex items-center gap-1.5"
                            >
                                <Calendar
                                    :size="16"
                                    aria-hidden="true"
                                    class="text-gray-500"
                                />
                                <span>{{ formatDate(article.date) }}</span>
                            </time>
                            <div class="flex items-center gap-1.5">
                                <User
                                    :size="16"
                                    aria-hidden="true"
                                    class="text-gray-500"
                                />
                                <span>{{ article.author }}</span>
                            </div>
                        </div>

                        <!-- Article Title -->
                        <h3
                            class="text-dark mb-3 line-clamp-2 text-xl leading-snug font-bold"
                        >
                            {{ article.title }}
                        </h3>

                        <!-- Article Excerpt -->
                        <p class="mb-6 line-clamp-3 flex-grow text-gray-600">
                            {{ article.excerpt }}
                        </p>

                        <!-- Read More Button -->
                        <Link
                            :href="`/blog/${article.slug}`"
                            class="border-burgundy text-burgundy hover:bg-burgundy inline-flex items-center justify-center self-start rounded-full border-2 bg-white px-6 py-2.5 text-sm font-semibold transition-all duration-300 hover:text-white focus:ring-2 focus:ring-[#960A23] focus:ring-offset-2 focus:outline-none"
                            :aria-label="`Ler mais sobre ${article.title}`"
                        >
                            Ler Mais
                        </Link>
                    </div>
                </article>
            </div>

            <!-- View All Articles Link -->
            <div class="mt-16 text-center">
                <Link
                    href="/blog"
                    class="bg-burgundy hover:bg-burgundy-dark inline-flex items-center justify-center rounded-full px-8 py-3 font-semibold text-white transition-all duration-300 focus:ring-2 focus:ring-[#960A23] focus:ring-offset-2 focus:outline-none"
                >
                    Ver Mais
                </Link>
            </div>
        </div>
    </section>
</template>

<style scoped>
.text-burgundy {
    color: #960a23;
}

.bg-burgundy {
    background-color: #960a23;
}

.text-navy {
    color: #0b2c70;
}

.text-dark {
    color: #1c1c1e;
}

/* Ensure buttons using border-burgundy actually get the correct border color */
.border-burgundy {
    border-color: #960a23;
}

/* Hover helpers to mirror Tailwind-like utilities used in templates */
.hover\:bg-burgundy:hover {
    background-color: #960a23;
}

/* Ensure hover:text-white works when used alongside these helpers */
.hover\:text-white:hover {
    color: #ffffff;
}

.hover\:bg-burgundy-dark:hover {
    background-color: #7a0820;
}

/* Utility for line clamping */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
