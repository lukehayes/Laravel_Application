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
    protected $fillable = [
        'title', 'content',
    ];

    /**
     * Automatically fill in the created_at and 
     * updated_at fields of this model.
     *
     * @var array
     */
    public $timestamps = true;

    /**
     * Define the one to many relationship
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
