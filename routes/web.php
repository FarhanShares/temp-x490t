<?php

use App\Models\Content;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    $query = Content::where('status', 'published')->latest();
    if ($tagSlug = request()->query('tag')) {
        $query->whereHas('primaryTag', function ($q) use ($tagSlug) {
            $q->where('slug', $tagSlug);
        });
    }
    $contents = $query->get();
    $tags = Tag::all();
    return view('blog', compact('contents', 'tags'));
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $content = Content::where('slug', $slug)->where('status', 'published')->firstOrFail();
    return view('show-blog', compact('content'));
})->name('blog.show');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__ . '/auth.php';
