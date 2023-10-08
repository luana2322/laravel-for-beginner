<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Table;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';

//protected $timestamp = true;
    protected $fillable = ['name','address','email','phone','age','category_id','image_path'];

    public function category(){
        return $this->belongsTo(Category::class); 
    }
}