<?php

namespace App;

use App\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'date',
        'time',
        'status',
        'doctor_id',
        'reason_cancel',
        'user_id',
    ];

    /**
     * Get the doctor associated with the appointment.
     */
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
