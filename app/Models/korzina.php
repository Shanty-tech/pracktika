<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class korzina extends Model
{
    protected $fillable = [ "user_id", "tovar_id","quantity"];

    public function all_tov()
    {   
        return $this->hasOne(all_tov::class, 'id', 'user_id','quantity');
    }
}
