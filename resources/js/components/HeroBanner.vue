<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

/**
 * HeroBanner Component
 *
 * A clean, centered hero banner with a softly darkened background photo
 * and optional breadcrumb navigation.
 *
 * @example
 * <HeroBanner
 *   title="Blog Details"
 *   :breadcrumbs="[
 *     { label: 'Início', href: '/' },
 *     { label: 'Blog Details' }
 *   ]"
 *   backgroundImage="/banner.webp"
 * />
 */

interface Props {
    /** The main heading text displayed in the banner */
    title: string;
    /** Array of breadcrumb items for navigation */
    breadcrumbs?: Array<{ label: string; href?: string }>;
    /** Path to the background image (defaults to /banner.webp) */
    backgroundImage?: string;
}

const props = withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
    backgroundImage: '/banner.webp',
});
</script>

<template>
    <section
        class="relative isolate flex h-[400px] w-full items-center justify-center overflow-hidden bg-cover bg-center bg-no-repeat sm:h-[500px]"
        :aria-label="title"
    >
        <!-- Background Image -->
        <div
            class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat"
            :style="{ backgroundImage: `url(${backgroundImage})` }"
            :aria-label="`Imagem de fundo: ${title}`"
        ></div>

        <!-- Dark Overlay for Readability -->
        <div
            class="absolute inset-0 z-[1] bg-gradient-to-b from-black/50 via-black/60 to-black/50"
            aria-hidden="true"
        ></div>

        <!-- Decorative Graphics -->
        <div class="absolute inset-0 z-[1]" aria-hidden="true">
            <!-- Top Left Circle -->
            <div
                class="absolute left-8 top-12 h-16 w-16 rounded-full border-2 border-white/10 sm:h-20 sm:w-20"
            ></div>

            <!-- Bottom Right Dotted Grid -->
            <div
                class="absolute bottom-16 right-12 grid grid-cols-4 gap-2 opacity-20"
            >
                <div
                    v-for="i in 12"
                    :key="i"
                    class="h-1 w-1 rounded-full bg-white"
                ></div>
            </div>

            <!-- Top Right Small Circle -->
            <div
                class="absolute right-24 top-20 h-8 w-8 rounded-full bg-[#E8BA02]/20 sm:h-12 sm:w-12"
            ></div>

            <!-- Bottom Left Squiggle/Circle -->
            <div
                class="absolute bottom-24 left-16 h-10 w-10 rounded-full border-2 border-dashed border-[#BD9745]/30 sm:h-14 sm:w-14"
            ></div>
        </div>

        <!-- Content Container -->
        <div class="relative z-[2] mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Centered Content -->
            <div class="flex flex-col items-center text-center text-white">
                <!-- Main Heading -->
                <h1
                    class="mb-4 font-[Montserrat] text-3xl font-bold leading-tight text-white drop-shadow-lg sm:text-4xl md:text-5xl lg:text-6xl"
                >
                    {{ title }}
                </h1>

                <!-- Breadcrumbs -->
                <nav
                    v-if="breadcrumbs.length > 0"
                    aria-label="Navegação estrutural"
                    class="mt-2"
                >
                    <ol
                        class="flex items-center gap-2 font-[Montserrat] text-sm text-white/80 sm:text-base"
                    >
                        <li v-for="(crumb, index) in breadcrumbs" :key="index">
                            <Link
                                v-if="crumb.href"
                                :href="crumb.href"
                                class="transition-colors duration-200 hover:text-[#E8BA02] focus:text-[#E8BA02] focus:outline-none focus:ring-2 focus:ring-[#E8BA02] focus:ring-offset-2 focus:ring-offset-black/50"
                            >
                                {{ crumb.label }}
                            </Link>
                            <span v-else class="text-white/90">{{
                                crumb.label
                            }}</span>
                            <span
                                v-if="index < breadcrumbs.length - 1"
                                class="ml-2 text-white/60"
                                aria-hidden="true"
                            >
                                /
                            </span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Ensure text shadow for better readability */
h1 {
    text-shadow:
        0 2px 4px rgba(0, 0, 0, 0.3),
        0 4px 8px rgba(0, 0, 0, 0.2);
}
</style>

