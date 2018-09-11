<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['title','subtitle','caption','image','button','button_target','banner_type_id'];

    public function target(){
    	return $this->hasOne('App\SectionType','id','button_target');
    }

    public function type(){
		return $this->hasOne('App\BannerType','id','banner_type_id');
	}
}
