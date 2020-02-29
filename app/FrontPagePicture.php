<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPagePicture extends Model
{
    public function user(){
        return $this->belongsTo(User::class);

    }
    public function product(){
        return $this->belongsTo(ProductType::class);
    }
}
