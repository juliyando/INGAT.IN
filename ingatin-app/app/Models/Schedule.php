<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';
    protected $fillable = [
        'title',
        'start', // Add this line
        'end',
        'description',
        'lokasi',
        'image_flyer_path',
        'status',
        'created_by'
    ];

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    public function registrations()
    {
        return $this->hasMany(ScheduleRegistration::class, 'activity_id');
    }
}
