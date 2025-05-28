<x-layouts.main :title="__('Contact Page')">


    @php
        // Sample data (this would typically come from a controller)
        $categories = ['Announcements', 'Site Updates', 'Dog Health', 'Dog Training', 'Feline'];
        $posts = [
            [
                'title' => 'Introducing Link Folders',
                'excerpt' =>
                    'You can now use folders to organize and manage access to your Dub links with fine-grained role-based access controls.',
                'image_url' => '/cms/link-folders.jpg',
                'image_alt' => 'Introducing Link Folders',
                'author_image' => '/author/steventey.jpg',
                'author_name' => 'Steven Tey',
                'date' => '2025-05-01',
                'url' => '/blog/introducing-folders',
            ],
            [
                'title' => 'Introducing the Dub Affiliate Program',
                'excerpt' =>
                    'Join our affiliate program and earn 30% for each referral for up to 12 months. Users who sign up with your link get 20% off their first 3 months.',
                'image_url' => '/cms/dub-affiliate-program.jpg',
                'image_alt' => 'Introducing the Dub Affiliate Program',
                'author_image' => '/author/steventey.jpg',
                'author_name' => 'Steven Tey',
                'date' => '2025-04-02',
                'url' => '/blog/dub-affiliate-program',
            ],
            [
                'title' => 'Advanced Link Management Strategies to Improve Conversions',
                'excerpt' =>
                    'Discover the Revenue Equation for Link Management and implement a proven blueprint to optimize every link for profit.',
                'image_url' => '/cms/advanced%20link%20management.jpg',
                'image_alt' => 'Advanced Link Management Strategies to Improve Conversions',
                'author_image' => '/author/arvindkesh.jpg',
                'author_name' => 'Arvind Kesh',
                'date' => '2025-03-21',
                'url' => '/blog/advanced-link-management',
            ],
            [
                'title' => 'Introducing Dub.co – the new face of Dub',
                'excerpt' => 'We\'re thrilled to announce our rebrand. Dub.sh is now Dub.co.',
                'image_url' => '/cms/thumbnail-2.jpg',
                'image_alt' => 'Introducing Dub.co – the new face of Dub',
                'author_image' => '/author/steventey.jpg',
                'author_name' => 'Steven Tey',
                'date' => '2023-08-21',
                'url' => '/blog/rebrand',
            ],
            [
                'title' => 'Dub.co Migration Assistants',
                'excerpt' =>
                    'We\'ve added migration assistants for Bitly, Rebrandly, and Short.io to help you migrate your links to Dub.co in a few clicks.',
                'image_url' => '/cms/migration-assistants-2.png',
                'image_alt' => 'Dub.co Migration Assistants',
                'author_image' => '/author/steventey.jpg',
                'author_name' => 'Steven Tey',
                'date' => '2023-08-04',
                'url' => '/blog/migration-assistants',
            ],
            [
                'title' => 'Introducing the Dub Help Center',
                'excerpt' =>
                    'Today, we\'re excited to launch the Dub Help Center – a one-stop shop for all your Dub-related questions.',
                'image_url' => '/cms/help-center-2.png',
                'image_alt' => 'Introducing the Dub Help Center',
                'author_image' => '/author/steventey.jpg',
                'author_name' => 'Steven Tey',
                'date' => '2023-07-26',
                'url' => '/blog/help-center',
            ],
        ];
    @endphp

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
                    Blog</h1>
                <p class="mt-6 text-lg text-neutral-500 sm:text-xl">Latest news and updates from Community Pet Care</p>

                <!-- Categories -->
                <nav class="mt-10 flex w-fit flex-wrap items-center gap-x-2 gap-y-4">
                    @foreach ($categories as $category)
                        <span data-slot="badge"
                            class="inline-flex items-center justify-center rounded-md border px-2 py-1 text-sm w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive transition-[color,box-shadow] overflow-hidden {{ $category === 'Announcements' ? 'border-transparent bg-primary text-primary-foreground [a&]:hover:bg-primary/90' : 'text-foreground [a&]:hover:bg-accent [a&]:hover:text-accent-foreground' }}">
                            {{ $category }}
                        </span>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>

    <!-- Blog Posts Grid -->
    <div class="border-grid-border relative overflow-clip [.grid-section_~_&]:border-t-0">
        <div class="border-grid-border relative overflow-clip border-y px-4 [.grid-section_~_&]:border-t-0">
            <div class="max-grid-width border-grid-border relative z-0 mx-auto border-x">
                <div
                    class="[&>*]:border-grid-border grid grid-cols-1 md:grid-cols-3 max-md:[&>*]:border-t md:[&>*:not(:nth-child(3n))]:border-r md:[&>*:nth-child(n+4)]:border-t">
                    @foreach ($posts as $post)
                        <a class="flex flex-col transition-all hover:bg-neutral-50" href="{{ $post['url'] }}">
                            <img alt="{{ $post['image_alt'] }}" loading="lazy" width="1200" height="630"
                                decoding="async" class="blur-0 aspect-[1200/630] object-cover"
                                src="{{ $post['image_url'] }}" style="">
                            <div class="flex flex-1 flex-col justify-between p-6">
                                <div>
                                    <h2 class="font-display line-clamp-2 text-lg font-bold text-neutral-900">
                                        {{ $post['title'] }}</h2>
                                    <p class="mt-2 line-clamp-2 text-sm text-neutral-500">{{ $post['excerpt'] }}</p>
                                </div>
                                <div class="mt-4 flex items-center space-x-2">
                                    <div class="flex items-center -space-x-2">
                                        <img alt="{{ $post['author_name'] }}" loading="lazy" width="32"
                                            height="32" decoding="async"
                                            class="blur-0 rounded-full transition-all group-hover:brightness-90"
                                            src="{{ $post['author_image'] }}" style="">
                                    </div>
                                    <time datetime="{{ $post['date'] }}"
                                        class="text-sm text-neutral-500">{{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}</time>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="hidden size-full md:block"></div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
