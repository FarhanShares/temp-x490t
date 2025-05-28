@php
    $navLinks = [
        ['href' => '/about', 'label' => 'About'],
        ['href' => '/blog', 'label' => 'Blog'],
        ['href' => '/help', 'label' => 'Help'],
        ['href' => '/contact', 'label' => 'Contact'],
    ];
    $currentPath = request()->path();
@endphp

<div class="sticky inset-x-0 top-0 z-[99999] w-full bg-white/95 backdrop-blur-sm transition-all text-black">
    <div class="absolute inset-0 block border border-gray-100 transition-all"></div>
    <div class="relative mx-auto w-full max-w-screen-lg px-3 lg:px-4 xl:px-0">
        <div class="mx-2 flex h-14 items-center justify-between">
            <div class="grow basis-0 text-2xl">
                <a href="/">Community Pet Care</a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:block">
                <ul class="flex space-x-4">
                    @foreach ($navLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}"
                                class="rounded-md px-2 py-2 text-sm font-medium hover:bg-gray-100 hover:text-gray-900 focus:bg-gray-100 focus:text-gray-900 {{ $currentPath === ltrim($link['href'], '/') ? 'bg-neutral-700 text-gray-200' : '' }}">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <!-- Mobile Navigation Toggle -->
            <button id="mobile-menu-toggle" class="lg:hidden p-2" aria-label="Open menu" onclick="toggleMobileMenu()">
                <svg class="h-6 w-6" data-lucide="menu"></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-menu"
        class="hidden fixed inset-0 z-[999999] h-screen w-full overflow-y-auto bg-white px-5 py-16 lg:hidden">
        <div class="absolute top-2.5 right-5">
            <button class="p-2" aria-label="Close menu" onclick="toggleMobileMenu()">
                <svg class="size-6 rounded-full border border-gray-300" data-lucide="x"></svg>
            </button>
        </div>
        <ul class="grid divide-y divide-gray-200">
            @foreach ($navLinks as $link)
                <li class="py-3">
                    <a href="{{ $link['href'] }}"
                        class="flex w-full capitalize {{ $currentPath === ltrim($link['href'], '/') ? 'text-blue-600 font-bold' : 'text-gray-700' }}"
                        onclick="toggleMobileMenu()">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</div>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
    // Initialize Lucide icons
    lucide.createIcons();

    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        document.body.style.overflow = menu.classList.contains('hidden') ? '' : 'hidden';
    }
</script>
