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
        Schema::table('types',function(Blueprint $table)
        {
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->double('longtitude',8,3)->nullable();
            $table->double('latitude',8,3)->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('currency')->nullable();
            $table->string('accomodation_type')->nullable();
            $table->string('category')->nullable(); 
            $table->string('web')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('types',function(Blueprint $table)
        {
            $table->dropColumn(['name','address','postcode','city','state','country_id','longtitude','latitude','phone','fax','email','currency','accommodation_type','category','web']);
        });
    }
};
