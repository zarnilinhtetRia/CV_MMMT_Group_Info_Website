<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [''];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
