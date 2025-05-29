<div>
    <a class="transition-all hover:bg-neutral-50 min-w-0" href="{{ route('blog.show', $content->slug) }}">
        <div>
            <!-- Image and Tags Container -->
            <div class="relative w-full">
                <!-- Image Section -->
                @if ($content->cover_image)
                    <img alt="{{ $content->meta_title ?? $content->title }}" loading="lazy" width="1200" height="630"
                        decoding="async" class="w-full aspect-[1200/630] object-cover"
                        src="{{ asset('storage/' . $content->cover_image) }}">
                @else
                    <img alt="{{ $content->meta_title ?? $content->title }}" loading="lazy" width="1200"
                        height="630" decoding="async" class="w-full aspect-[1200/630] object-cover"
                        src="/cms/placeholder.jpg">
                @endif

                <!-- Tags Section -->
                <div class="absolute top-4 right-4 flex flex-wrap gap-2 z-10">
                    @if ($content->primaryTag)
                        <a href="{{ route('blog.index', ['tag' => $content->primaryTag->slug]) }}"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-1 text-xs text-neutral-600 bg-white/80 backdrop-blur-sm hover:bg-accent hover:text-accent-foreground">
                            {{ $content->primaryTag->name }}
                        </a>
                    @endif
                    @foreach ($content->tags->take(2) as $tag)
                        <a href="{{ route('blog.index', ['tag' => $tag->slug]) }}"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-1 text-xs text-neutral-600 bg-white/80 backdrop-blur-sm hover:bg-accent hover:text-accent-foreground">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Details Section -->
            <div class="p-6 w-full">
                <!-- Title and Description -->
                <h2 class="font-display line-clamp-2 text-lg font-bold text-neutral-900">
                    {{ $content->meta_title ?? $content->title }}
                </h2>
                <p class="mt-2 line-clamp-2 text-sm text-neutral-500">
                    {{ $content->meta_description ?? Str::limit(strip_tags($content->content), 100) }}
                </p>

                <!-- Author and Date -->
                <div class="mt-4 flex items-center space-x-2">
                    <div class="flex items-center -space-x-2">
                        <img alt="{{ $content->author->name }}" loading="lazy" width="32" height="32"
                            decoding="async" class="object-cover rounded-full transition-all group-hover:brightness-90"
                            src="{{ $content->author->profile_picture ? asset('storage/' . $content->author->profile_picture) : '/author/placeholder.jpg' }}">
                    </div>
                    <time datetime="{{ $content->created_at }}" class="text-sm text-neutral-500">
                        {{ $content->created_at->format('F j, Y') }}
                    </time>
                </div>
            </div>
        </div>
    </a>
</div>
