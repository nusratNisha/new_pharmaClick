<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('type'); // Type of appointment
            $table->date('date'); // Appointment date
            $table->time('time'); // Appointment time
            $table->string('status')->default('pending'); // Status of the appointment
            $table->unsignedBigInteger('doctor_id'); // Foreign key for doctor
            $table->text('reason_cancel')->nullable(); // Reason for cancellation (optional)
            $table->timestamps(); // Created and updated timestamps

            // Optionally, you can add a foreign key constraint
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
