<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReviewCarousel extends Component
{
    public $reviews = [
        [
            'text' => 'Community Health Care is truly revolutionizing veterinary education and practice. Their comprehensive resources and user-friendly platform make it an indispensable tool for both students and professionals.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Dr. Saiful Islam',
            'authorTitle' => 'Professor, HSTU',
        ],
        [
            'text' => "Thanks to Community Health Care, I found the best food and toys for my cat, all delivered to my door at unbeatable prices. It's a lifesaver for busy pet owners like me!",
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Nusrat Jahan',
            'authorTitle' => 'Happy Client',
        ],
        [
            'text' => 'Community Health Care provides crucial resources and support, helping us care for and rehabilitate rescued animals effectively. It’s an essential resource for anyone in animal welfare.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Rehnuma Begum',
            'authorTitle' => 'Animal Welfare Rescuer',
        ],
        [
            'text' => 'The advanced e-prescription and clinic management features of Community Health Care have streamlined my practice. It’s efficient, easy to use, and saves me time.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Dr. Shakil Ahmed',
            'authorTitle' => 'Expert Vet',
        ],
        [
            'text' => 'I love how Community Health Care offers everything I need to keep my pets happy and healthy, all in one place. The convenience and quality of their services are unmatched.',
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Mizanur Rahman',
            'authorTitle' => 'Animal Lover',
        ],
        [
            'text' => "Community Health Care's wealth of information and practical tools have been invaluable in my studies. It has greatly enhanced my learning experience and prepared me for real-world veterinary challenges.",
            'authorImageSrc' => '/placeholder-avatar.png',
            'authorName' => 'Farzana Karim',
            'authorTitle' => 'Veterinary Student',
        ],
    ];

    public $currentIndex = 0;
    public $isFading = true;

    public function mount()
    {
        // Initialize the component
    }

    public function nextReview()
    {
        $this->isFading = false;

        // Simulate the 1-second fade-out transition before changing the review
        \Illuminate\Support\Facades\Cache::put('review_fading_' . $this->id, true, now()->addSeconds(1));

        // Use a queued job or deferred execution for the transition
        $this->dispatchBrowserEvent('start-transition');

        // After 1 second, update the review and fade in
        \Illuminate\Support\Facades\Cache::put('review_change_' . $this->id, true, now()->addSeconds(1));

        $this->currentIndex = ($this->currentIndex + 1) % count($this->reviews);
        $this->isFading = true;
    }

    public function render()
    {
        return view('livewire.review-carousel', [
            'currentReview' => $this->reviews[$this->currentIndex],
            'initials' => $this->getInitials($this->reviews[$this->currentIndex]['authorName']),
        ]);
    }

    private function getInitials($name)
    {
        return collect(explode(' ', $name))->map(fn($part) => strtoupper($part[0]))->join('');
    }
}
