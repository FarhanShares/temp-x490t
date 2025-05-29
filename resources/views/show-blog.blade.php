<x-layouts.main :title="$content->meta_title ?? $content->title">
    <div class="relative z-10 bg-white">
        <div class="grid-section border-grid-border relative overflow-clip border-b px-4 [.grid-section_~_&]:border-t-0">
            <div class="max-grid-width border-grid-border relative z-0 mx-auto px-4 pt-16 pb-12 sm:px-12">
                <!-- Grid background SVGs -->
                <div
                    class="border-grid-border pointer-events-none absolute inset-0 border-x [mask-image:linear-gradient(transparent,black)]">
                </div>
                <div
                    class="pointer-events-none absolute inset-y-0 left-1/2 w-[1800px] -translate-x-1/2 [mask-image:linear-gradient(transparent,black)] [mask-composite:intersect] opacity-20">
                    <div class="absolute inset-x-[360px] inset-y-0">
                        <svg class="text-grid-border/60 pointer-events-none absolute inset-[unset] right-full bottom-0 h-[600px] w-[360px] [mask-image:linear-gradient(90deg,transparent,black)]"
                            width="100%" height="100%">
                            <defs>
                                <pattern id="grid-placeholder1" x="0" y="0" width="60" height="60"
                                    patternUnits="userSpaceOnUse">
                                    <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor"
                                        stroke-width="2"></path>
                                </pattern>
                            </defs>
                            <rect fill="url(#grid-placeholder1)" width="100%" height="100%"></rect>
                        </svg>
                        <svg class="text-grid-border/60 pointer-events-none absolute inset-[unset] bottom-0 left-full h-[600px] w-[360px] [mask-image:linear-gradient(270deg,transparent,black)]"
                            width="100%" height="100%">
                            <defs>
                                <pattern id="grid-placeholder2" x="-1" y="0" width="60" height="60"
                                    patternUnits="userSpaceOnUse">
                                    <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor"
                                        stroke-width="2"></path>
                                </pattern>
                            </defs>
                            <rect fill="url(#grid-placeholder2)" width="100%" height="100%"></rect>
                        </svg>
                    </div>
                </div>
                <div
                    class="pointer-events-none absolute inset-x-px inset-y-0 overflow-hidden [mask-image:linear-gradient(transparent,black)] opacity-20">
                    <svg class="w-grid-width text-grid-border/60 pointer-events-none absolute inset-[unset] bottom-0 left-1/2 h-[600px] -translate-x-1/2"
                        width="100%" height="100%">
                        <defs>
                            <pattern id="grid-placeholder3" x="-1" y="0" width="60" height="60"
                                patternUnits="userSpaceOnUse">
                                <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                                </path>
                            </pattern>
                        </defs>
                        <rect fill="url(#grid-placeholder3)" width="100%" height="100%"></rect>
                    </svg>
                </div>
                <!-- Content header -->
                <div class="relative max-w-screen-sm">
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                        @if ($content->primaryTag)
                            <a class="rounded-lg border border-neutral-200 bg-white px-4 py-1.5 text-sm font-medium text-neutral-600 shadow-[inset_10px_-50px_94px_0_rgb(199,199,199,0.1)] backdrop-blur transition-all hover:border-neutral-300 hover:bg-white/50"
                                href="{{ route('blog.index', ['tag' => $content->primaryTag->slug]) }}">{{ $content->primaryTag->name }}</a>
                        @endif
                        @foreach ($content->tags as $tag)
                            <a class="rounded-lg border border-neutral-200 bg-white px-4 py-1.5 text-sm font-medium text-neutral-600 shadow-[inset_10px_-50px_94px_0_rgb(199,199,199,0.1)] backdrop-blur transition-all hover:border-neutral-300 hover:bg-white/50"
                                href="{{ route('blog.index', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                        @endforeach
                        <time datetime="{{ $content->created_at }}"
                            class="text-sm text-neutral-500 transition-colors hover:text-neutral-800">{{ $content->created_at->format('F j, Y') }}</time>
                    </div>
                    <h1
                        class="font-display mt-5 text-left text-4xl font-medium text-neutral-900 sm:text-4xl sm:leading-[1.25]">
                        {{ $content->meta_title ?? $content->title }}</h1>

                </div>
            </div>
        </div>
        <div
            class="grid-section border-grid-border relative overflow-clip border-y px-4 [.grid-section_~_&]:border-t-0">
            <div class="max-grid-width border-grid-border relative z-auto mx-auto grid grid-cols-3 border-x">
                <div class="relative col-span-3 md:col-span-2">
                    <div class="bg-white">
                        <article
                            class="prose prose-neutral prose-headings:relative prose-headings:scroll-mt-20 prose-headings:font-display prose-a:font-medium prose-a:text-neutral-500 prose-a:underline-offset-4 hover:prose-a:text-black prose-thead:text-lg max-w-none px-5 py-10 transition-all sm:px-12">
                            @if ($content->cover_image)
                                <figure class="not-prose flex flex-col items-center justify-center space-y-3 mb-6">
                                    <img alt="{{ $content->meta_title ?? $content->title }}" loading="lazy"
                                        width="623" height="328" decoding="async"
                                        class="blur-0 object-cover w-full max-w-2xl"
                                        src="{{ asset('storage/' . $content->cover_image) }}">
                                </figure>
                            @endif
                            {!! $content->content !!}
                        </article>
                    </div>
                    <div class="border-grid-border border-t p-10 backdrop-blur-lg">
                        <a href="{{ route('blog.index') }}"
                            class="inline-block text-sm text-primary hover:underline">Back to Blog</a>
                    </div>
                </div>
                <div class="border-grid-border hidden w-full border-l bg-neutral-50 p-10 md:block">
                    <div class="flex flex-col gap-y-4 pb-5">
                        <p class="text-sm text-neutral-500">Written by</p>
                        <a class="group flex items-center space-x-3" href="/authors/{{ $content->author->id }}">
                            <img alt="{{ $content->author->name }}" loading="lazy" width="36" height="36"
                                decoding="async"
                                class="blur-0 object-cover rounded-full transition-all group-hover:brightness-90"
                                src="{{ $content->author->profile_picture ? asset('storage/' . $content->author->profile_picture) : '/author/placeholder.jpg' }}">
                            <div class="flex flex-col">
                                <p class="text-sm font-medium whitespace-nowrap text-neutral-700">
                                    {{ $content->author->name }}</p>
                                <p class="text-sm text-neutral-500">Contributor</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
