<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
	protected $fillable = ['title','subtitle','content','image','section_type_id'];

	public function type(){
		return $this->hasOne('App\SectionType','id','section_type_id');
	}

}
