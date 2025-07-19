<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
class UsingQueryBuilder extends Model
{
 
use softDeletes;
    //
    protected $hidden = [
        
        // 'phone',
   
    ];
    public function scopeState($query){
        return $query->where('state', 'active');
    }
    public function scopeCity($query){
        return $query->where('city', 'active');
    }
    
    

}
