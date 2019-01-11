<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
use App\User;

class Project extends Model
{
    // protected $fillable = ['title', 'description'];
    protected $guarded = []; 

    public function path()
    {
        return "/projects/{$this->id}"; 
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

}
