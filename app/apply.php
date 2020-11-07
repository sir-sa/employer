<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apply extends Model
{
    protected $table ='applies';
    protected $primaryKey ='id';
    protected $fillable =['name', 'applicant_id', 'email', 'phone', 'address', 'job_title', 'file'];
}
