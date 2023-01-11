<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'price', 'category_id', 'category_name','location', 'file_path1','file_path2','file_path3','user_id', 'category_name'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

