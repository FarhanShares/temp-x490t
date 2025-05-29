<x-layouts.main :title="__('Blog')">
    <div class="border-grid-border relative overflow-clip px-4 [.grid-section_~_&]:border-t-0">
        <div class="max-grid-width border-grid-border relative z-0 mx-auto px-4 pt-16 pb-6 sm:px-12 sm:pb-20">
            <!-- Background Grid SVGs -->
            <div
                class="border-grid-border pointer-events-none absolute inset-0 border-x [mask-image:linear-gradient(transparent,black)]">
            </div>
            <div
                class="pointer-events-none absolute inset-y-0 left-1/2 w-[1800px] -translate-x-1/2 [mask-image:linear-gradient(transparent,black)] [mask-composite:intersect] opacity-5">
                <div class="absolute inset-x-[360px] inset-y-0">
                    <svg class="text-grid-border/60 pointer-events-none absolute inset-[unset] right-full bottom-0 h-[600px] w-[360px] [mask-image:linear-gradient(90deg,transparent,black)]"
                        width="100%" height="100%">
                        <defs>
                            <pattern id="grid-r1q" x="0" y="0" width="60" height="60"
                                patternUnits="userSpaceOnUse">
                                <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                                </path>
                            </pattern>
                        </defs>
                        <rect fill="url(#grid-r1q)" width="100%" height="100%"></rect>
                    </svg>
                    <svg class="text-grid-border/60 pointer-events-none absolute inset-[unset] bottom-0 left-full h-[600px] w-[360px] [mask-image:linear-gradient(270deg,transparent,black)]"
                        width="100%" height="100%">
                        <defs>
                            <pattern id="grid-r1r" x="-1" y="0" width="60" height="60"
                                patternUnits="userSpaceOnUse">
                                <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                                </path>
                            </pattern>
                        </defs>
                        <rect fill="url(#grid-r1r)" width="100%" height="100%"></rect>
                    </svg>
                </div>
            </div>
            <div
                class="pointer-events-none absolute inset-x-px inset-y-0 overflow-hidden [mask-image:linear-gradient(transparent,black)] opacity-5">
                <svg class="w-grid-width text-grid-border/60 pointer-events-none absolute inset-[unset] bottom-0 left-1/2 h-[600px] -translate-x-1/2"
                    width="100%" height="100%">
                    <defs>
                        <pattern id="grid-r1s" x="-1" y="0" width="60" height="60"
                            patternUnits="userSpaceOnUse">
                            <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                            </path>
                        </pattern>
                    </defs>
                    <rect fill="url(#grid-r1s)" width="100%" height="100%"></rect>
                </svg>
            </div>

            <!-- Blog Header -->
            <div class="relative">
                <h1
                    class="font-display mt-5 text-left text-4xl font-medium text-neutral-900 sm:text-5xl sm:leading-[1.15]">
                    Blog
                </h1>
                <p class="mt-6 text-lg text-neutral-500 sm:text-xl">Latest news and updates from Community Pet Care</p>

                <!-- Tags Navigation -->
                <nav class="mt-10 flex w-fit flex-wrap items-center gap-x-2 gap-y-4">
                    <a href="{{ route('blog.index') }}"
                        class="inline-flex items-center justify-center rounded-md border px-2 py-1 text-sm w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden {{ !request()->query('tag') ? 'border-transparent bg-primary text-primary-foreground hover:bg-primary/90' : 'text-foreground hover:bg-accent hover:text-accent-foreground' }}">
                        All
                    </a>
                    @foreach ($tags as $tag)
                        <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-1 text-sm w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden {{ request()->query('tag') === $tag->slug ? 'border-transparent bg-primary text-primary-foreground hover:bg-primary/90' : 'text-foreground hover:bg-accent hover:text-accent-foreground' }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="border-grid-border relative overflow-clip [.grid-section_~_&]:border-t-0">
        <div class="border-grid-border relative overflow-clip border-y px-4 [.grid-section_~_&]:border-t-0">
            <div class="max-grid-width border-grid-border relative z-0 mx-auto border-x">
                @if ($contents->isEmpty())
                    <div class="p-6 text-center text-neutral-500">
                        No posts available. Check back later!
                    </div>
                @else
                    <div
                        class="[&>*]:border-grid-border grid grid-cols-1 md:grid-cols-3 max-md:[&>*]:border-t md:[&>*:not(:nth-child(3n))]:border-r md:[&>*:nth-child(n+4)]:border-t">
                        @foreach ($contents as $content)
                            @include('partials.blog.blog-card', ['content' => $content])
                        @endforeach
                        <div class="hidden size-full md:block"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-layouts.main>
