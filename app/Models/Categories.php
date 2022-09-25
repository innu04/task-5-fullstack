<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $filelablecategories = [
        'name'
    ];
    protected $guarded = ['id'];

    public function articles()
    {
        return $this->belongsTo(Articles::class);
    }

}
