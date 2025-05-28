<x-layouts.main :title="__('Contact Page')">

    <div>
        <div>
            <div
                class="grid-section border-grid-border relative overflow-clip border-b px-4 [.grid-section_~_&]:border-t-0">
                <div class="max-grid-width relative z-0 mx-auto">
                    <div
                        class="border-grid-border pointer-events-none absolute inset-0 border-x [mask-image:linear-gradient(transparent,black)]">
                    </div>
                    <div class="relative mx-auto flex max-w-md flex-col items-center space-y-5 px-4 py-16 text-center">
                        <h1 class="text-4xl">Get in Touch</h1>
                        <p>Have questions about pet care? Reach out to us!</p>
                    </div>
                </div>
            </div>
            <div
                class="grid-section border-grid-border relative overflow-clip border-y px-4 [.grid-section_~_&]:border-t-0">
                <div class="max-grid-width relative z-0 mx-auto border-x">
                    <div class="absolute inset-0 overflow-hidden bg-white/10 backdrop-blur-md md:bg-neutral-50">
                        <svg class="text-grid-border pointer-events-none absolute inset-0 left-1/2 hidden w-[1200px] -translate-x-1/2 opacity-5 md:block"
                            width="100%" height="100%">
                            <defs>
                                <pattern id="grid-r6" x="-31" y="-1" width="60" height="60"
                                    patternUnits="userSpaceOnUse">
                                    <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor"
                                        stroke-width="2">
                                    </path>
                                </pattern>
                            </defs>
                            <rect fill="url(#grid-r6)" width="100%" height="100%"></rect>
                        </svg>
                    </div>
                    <div
                        class="relative mx-auto grid max-w-[680px] grid-cols-4 gap-10 bg-white/80 p-8 backdrop-blur-md sm:p-12 md:border-x lg:gap-20">
                        <div class="col-span-4">
                            <form class="grid gap-6 py-5">
                                <div class="space-y-2">
                                    <label data-slot="label"
                                        class="flex items-center gap-2 select-none text-sm font-medium"
                                        for="name">Your Name</label>
                                    <input data-slot="input"
                                        class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 w-full rounded-md border bg-white px-3 py-1 text-base shadow-xs outline-none transition-colors focus:ring-1 md:text-sm"
                                        id="name" placeholder="John Doe" required name="name" value="">
                                </div>
                                <div class="space-y-2">
                                    <label data-slot="label"
                                        class="flex items-center gap-2 select-none text-sm font-medium"
                                        for="email">Your Email</label>
                                    <input type="email" data-slot="input"
                                        class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 w-full rounded-md border bg-white px-3 py-1 text-base shadow-xs outline-none transition-colors focus:ring-1 md:text-sm"
                                        id="email" autocomplete="email" placeholder="john.doe@example.com" required
                                        name="email" value="">
                                </div>
                                <div class="space-y-2">
                                    <label data-slot="label"
                                        class="flex items-center gap-2 select-none text-sm font-medium"
                                        for="subject">Subject</label>
                                    <input data-slot="input"
                                        class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 w-full rounded-md border bg-white px-3 py-1 text-base shadow-xs outline-none transition-colors focus:ring-1 md:text-sm"
                                        id="subject" placeholder="Pet Care Inquiry" required name="subject"
                                        value="">
                                </div>
                                <div class="space-y-2">
                                    <label data-slot="label"
                                        class="flex items-center gap-2 select-none text-sm font-medium"
                                        for="message">Your Message</label>
                                    <textarea id="message" name="message" placeholder="How can we assist you with your pet's needs?" required
                                        class="border-gray-300 focus:border-gray-500 focus:ring-gray-500 w-full rounded-md border bg-white px-3 py-2 text-sm focus:ring-1 focus:outline-none"
                                        style="min-height: 58px; max-height: 9.0072e+15px; height: 62px;"></textarea>
                                </div>
                                <button data-slot="button"
                                    class="w-fit bg-gray-900 text-white hover:bg-gray-800 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium shadow-xs h-9 px-4 py-2 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500"
                                    type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
