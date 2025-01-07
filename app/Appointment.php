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
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * In this relationship:
     * - 'doctor_id' is the foreign key in the `appointments` table.
     * - 'id' is the primary key in the `users` table being referenced.
     */
    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }

    /**
     * Get the user who created the appointment.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * In this relationship:
     * - 'user_id' is the foreign key in the `appointments` table.
     * - 'id' is the primary key in the `users` table being referenced.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
