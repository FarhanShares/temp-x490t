<x-layouts.main :title="__('Help Page')">
    <div>
        <div
            class="max-grid-width relative mx-[16px] overflow-clip border-x border-gray-200 px-4 text-center lg:mx-auto">
            <div class="pointer-events-none absolute inset-0 [mask-image:linear-gradient(transparent,black)]"></div>
            <div
                class="pointer-events-none absolute inset-y-0 left-1/2 w-screen -translate-x-1/2 [mask-image:linear-gradient(transparent,black)] [mask-composite:intersect] opacity-20">
                <div class="absolute inset-x-[360px] inset-y-0">
                    <svg class="text-gray-300 !important pointer-events-none absolute inset-[unset] right-full bottom-0 h-[600px] w-[360px] [mask-image:linear-gradient(90deg,transparent,black)]"
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
                    <svg class="text-gray-300 !important pointer-events-none absolute inset-[unset] bottom-0 left-full h-[600px] w-[360px] [mask-image:linear-gradient(270deg,transparent,black)]"
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
                <svg class="w-grid-width text-gray-300 !important pointer-events-none absolute inset-[unset] bottom-0 left-1/2 h-[600px] -translate-x-1/2"
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
                    Help & Support
                </h1>
            </div>
        </div>
        <div class="relative overflow-clip border-y border-gray-200 bg-neutral-50 px-4">
            <div class="max-grid-width relative z-0 mx-auto bg-white px-4 pt-16 pb-6 sm:px-12 sm:pb-20">
                <div class="pointer-events-none absolute inset-0 border-x border-gray-200"></div>
                <div
                    class="prose prose-neutral prose-headings:font-display prose-headings:font-medium prose-headings:text-xl prose-a:font-medium prose-a:underline-offset-4 hover:prose-a:text-blue-800 relative max-w-none">
                    <section>
                        <p class="text-base text-gray-700">Last updated on March 9th, 2025 by Admin</p>
                        <p class="mt-3 text-base text-gray-700">Welcome to the VetSafeCare Help Center! We're here to
                            assist you with any questions or issues you may have while using our website and services.
                            Below, you'll find resources and guidance to help you navigate our platform.</p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">1. Getting Started</h2>
                        <p class="mt-3 text-base text-gray-700">New to VetSafeCare? Our platform offers a variety of
                            resources, including pet care guides, veterinary tips, and newsletters. To get started,
                            explore our website or sign up for our newsletter for the latest updates.</p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">2. Frequently Asked Questions (FAQs)</h2>
                        <p class="mt-3 text-base text-gray-700">Here are some common questions we receive:</p>
                        <ul class="mt-3 list-disc pl-8 text-base text-gray-700">
                            <li><strong>How do I access pet care resources?</strong> Browse our articles and guides
                                under the “Resources” section.</li>
                            <li><strong>Can I book veterinary services?</strong> Currently, we provide information and
                                resources, but direct bookings should be made through your veterinarian.</li>
                            <li><strong>How do I unsubscribe from newsletters?</strong> Click the “Unsubscribe” link at
                                the bottom of any newsletter email.</li>
                        </ul>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">3. Troubleshooting</h2>
                        <p class="mt-3 text-base text-gray-700">Experiencing issues with our website? Try the following:
                        </p>
                        <ul class="mt-3 list-disc pl-8 text-base text-gray-700">
                            <li>Clear your browser cache and cookies.</li>
                            <li>Ensure you're using a supported browser (e.g., Chrome, Firefox, Safari).</li>
                            <li>Check your internet connection.</li>
                        </ul>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">4. Contact Support</h2>
                        <p class="mt-3 text-base text-gray-700">If you need further assistance, our support team is here
                            to help. Reach out to us at <a
                                href="mailto:support@vetsafecare.com">support@vetsafecare.com</a>, and we'll respond as
                            soon as possible.</p>
                    </section>
                    <section class="mt-6">
                        <h2 class="!m-0">5. Additional Resources</h2>
                        <p class="mt-3 text-base text-gray-700">For more information, visit our <a
                                href="/about">About</a> page or review our <a href="/privacy-policy">Privacy Policy</a>
                            and <a href="/terms-and-conditions">Terms and Conditions</a>.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
