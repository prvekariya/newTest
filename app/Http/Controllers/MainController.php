<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use App\Company;

class MainController extends Controller
{

  public function save(Request $request){
    $ap = new Application;
    $ap->name = $request->name;
    $ap->email = $request->email;
    $ap->address = $request->address;
    $ap->gender = $request->gender;
    $ap->ssc_institute = $request->ssc_institute;
    $ap->ssc_grade = $request->ssc_grade;
    $ap->ssc_year = $request->ssc_year;
    $ap->hsc_institute = $request->hsc_institute;
    $ap->hsc_grade = $request->hsc_grade;
    $ap->hsc_year = $request->hsc_year;
    $ap->graduation_institute = $request->graduation_institute;
    $ap->graduation_grade = $request->graduation_grade;
    $ap->graduation_year = $request->graduation_year;
    $ap->master_institute = $request->master_institute;
    $ap->master_grade = $request->master_grade;
    $ap->master_year = $request->master_year;
    $ap->lang1 = @$request->lang1;
    $ap->lang1_read = @$request->lang1_read;
    $ap->lang1_write = @$request->lang1_write;
    $ap->lang1_speak = @$request->lang1_speak;
    $ap->lang2 = @$request->lang2;
    $ap->lang2_read = @$request->lang2_read;
    $ap->lang2_write = @$request->lang2_write;
    $ap->lang2_speak = @$request->lang2_speak;
    $ap->lang3 = @$request->lang3;
    $ap->lang3_read = @$request->lang3_read;
    $ap->lang3_write = @$request->lang3_write;
    $ap->lang3_speak = @$request->lang3_speak;
    $ap->tech_lang1 = @$request->tech_lang1;
    $ap->tech_lang1_type = @$request->tech_lang1_type;
    $ap->tech_lang2 = @$request->tech_lang2;
    $ap->tech_lang2_type = @$request->tech_lang2_type;
    $ap->tech_lang3 = @$request->tech_lang3;
    $ap->tech_lang3_type = @$request->tech_lang3_type;
    $ap->tech_lang4 = @$request->tech_lang4;
    $ap->tech_lang4_type = @$request->tech_lang4_type;
    $ap->preferred_location = $request->preferred_location;
    $ap->expected_ctc = $request->expected_ctc;
    $ap->current_ctc = $request->current_ctc;
    $ap->notice_period = $request->notice_period;
    if($ap->save()){
      $num = count($request->company_name);
      if($num > 0){
        for ($i=0; $i < $num; $i++) {
          if($request->company_name[$i] != null){
            $co = new Company;
            $co->company_name = $request->company_name[$i];
            $co->experince = $request->experince[$i];
            $co->save();
          }
        }
      }
    }
    session()->flash('sucess','Application Sent Successfully');
    return redirect('/');
  }

}
