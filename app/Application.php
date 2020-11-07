<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $table ='applications';
    protected $primaryKey ='id';
    protected $fillable =['name', 'applicant_id', 'email', 'phone', 'address', 'job_title', 'file'];

    public function user(){
    	return $this->belongsTo('App\User')
    }

}

