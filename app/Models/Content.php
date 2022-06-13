<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    use HasFactory;
    public $primaryKey = 'id';
    protected $table = 'contents';

    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
}
