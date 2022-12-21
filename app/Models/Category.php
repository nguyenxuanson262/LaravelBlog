<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const show = [
        '1' => 'Hiển thị',
        '0' => 'Không hiển thị'
    ];

    protected $fillable = [
        'parent_id',
        'name',
        'showinhomepage',
    ];

    public function children(){
       return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }
}
