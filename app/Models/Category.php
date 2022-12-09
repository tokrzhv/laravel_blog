<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    use DatabaseMigrations;

    protected $table = 'categories';
    protected $guarded = false;

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
