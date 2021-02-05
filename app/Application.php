<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  protected $table = "applications";

  protected $fillable = [
      'name', 'email', 'address','gender','ssc_institute','ssc_grade','ssc_year','hsc_institute','hsc_grade','hsc_year','graduation_institute','graduation_grade','graduation_year','master_institute','master_grade','master_year','lang1','lang1_read','lang1_write','lang1_speak','lang2','lang2_read','lang2_write','lang2_speak','lang3','lang3_read','lang3_write','lang3_speak','tech_lang1','tech_lang1_type','tech_lang2','tech_lang2_type','tech_lang3','tech_lang3_type','tech_lang4','tech_lang4_type','preferred_location','expected_ctc','current_ctc','notice_period',
  ];


  public function companies(){
    return $this->hasMany('App\Company','application_id','id');
  }
}
