<?php

use App\Models\City;
use App\Models\Country;
use App\Models\Designation;
use App\Models\Province;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('father_name');
            $table->string('spouse_name')->nullable();
            $table->char('gender',10);
            $table->char('cnic',15)->nullable();
            $table->char('passport',30)->nullable();
            $table->string('birth_place')->nullable();
            $table->date('dob')->nullable();
            $table->char('marital_status',30);    
            $table->char('blood_group',10)->nullable();    
            $table->char('religion',30)->nullable();    
            $table->enum('employee_category',['DOCTOR' , 'NURSE' , 'NON-CLINICAL' , 'CLINICAL']);
            $table->foreignIdFor(Designation::class , 'designation_id')->index();
            $table->date('doj');
            $table->string('employee_picture')->nullable();
            $table->string('employee_fp')->nullable();
            $table->string('landline_number')->nullable();
            $table->string('mobile_number');
            $table->string('work_mobile')->nullable();
            $table->string('personal_email')->nullable();
            $table->string('work_email')->nullable();
            $table->foreignIdFor(Country::class , 'country_id')->index()->nullable();
            $table->foreignIdFor(Province::class , 'province_id')->index()->nullable();
            $table->foreignIdFor(City::class , 'city_id')->index()->nullable();
            $table->string('postal_code')->nullable();
            $table->string('permenant_address')->nullable();
            $table->string('emergency_contact_person')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
