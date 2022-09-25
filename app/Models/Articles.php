<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $filelablearticles = [
        'title',
        'content',
        'image'
    ];
    protected $guarded = ['id'];
    

    public function categories()
    {
        return $this->hasOne(Categories::class);
    }

}
