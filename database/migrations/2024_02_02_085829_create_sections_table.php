<?php

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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Department::class,'department_id')->index();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->foreignIdFor(\App\Models\User::class,'created_by')->index();
            $table->foreignIdFor(\App\Models\User::class,'updated_by')->index();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('employees',function (Blueprint $table){
            $table->foreignIdFor(\App\Models\User::class,'created_by')->index();
            $table->foreignIdFor(\App\Models\User::class,'updated_by')->index();
        });

        Schema::table('designations',function (Blueprint $table){
            $table->string('code')->nullable();
            $table->foreignIdFor(\App\Models\User::class,'created_by')->index();
            $table->foreignIdFor(\App\Models\User::class,'updated_by')->index();
        });

        Schema::table('departments',function (Blueprint $table){
            $table->foreignIdFor(\App\Models\User::class,'created_by')->index();
            $table->foreignIdFor(\App\Models\User::class,'updated_by')->index();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
