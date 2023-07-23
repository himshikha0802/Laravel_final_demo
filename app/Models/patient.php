<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $append =['image_path'];

    public function getImagePathAttribute(){
        if(!empty($this->image))
        return asset('uploads/user/'.$this->image);
        return null;
    }
}
