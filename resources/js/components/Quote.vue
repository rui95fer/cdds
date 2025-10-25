<script setup lang="ts">
interface QuoteProps {
    quote?: string;
    authorName?: string;
    authorRole?: string;
    authorImage?: string;
}

withDefaults(defineProps<QuoteProps>(), {
    quote: 'Importa que amemos os jovens, mas importa sobretudo que eles se sintam amados.',
    authorName: 'Monsenhor Elísio Araújo',
    authorRole: 'Fundador do Colégio Dom Diogo de Sousa',
    authorImage: '/monsenhor-elisio-araujo.webp',
});
</script>

<template>
    <section
        class="font-[Montserrat] relative w-full overflow-hidden bg-white px-4 py-20 transition-colors duration-300"
        aria-label="Citação inspiradora"
    >
        <div class="relative z-10 mx-auto max-w-7xl">
            <div class="grid items-center gap-8 lg:grid-cols-12 lg:gap-12">
                <!-- Left: Portrait Image -->
                <div
                    class="flex justify-center lg:col-span-3 lg:justify-start lg:pl-12"
                >
                    <div class="relative">
                        <!-- Portrait Circle -->
                        <div
                            class="h-40 w-40 overflow-hidden rounded-full border-4 border-[#F8F2E8]/20 shadow-2xl grayscale md:h-48 md:w-48 lg:h-56 lg:w-56"
                        >
                            <img
                                :src="authorImage"
                                :alt="`Fotografia de ${authorName}`"
                                class="h-full w-full object-cover"
                                loading="lazy"
                                decoding="async"
                            />
                        </div>
                    </div>
                </div>

                <!-- Right: Quote and Credit -->
                <div class="space-y-4 text-center lg:col-span-9 lg:text-left">
                    <!-- Quote -->
                    <blockquote>
                        <p
                            class="text-xl md:text-2xl lg:text-3xl leading-relaxed font-light italic text-dark text-center lg:text-left"
                            style="font-family: Georgia, serif;"
                        >
                            "{{ quote }}"
                        </p>
                    </blockquote>

                    <!-- Divider -->
                    <hr class="my-1 mx-auto max-w-xs border-t border-[#F8F2E8]/20 lg:mx-0" />

                    <!-- Author Credit -->
                    <footer
                        class="group flex flex-col items-center gap-3 rounded transition lg:flex-row lg:items-center lg:justify-start"
                        aria-label="Autor da citação"
                    >
                        <cite class="flex flex-col not-italic text-center lg:text-left">
                            <span
                                class="text-base font-semibold text-gray-900"
                            >
                                {{ authorName }}
                            </span>
                            <span class="mt-0.5 text-sm text-gray-600">
                                {{ authorRole }}
                            </span>
                        </cite>
                    </footer>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Only keep small, necessary CSS that Tailwind can't express easily */
blockquote p {
    font-feature-settings:
        'liga' 1,
        'calt' 1;
}

.text-dark {
    color: #1c1c1e;
}
</style>
