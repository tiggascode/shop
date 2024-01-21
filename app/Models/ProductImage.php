<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $guarded = false;

    public function getImageUrlAttribute(){
        return url('storage/' .$this->file_path);
    }
}
