<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('first_name_kana');
            $table->string('last_name_kana');
            $table->integer('gender_id')->nullable();
            $table->string('birth_year')->nullable();
            $table->string('birth_month')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('tel')->nullable();
            $table->string('cellphone')->nullable();
            $table->string('postcode')->nullable();
            $table->bigInteger('adress_prefecture_id')->nullable();
            $table->string('adress_city')->nullable();
            $table->string('adress_other')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('contact_cellphone')->nullable();
            $table->string('contact_postcode')->nullable();
            $table->bigInteger('contact_prefecture_id')->nullable();
            $table->string('contact_city')->nullable();
            $table->string('contact_other')->nullable();
            $table->integer('final_education_id')->nullable();
            $table->integer('marriage_id')->nullable();
            $table->integer('dependent_id')->nullable();
            $table->string('dependent_member')->nullable();
            $table->integer('partner_id')->nullable();
            $table->integer('partner_dependent_id')->nullable();
            $table->string('guardian_first_name')->nullable();
            $table->string('guardian_last_name')->nullable();
            $table->string('guardian_first_name_kana')->nullable();
            $table->string('guardian_last_name_kana')->nullable();
            $table->string('guardian_tel')->nullable();
            $table->string('guardian_cellphone')->nullable();
            $table->string('guardian_postcode')->nullable();
            $table->bigInteger('guardian_prefecture_id')->nullable();
            $table->string('guardian_city')->nullable();
            $table->string('guardian_other')->nullable();
            $table->text('commuting_time')->nullable();
            $table->text('nearest_station')->nullable();
            $table->text('motivation')->nullable();
            $table->text('pr')->nullable();
            $table->text('hobby')->nullable();
            $table->text('special_skill')->nullable();
            $table->text('health')->nullable();
            $table->text('favorite_subject')->nullable();
            $table->text('sports')->nullable();
            $table->text('wish')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
