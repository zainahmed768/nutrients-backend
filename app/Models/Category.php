<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $table = 'categorys';

    protected $fillable = [
        'category_name',
        'description'
    ];

    protected $guarded = [];
    public function products()
    {
        $this->hasMany(Product::class, "category_id");
    }
}
