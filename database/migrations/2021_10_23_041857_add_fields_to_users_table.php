<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->nullable()->constrained();

            $table->string('student_campus_number')->nullable();
            $table->string('student_address')->nullable();
            $table->string('student_room_number')->nullable();
            $table->string('student_parent_phone')->nullable();
            $table->unsignedSmallInteger('graduation_year')->nullable();

            $table->string('teacher_salary')->nullable();
            $table->string('teacher_address')->nullable();
            $table->string('teacher_emergency_contact')->nullable();
            $table->string('teacher_personal_phone')->nullable();
            $table->boolean('teacher_is_retired')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
