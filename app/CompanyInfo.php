<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = ['name','phone_1','phone_2','email_1','email_2','address','review','facebook','twitter','instagram','logo'];
}
