<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style media="screen">
          .error{
            color:red;
          }
        </style>
    </head>
    <body>
        <div class="container">
          @if(Session::has('sucess'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session::get('sucess') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <h1 class="text-center">Application Forms</h1><br><br>
          <form class="" action="{{route('save_application')}}" method="post">
            @csrf
            <h3 class="text-center">Basic Details</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" value="{{old('name')}}" class="form-control" id="" placeholder="Enter name">
            </div>
            @if($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" value="{{old('email')}}" class="form-control" id="" placeholder="Enter email">
            </div>
            @if($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Address</label>
              <textarea class="form-control" name="address" id="" rows="3">{{old('address')}}</textarea>
            </div>
            @if($errors->has('address'))
                <div class="error">{{ $errors->first('address') }}</div>
            @endif
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Gender : </label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" checked type="radio" name="gender" id="inlineRadio1" value="male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
            </div>
            @if($errors->has('gender'))
                <div class="error">{{ $errors->first('gender') }}</div>
            @endif
            <h3 class="text-center">Education details</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">SSC Institute</label>
              <input type="text" name="ssc_institute" value="{{old('ssc_institute')}}" class="form-control" id="" placeholder="Enter SSC Institute">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">SSC grade</label>
              <input type="text" name="ssc_grade" value="{{old('ssc_grade')}}" class="form-control" id="" placeholder="Enter SSC grade">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">SSC Year</label>
              <input type="number" min="1900" max="{{date('Y')}}" step="1" name="ssc_year" value="{{old('ssc_year')}}" class="form-control" id="" placeholder="Enter SSC Year">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">HSC Institute</label>
              <input type="text" name="hsc_institute" value="{{old('hsc_institute')}}" class="form-control" id="" placeholder="Enter HSC Institute">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">HSC grade</label>
              <input type="text" name="hsc_grade" value="{{old('hsc_grade')}}" class="form-control" id="" placeholder="Enter HSC grade">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">HSC Year</label>
              <input type="number" min="1900" max="{{date('Y')}}" step="1" name="hsc_year" value="{{old('hsc_year')}}" class="form-control" id="" placeholder="Enter HSC Year">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Graduation Institute</label>
              <input type="text" name="graduation_institute" value="{{old('graduation_institute')}}" class="form-control" id="" placeholder="Enter Graduation Institute">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Graduation grade</label>
              <input type="text" name="graduation_grade" value="{{old('graduation_grade')}}" class="form-control" id="" placeholder="Enter Graduation grade">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Graduation Year</label>
              <input type="number" min="1900" max="{{date('Y')}}" step="1" name="graduation_year" value="{{old('graduation_year')}}" class="form-control" id="" placeholder="Enter Graduation Year">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Master Degree Institute</label>
              <input type="text" name="master_institute" value="{{old('master_institute')}}" class="form-control" id="" placeholder="Enter Master Degree Institute">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Master Degree grade</label>
              <input type="text" name="master_grade" value="{{old('master_grade')}}" class="form-control" id="" placeholder="Enter Master Degree grade">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Master Degree Year</label>
              <input type="number" min="1900" max="{{date('Y')}}" step="1" name="master_year" value="{{old('master_year')}}" class="form-control" id="" placeholder="Enter Master Degree Year">
            </div>
            <h3 class="text-center">Work Experience</h3>
            <div class="" id="sections">


            <div class="section">
              <fieldset>
                  <legend>Company</legend>
                  <p>
                      <label for="CompanyName">Company Name:</label>
                      <input class="form-control" name="company_name[]" id="" value="" type="text" />
                  </p>
                  <p>
                      <label for="Experience">Experience:</label>
                      <input class="form-control" name="experince[]" id="lastName" value="" type="text" />
                  </p>
                  <p><a href="#" class='remove'>Remove Section</a></p>
              </fieldset>
            </div>
            </div>
            <p><a href="#" class='addsection'>Add Section</a></p>
            <h3 class="text-center">Known Languages </h3><br>
            <div class="form-group">

              <div class="row">

                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang1" type="checkbox" id="inlineCheckbox1" value="English">
                    <label class="form-check-label" for="inlineCheckbox1">English</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang1_read" type="checkbox" id="inlineCheckbox1" value="read">
                    <label class="form-check-label" for="inlineCheckbox1">Read</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang1_write" type="checkbox" id="inlineCheckbox1" value="write">
                    <label class="form-check-label" for="inlineCheckbox1">Write</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang1_speak" type="checkbox" id="inlineCheckbox1" value="speak">
                    <label class="form-check-label" for="inlineCheckbox1">Speak</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang2" type="checkbox" id="inlineCheckbox1" value="Hindi">
                    <label class="form-check-label" for="inlineCheckbox1">Hindi</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang2_read" type="checkbox" id="inlineCheckbox1" value="read">
                    <label class="form-check-label" for="inlineCheckbox1">Read</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang2_write" type="checkbox" id="inlineCheckbox1" value="write">
                    <label class="form-check-label" for="inlineCheckbox1">Write</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang2_speak" type="checkbox" id="inlineCheckbox1" value="speak">
                    <label class="form-check-label" for="inlineCheckbox1">Speak</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang3" type="checkbox" id="inlineCheckbox1" value="Gujrati">
                    <label class="form-check-label" for="inlineCheckbox1">Gujrati</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang3_read" type="checkbox" id="inlineCheckbox1" value="read">
                    <label class="form-check-label" for="inlineCheckbox1">Read</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang3_write" type="checkbox" id="inlineCheckbox1" value="write">
                    <label class="form-check-label" for="inlineCheckbox1">Write</label>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" name="lang3_speak" type="checkbox" id="inlineCheckbox1" value="speak">
                    <label class="form-check-label" for="inlineCheckbox1">Speak</label>
                  </div>
                </div>
              </div>
              <br><br>

              <h3 class="text-center">Technical Experience </h3><br>
              <div class="form-group">

                <div class="row">

                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang1" type="checkbox" id="inlineCheckbox1" value="PHP">
                      <label class="form-check-label" for="inlineCheckbox1">PHP</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang1_type" type="radio" id="inlineCheckbox1" value="Beginer">
                      <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang1_type" type="radio" id="inlineCheckbox1" value="Mideator">
                      <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang1_type" type="radio" id="inlineCheckbox1" value="Expert">
                      <label class="form-check-label" for="inlineCheckbox1">Expert</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang2" type="checkbox" id="inlineCheckbox1" value="Mysql">
                      <label class="form-check-label" for="inlineCheckbox1">Mysql</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang2_type" type="radio" id="inlineCheckbox1" value="Beginer">
                      <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang2_type" type="radio" id="inlineCheckbox1" value="Mideator">
                      <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang2_type" type="radio" id="inlineCheckbox1" value="Expert">
                      <label class="form-check-label" for="inlineCheckbox1">Expert</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang3" type="checkbox" id="inlineCheckbox1" value="Laravel">
                      <label class="form-check-label" for="inlineCheckbox1">Laravel</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang3_type" type="radio" id="inlineCheckbox1" value="Beginer">
                      <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang3_type" type="radio" id="inlineCheckbox1" value="Mideator">
                      <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang3_type" type="radio" id="inlineCheckbox1" value="Expert">
                      <label class="form-check-label" for="inlineCheckbox1">Expert</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang4" type="checkbox" id="inlineCheckbox1" value="Oracle">
                      <label class="form-check-label" for="inlineCheckbox1">Oracle</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang4_type" type="radio" id="inlineCheckbox1" value="Beginer">
                      <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang4_type" type="radio" id="inlineCheckbox1" value="Mideator">
                      <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" name="tech_lang4_type" type="radio" id="inlineCheckbox1" value="Expert">
                      <label class="form-check-label" for="inlineCheckbox1">Expert</label>
                    </div>
                  </div>
                </div>
            </div>
            <h3 class="text-center">Preference </h3><br>
            <div class="form-group">
              <label class="form-check-label" for="inlineCheckbox1">Preferred Location</label>
              <select name="preferred_location" value="{{old('preferred_location')}}" class="form-control">
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Rajkot">Rajkot</option>
                <option value="Mumbai">Mumbai</option>

              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Expected CTC : </label>
              <input type="text" name="expected_ctc" value="{{old('expected_ctc')}}" class="form-control" id="" placeholder="Enter Expected CTC">
            </div>
            @if($errors->has('expected_ctc'))
                <div class="error">{{ $errors->first('expected_ctc') }}</div>
            @endif
            <div class="form-group">
              <label for="exampleInputEmail1">Current CTC : </label>
              <input type="text" name="current_ctc" value="{{old('current_ctc')}}" class="form-control" id="" placeholder="Enter Current CTC">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Notice Period : </label>
              <input type="text" name="notice_period" value="{{old('notice_period')}}" class="form-control" id="" placeholder="Enter Notice Period">
            </div>
            @if($errors->has('notice_period'))
                <div class="error">{{ $errors->first('notice_period') }}</div>
            @endif
            <div class="text-center">
              <button type="submit" class="btn btn-primary center">Submit</button>
            </div>
          </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.js')}}" ></script>

    <script type="text/javascript">
    //define template
var template = $('#sections .section:first').clone();

//define counter
var sectionsCount = 1;

//add new section
$('body').on('click', '.addsection', function() {

  //increment
  sectionsCount++;

  //loop through each input
  var section = template.clone().find(':input').each(function(){

      //set id to store the updated section number
      var newId = this.id + sectionsCount;

      //update for label
      $(this).prev().attr('for', newId);

      //update id
      this.id = newId;

  }).end()

  //inject new section
  .appendTo('#sections');
  return false;
});

//remove section
$('#sections').on('click', '.remove', function() {
  //fade out section
  $(this).parent().fadeOut(300, function(){
      //remove parent element (main section)
      $(this).parent().parent().empty();
      return false;
  });
  return false;
});
    </script>
    </body>

</html>
