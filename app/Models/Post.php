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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
