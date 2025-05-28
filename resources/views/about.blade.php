<x-layouts.main :title="__('About Page')">
    <div>
        <div class="max-grid-width relative mx-[16px] overflow-clip border-x px-4 text-center lg:mx-auto">
            <div class="pointer-events-none absolute inset-0 [mask-image:linear-gradient(transparent,black)]"></div>
            <div
                class="pointer-events-none absolute inset-y-0 left-1/2 w-screen -translate-x-1/2 [mask-image:linear-gradient(transparent,black)] [mask-composite:intersect] opacity-20">
                <div class="absolute inset-x-[360px] inset-y-0">
                    <svg class="text-gray-300 pointer-events-none absolute inset-[unset] right-full bottom-0 h-[600px] w-[360px] [mask-image:linear-gradient(90deg,transparent,black)]"
                        width="100%" height="100%">
                        <defs>
                            <pattern id="grid-R2j17ninb" x="0" y="0" width="60" height="60"
                                patternUnits="userSpaceOnUse">
                                <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                                </path>
                            </pattern>
                        </defs>
                        <rect fill="url(#grid-R2j17ninb)" width="100%" height="100%"></rect>
                    </svg>
                    <svg class="text-gray-300 pointer-events-none absolute inset-[unset] bottom-0 left-full h-[600px] w-[360px] [mask-image:linear-gradient(270deg,transparent,black)]"
                        width="100%" height="100%">
                        <defs>
                            <pattern id="grid-R4j17ninb" x="-1" y="0" width="60" height="60"
                                patternUnits="userSpaceOnUse">
                                <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                                </path>
                            </pattern>
                        </defs>
                        <rect fill="url(#grid-R4j17ninb)" width="100%" height="100%"></rect>
                    </svg>
                </div>
            </div>
            <div
                class="pointer-events-none absolute inset-x-px inset-y-0 overflow-hidden [mask-image:linear-gradient(transparent,black)] opacity-30">
                <svg class="w-grid-width text-gray-300 pointer-events-none absolute inset-[unset] bottom-0 left-1/2 h-[600px] -translate-x-1/2"
                    width="100%" height="100%">
                    <defs>
                        <pattern id="grid-R1317ninb" x="-1" y="0" width="60" height="60"
                            patternUnits="userSpaceOnUse">
                            <path d="M 60 0 L 0 0 0 60" fill="transparent" stroke="currentColor" stroke-width="2">
                            </path>
                        </pattern>
                    </defs>
                    <rect fill="url(#grid-R1317ninb)" width="100%" height="100%"></rect>
                </svg>
            </div>
            <div class="mx-auto flex h-full w-full items-center justify-center">
                <h1
                    class="font-display my-10 w-fit bg-white/80 px-2 py-1 text-2xl backdrop-blur-2xl sm:text-4xl sm:leading-[1.15]">
                    About VetSafeCare
                </h1>
            </div>
        </div>
        <div class="relative overflow-clip border-y bg-neutral-50 px-4">
            <div class="max-grid-width relative z-0 mx-auto bg-white px-4 pt-16 pb-6 sm:px-12 sm:pb-20">
                <div class="pointer-events-none absolute inset-0 border-x"></div>
                <div
                    class="prose prose-neutral prose-headings:font-display prose-headings:font-medium prose-headings:text-xl prose-a:font-medium prose-a:underline-offset-4 hover:prose-a:text-blue-800 relative max-w-none">
                    <section>
                        <p class="text-base text-gray-700">Last updated on March 9th, 2025 by Admin</p>
                        <p class="mt-3 text-base text-gray-700">Welcome to VetSafeCare, your trusted resource for
                            veterinary care and pet wellness. We are dedicated to providing high-quality information,
                            resources, and services to help pet owners ensure the health and happiness of their animals.
                        </p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">1. Our Mission</h2>
                        <p class="mt-3 text-base text-gray-700">At VetSafeCare, our mission is to empower pet owners
                            with reliable, accessible, and up-to-date veterinary information. We aim to bridge the gap
                            between pet owners and professional veterinary care by offering resources that promote
                            informed decision-making.</p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">2. Our Services</h2>
                        <p class="mt-3 text-base text-gray-700">We provide a range of services, including:</p>
                        <ul class="mt-3 list-disc pl-8 text-base text-gray-700">
                            <li>Educational articles and guides on pet health and care.</li>
                            <li>Access to trusted veterinary resources and tools.</li>
                            <li>Newsletters with the latest pet care tips and updates.</li>
                            <li>Support for connecting with veterinary professionals.</li>
                        </ul>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">3. Our Team</h2>
                        <p class="mt-3 text-base text-gray-700">Our team consists of passionate pet lovers, veterinary
                            experts, and content creators who work together to deliver accurate and helpful information.
                            We collaborate with licensed veterinarians to ensure our content meets the highest
                            standards.</p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">4. Our Commitment</h2>
                        <p class="mt-3 text-base text-gray-700">We are committed to transparency, integrity, and the
                            well-being of pets. Our content is designed to complement, not replace, professional
                            veterinary advice, and we encourage pet owners to consult with their veterinarians for
                            medical decisions.</p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">5. Contact Us</h2>
                        <p class="mt-3 text-base text-gray-700">Have questions or want to learn more about VetSafeCare?
                            Reach out to us at <a href="mailto:support@vetsafecare.com">support@vetsafecare.com</a>.
                            We’re here to help
                            you and your pets thrive.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
