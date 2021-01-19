<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'text',
        'username',
        'category',
        'subcategory'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment', 'article_id','id');
    }
}
