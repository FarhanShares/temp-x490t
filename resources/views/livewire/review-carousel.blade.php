<div class="overflow-hidden bg-neutral-50">
    <div class="max-grid-width mx-auto border-x bg-white">
        <div class="mx-[15.5px] border-x lg:mx-0 lg:border-x-0">
            <div class="relative">
                <!-- Background Dots Pattern -->
                <div class="absolute inset-x-4 top-4 bottom-8 sm:inset-x-16 sm:top-16">
                    <svg class="pointer-events-none absolute inset-0 text-neutral-200/80" width="100%" height="100%">
                        <defs>
                            <pattern id="dots-:S1:" x="-1" y="-1" width="12" height="12"
                                patternUnits="userSpaceOnUse">
                                <rect x="1" y="1" width="2" height="2" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect fill="url(#dots-:S1:)" width="100%" height="100%"></rect>
                    </svg>
                </div>

                <!-- Header -->
                <div class="relative z-50">
                    <h2
                        class="mx-auto flex flex-col items-center space-y-2 pt-10 pb-5 text-center text-xl md:text-2xl lg:text-3xl">
                        <span>We love your support!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="red" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-heart-handshake" aria-hidden="true">
                            <path
                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                            </path>
                            <path
                                d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66">
                            </path>
                            <path d="m18 15-2-2"></path>
                            <path d="m15 18-2-2"></path>
                        </svg>
                    </h2>
                </div>

                <!-- Review Content -->
                <div class="border-grid-border relative z-0 mx-auto px-4 py-24" wire:poll.5000ms="nextReview">
                    <div class="absolute top-20 right-2 text-neutral-200 opacity-40 lg:top-20 lg:right-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-quote size-5 md:size-8 lg:size-12"
                            aria-hidden="true">
                            <path
                                d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                            </path>
                            <path
                                d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z">
                            </path>
                        </svg>
                    </div>
                    <div class="flex h-48 flex-col items-center">
                        <p
                            class="text-md line-clamp-6 max-w-2xl bg-gradient-to-b from-neutral-600 to-neutral-800 bg-clip-text py-2 text-center text-transparent transition-opacity duration-1000 sm:text-lg md:text-2xl {{ $isFading ? 'opacity-100' : 'opacity-0' }} min-h-42">
                            {{ $currentReview['text'] }}
                        </p>
                        <span data-slot="avatar"
                            class="relative flex shrink-0 overflow-hidden rounded-full mt-3 size-12">
                            @if ($currentReview['authorImageSrc'])
                                <img src="{{ $currentReview['authorImageSrc'] }}"
                                    alt="{{ $currentReview['authorName'] }}" class="size-full object-cover">
                            @else
                                <span data-slot="avatar-fallback"
                                    class="bg-muted flex size-full items-center justify-center rounded-full">
                                    {{ $initials }}
                                </span>
                            @endif
                        </span>
                        <span
                            class="mt-4 text-sm font-semibold text-neutral-600">{{ $currentReview['authorName'] }}</span>
                        <span
                            class="mt-1 text-sm font-medium text-neutral-500">{{ $currentReview['authorTitle'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('livewire:initialized', () => {
                Livewire.on('start-transition', () => {
                    // This could be used for additional client-side logic if needed
                });
            });
        </script>
    @endpush
</div>
