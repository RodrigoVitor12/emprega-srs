<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'phone',
        'city',
        'summary',
        'course_type',
        'institution',
        'completion_status',
        'experience_1_position',
        'experience_1_company',
        'experience_1_period',
        'experience_1_activities',
        'experience_2_position',
        'experience_2_company',
        'experience_2_period',
        'experience_2_activities',
        'skills',
        'languages',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}