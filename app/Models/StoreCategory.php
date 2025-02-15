<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function merchant(){
        return $this->belongsTo(Merchant::class);
    }

    public function store(){
        return $this->belongsTo(Store::class);
    }
}
