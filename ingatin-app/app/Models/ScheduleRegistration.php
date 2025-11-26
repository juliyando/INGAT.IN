<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleRegistration extends Model
{
    protected $fillable = [
        'user_id', 'activity_id', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedules()
    {
        return $this->belongsTo(Schedule::class);
    }
}
