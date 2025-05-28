@php
    $footerLinks = [
        ['label' => 'Home', 'href' => '/'],
        ['label' => 'About', 'href' => '/about'],
        ['label' => 'Blog', 'href' => '/blog'],
        ['label' => 'Help', 'href' => '/help'],
        ['label' => 'Contact', 'href' => '/contact'],
        ['label' => 'Privacy', 'href' => '/privacy'],
        ['label' => 'Terms & Conditions', 'href' => '/terms'],
    ];

    $socialLinks = [
        ['name' => 'Facebook', 'href' => 'https://facebook.com', 'icon' => 'facebook'],
        ['name' => 'YouTube', 'href' => 'https://youtube.com', 'icon' => 'youtube'],
    ];
@endphp

<div
    class="relative z-10 mx-auto w-full max-w-screen-lg overflow-hidden border-0 border-neutral-200 bg-transparent px-3 py-16 backdrop-blur-lg lg:px-4 xl:px-0">
    <footer>
        <div class="grid-cols-3 xl:grid xl:gap-8">
            <div class="flex flex-col gap-6">
                <a class="block max-w-fit" href="/">
                    <span class="sr-only">CPC</span>
                    <div class="max-w-fit text-xl font-bold">
                        Community Pet Care
                    </div>
                </a>
                <div class="flex items-center gap-3">
                    @foreach ($socialLinks as $link)
                        <a href="{{ $link['href'] }}" target="_blank" rel="noreferrer" class="group rounded-full p-1">
                            <span class="sr-only">{{ $link['name'] }}</span>
                            <lucide-icon name="{{ $link['icon'] }}"
                                class="size-4 text-neutral-900 transition-colors duration-75 group-hover:text-neutral-600"></lucide-icon>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="mt-16 grid grid-cols-1 items-stretch gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2">
                    <div>
                        <h3 class="text-sm font-medium text-neutral-900">Links</h3>
                        <ul role="list" class="mt-2.5 grid grid-cols-2 gap-3.5">
                            @foreach ($footerLinks as $link)
                                <li>
                                    <a class="flex w-fit items-center gap-1 text-sm text-neutral-500 transition-colors duration-75 hover:text-neutral-700"
                                        href="{{ $link['href'] }}">
                                        {{ $link['label'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-medium text-neutral-900">Contact Info</h3>
                        <ul role="list" class="mt-2.5 flex flex-col gap-3.5">
                            <li>
                                <span class="text-sm text-neutral-500">
                                    Email: contact@yourbrand.com
                                </span>
                            </li>
                            <li>
                                <span class="text-sm text-neutral-500">
                                    Phone: (123) 456-7890
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12">
            <p class="text-center text-xs text-neutral-500">
                © {{ date('Y') }} YourBrand. All rights reserved.
            </p>
        </div>
    </footer>
</div>
