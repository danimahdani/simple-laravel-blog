<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * fillable untuk filed mana saja yg boleh di isi
     * sekaligus untuk membuka/allowed MessAssignment untuk model mengakses perintan eloquent create
     */
    // protected $fillable = ['title', 'excerpt', 'body'];

    protected $guarded = ['id'];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
       $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );

    }

    /**
     * override parameter id for route resource
     * https://laravel.com/docs/8.x/routing#customizing-the-default-key-name
     */
    public function getRouteKeyName()
    {
        return 'slug';
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
