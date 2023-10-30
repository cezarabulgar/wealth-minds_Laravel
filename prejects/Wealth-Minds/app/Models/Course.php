<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
     use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'financial_course';

    /**
     * The attributes that are mass assignable.
     *
    
     */ 
    // protected $fillable = [
    //     'title', 
    //     'description',
    //     'structure', 
    //     'instructor',
    //     'duration', 
    //     'price'];
}
