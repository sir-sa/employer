<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    // protected $primaryKey = 'jobs';

    protected $fillable = ['category_id', 'tag_id', 'type_id', 'job_title', 'job_description', 'location', 'logo'];

    public function category(){
    	return $this->belogsTo('App\Category');
    }
    public function type(){
    	return $this->belogsTo('App\Type');
    }
    public function tag(){
    	return $this->belogsTo('App\Tag');
    }
    
}
