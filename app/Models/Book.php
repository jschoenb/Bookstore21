<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * @var array
     */
    protected  $fillable = ['isbn','title','subtitle','published','rating',
        'description','user_id'];


    public function isFavourite() : bool {
        return $this->rating >= 8;
    }

    public function images() : HasMany {
        return $this->hasMany(Image::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    /**
     * book belongs to many authors (m:n)
     */
    public function authors() : BelongsToMany {
        return $this->belongsToMany(Author::class)->withTimestamps();
        //return $this->belongsToMany(Author::class)->withPivot('price','xyz');
    }
}
