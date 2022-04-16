<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class patient extends Model
{
    use HasFactory, SoftDeletes;

    public function user(){

        return $this->belongsTo(user::class);
  
      }
      public function doctor(){

        return $this->belongsTo(doctor::class);
  
      }

}
