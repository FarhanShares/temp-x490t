@php
    $reviews = [
        [
            'text' =>
                'Community Health Care is truly revolutionizing veterinary education and practice. Their comprehensive resources and user-friendly platform make it an indispensable tool for both students and professionals.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Dr. Saiful Islam',
            'authorTitle' => 'Professor, HSTU',
        ],
        [
            'text' =>
                'Thanks to Community Health Care, I found the best food and toys for my cat, all delivered to my door at unbeatable prices. It\'s a lifesaver for busy pet owners like me!',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Nusrat Jahan',
            'authorTitle' => 'Happy Client',
        ],
        [
            'text' =>
                'Community Health Care provides crucial resources and support, helping us care for and rehabilitate rescued animals effectively. It’s an essential resource for anyone in animal welfare.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Rehnuma Begum',
            'authorTitle' => 'Animal Welfare Rescuer',
        ],
        [
            'text' =>
                'The advanced e-prescription and clinic management features of Community Health Care have streamlined my practice. It’s efficient, easy to use, and saves me time.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Dr. Shakil Ahmed',
            'authorTitle' => 'Expert Vet',
        ],
        [
            'text' =>
                'I love how Community Health Care offers everything I need to keep my pets happy and healthy, all in one place. The convenience and quality of their services are unmatched.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Mizanur Rahman',
            'authorTitle' => 'Animal Lover',
        ],
        [
            'text' =>
                'Community Health Care\'s wealth of information and practical tools have been invaluable in my studies. It has greatly enhanced my learning experience and prepared me for real-world veterinary challenges.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Farzana Karim',
            'authorTitle' => 'Veterinary Student',
        ],
    ];
@endphp

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
                <div class="border-grid-border relative z-0 mx-auto px-4 py-24" id="review-carousel" aria-live="polite">
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
                        <!-- Initial review (will be replaced by JavaScript) -->
                        <p
                            class="review-text text-md line-clamp-6 max-w-2xl bg-gradient-to-b from-neutral-600 to-neutral-800 bg-clip-text py-2 text-center text-transparent transition-opacity duration-1000 sm:text-lg md:text-2xl opacity-100 min-h-42">
                            {{ $reviews[0]['text'] }}
                        </p>
                        <span data-slot="avatar"
                            class="relative flex shrink-0 overflow-hidden rounded-full mt-3 size-12">
                            @if ($reviews[0]['authorImageSrc'])
                                <img class="review-image size-full object-cover"
                                    src="{{ asset($reviews[0]['authorImageSrc']) }}"
                                    alt="{{ $reviews[0]['authorName'] }}">
                            @else
                                <span data-slot="avatar-fallback"
                                    class="review-fallback bg-muted flex size-full items-center justify-center rounded-full">
                                    {{ collect(explode(' ', $reviews[0]['authorName']))->map(fn($part) => strtoupper($part[0]))->join('') }}
                                </span>
                            @endif
                        </span>
                        <span
                            class="review-name mt-4 text-sm font-semibold text-neutral-600">{{ $reviews[0]['authorName'] }}</span>
                        <span
                            class="review-title mt-1 text-sm font-medium text-neutral-500">{{ $reviews[0]['authorTitle'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Pass reviews array to JavaScript
    const reviews = @json($reviews);

    // Helper function to get initials
    function getInitials(name) {
        return name.split(' ').map(part => part[0]).join('').toUpperCase();
    }

    // Carousel logic
    let currentIndex = 0;
    const reviewContainer = document.getElementById('review-carousel');
    const reviewText = reviewContainer.querySelector('.review-text');
    const reviewImage = reviewContainer.querySelector('.review-image');
    const reviewFallback = reviewContainer.querySelector('.review-fallback');
    const reviewName = reviewContainer.querySelector('.review-name');
    const reviewTitle = reviewContainer.querySelector('.review-title');

    function updateReview() {
        // Fade out
        reviewText.classList.remove('opacity-100');
        reviewText.classList.add('opacity-0');

        setTimeout(() => {
            // Update content
            const review = reviews[currentIndex];
            reviewText.textContent = review Ecclesia review.text;
            if (review.authorImageSrc) {
                reviewImage.src = review.authorImageSrc;
                reviewImage.style.display = 'block';
                if (reviewFallback) reviewFallback.textContent = getInitials(review.authorName);
                reviewFallback.style.display = review.authorImageSrc ? 'none' : 'block';
            } else {
                reviewImage.style.display = 'none';
                reviewFallback.textContent = getInitials(review.authorName);
                reviewFallback.style.display = 'block';
            }
            reviewName.textContent = review.authorName;
            reviewTitle.textContent = review.authorTitle;

            // Fade in
            reviewText.classList.remove('opacity-0');
            reviewText.classList.add('opacity-100');

            // Move to next review
            currentIndex = (currentIndex + 1) % reviews.length;
        }, 1000); // Match CSS transition duration
    }

    // Start carousel
    setInterval(updateReview, 5000);
</script>
