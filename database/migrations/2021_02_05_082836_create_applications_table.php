<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('ssc_institute')->nullable();
            $table->string('ssc_grade')->nullable();
            $table->string('ssc_year')->nullable();
            $table->string('hsc_institute')->nullable();
            $table->string('hsc_grade')->nullable();
            $table->string('hsc_year')->nullable();
            $table->string('graduation_institute')->nullable();
            $table->string('graduation_grade')->nullable();
            $table->string('graduation_year')->nullable();
            $table->string('master_institute')->nullable();
            $table->string('master_grade')->nullable();
            $table->string('master_year')->nullable();
            $table->string('lang1')->nullable();
            $table->string('lang1_read')->nullable();
            $table->string('lang1_write')->nullable();
            $table->string('lang1_speak')->nullable();
            $table->string('lang2')->nullable();
            $table->string('lang2_read')->nullable();
            $table->string('lang2_write')->nullable();
            $table->string('lang2_speak')->nullable();
            $table->string('lang3')->nullable();
            $table->string('lang3_read')->nullable();
            $table->string('lang3_write')->nullable();
            $table->string('lang3_speak')->nullable();
            $table->string('tech_lang1')->nullable();
            $table->string('tech_lang1_type')->nullable();
            $table->string('tech_lang2')->nullable();
            $table->string('tech_lang2_type')->nullable();
            $table->string('tech_lang3')->nullable();
            $table->string('tech_lang3_type')->nullable();
            $table->string('tech_lang4')->nullable();
            $table->string('tech_lang4_type')->nullable();
            $table->string('preferred_location')->nullable();
            $table->string('expected_ctc')->nullable();
            $table->string('current_ctc')->nullable();
            $table->string('notice_period')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
