<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    const created_at = 'created_at';
    const updated_at = 'updated_at'; 
    protected $primaryKey = 'id';
    protected $primary = 'category_ref';

    protected $fileable = ['name', 'parent_name'];

    protected $guarded = ['category_ref', 'parent_id'];
}
