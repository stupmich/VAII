<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected $fillable = [
        'text',
        'user_id',
        'article_id',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function article() {
        return $this->belongsTo('App\Models\Article','article_id','id');
    }
}
