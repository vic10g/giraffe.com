<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    //mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'create_by', 'modified_by'];
    
    //преобразователь
    public function setSlugAttribute($value) 
    {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40)."-".\Carbon\Carbon::now()->format('dmyHi'), '-');
    }
    
    
    //get children category
    public function children () {
        
        return $this->hasMany(self::class, 'parent_id');
        
    }
}
