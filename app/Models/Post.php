<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'author_id', 'category_id'];

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        $query->when($filters['search'] ?? false, function (Builder $query, string $search) {
            $query
                ->where(
                    fn ($query) =>
                    $query
                        ->where('title', 'like', "%{$search}%")
                        ->orWhere('body', 'like', "%{$search}%")
                );
        });

        $query->when($filters['category'] ?? false, function (Builder $query, string $category) {
            $query
                ->whereHas('category', fn ($query) => $query->where('name', $category));
        });

        $query->when($filters['author'] ?? false, function (Builder $query, string $author) {
            $query
                ->whereHas('author', fn ($query) => $query->where('username', $author));
        });

        return $query;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
