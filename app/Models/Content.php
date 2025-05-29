<?php

namespace App\Models;

use App\Enums\ContentStatus;
use App\Enums\ContentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'author_id',
        'type',
        'primary_tag_id',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'cover_image',
    ];

    protected $casts = [
        'status' => ContentStatus::class,
        'type' => ContentType::class,
        'meta_keywords' => 'array',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function primaryTag(): BelongsTo
    {
        return $this->belongsTo(Tag::class, 'primary_tag_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
