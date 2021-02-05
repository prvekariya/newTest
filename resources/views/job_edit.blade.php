@extends('layouts.main')

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Edit Application detail</h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
  @if(Session::has('sucess'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ Session::get('sucess') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <form class="" action="{{route('update')}}" method="post">
    @csrf
    <input type="hidden" name="app_id" value="{{$record->id}}">
    <h3 class="text-center">Basic Details</h3>
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" name="name" value="{{$record->name}}" class="form-control" id="" placeholder="Enter name">
    </div>
    @if($errors->has('name'))
        <div class="err">{{ $errors->first('name') }}</div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" value="{{$record->email}}" class="form-control" id="" placeholder="Enter email">
    </div>
    @if($errors->has('email'))
        <div class="err">{{ $errors->first('email') }}</div>
    @endif
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Address</label>
      <textarea class="form-control" name="address" id="" rows="3">{{$record->address}}</textarea>
    </div>
    @if($errors->has('address'))
        <div class="err">{{ $errors->first('address') }}</div>
    @endif
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Gender : </label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" @if($record->gender == 'male') checked @endif type="radio" name="gender" id="inlineRadio1" value="male">
        <label class="form-check-label" for="inlineRadio1">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" @if($record->gender == 'female') checked @endif type="radio" name="gender" id="inlineRadio2" value="female">
        <label class="form-check-label" for="inlineRadio2">Female</label>
      </div>
    </div>
    @if($errors->has('gender'))
        <div class="err">{{ $errors->first('gender') }}</div>
    @endif
    <h3 class="text-center">Education details</h3>
    <div class="form-group">
      <label for="exampleInputEmail1">SSC Institute</label>
      <input type="text" name="ssc_institute" value="{{$record->ssc_institute}}" class="form-control" id="" placeholder="Enter SSC Institute">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">SSC grade</label>
      <input type="text" name="ssc_grade" value="{{$record->ssc_grade}}" class="form-control" id="" placeholder="Enter SSC grade">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">SSC Year</label>
      <input type="number" min="1900" max="{{date('Y')}}" step="1" name="ssc_year" value="{{$record->ssc_year}}" class="form-control" id="" placeholder="Enter SSC Year">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">HSC Institute</label>
      <input type="text" name="hsc_institute" value="{{$record->hsc_institute}}" class="form-control" id="" placeholder="Enter HSC Institute">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">HSC grade</label>
      <input type="text" name="hsc_grade" value="{{$record->hsc_grade}}" class="form-control" id="" placeholder="Enter HSC grade">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">HSC Year</label>
      <input type="number" min="1900" max="{{date('Y')}}" step="1" name="hsc_year" value="{{$record->hsc_year}}" class="form-control" id="" placeholder="Enter HSC Year">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Graduation Institute</label>
      <input type="text" name="graduation_institute" value="{{$record->graduation_institute}}" class="form-control" id="" placeholder="Enter Graduation Institute">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Graduation grade</label>
      <input type="text" name="graduation_grade" value="{{$record->graduation_grade}}" class="form-control" id="" placeholder="Enter Graduation grade">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Graduation Year</label>
      <input type="number" min="1900" max="{{date('Y')}}" step="1" name="graduation_year" value="{{$record->graduation_year}}" class="form-control" id="" placeholder="Enter Graduation Year">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Master Degree Institute</label>
      <input type="text" name="master_institute" value="{{$record->master_institute}}" class="form-control" id="" placeholder="Enter Master Degree Institute">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Master Degree grade</label>
      <input type="text" name="master_grade" value="{{$record->master_grade}}" class="form-control" id="" placeholder="Enter Master Degree grade">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Master Degree Year</label>
      <input type="number" min="1900" max="{{date('Y')}}" step="1" name="master_year" value="{{$record->master_year}}" class="form-control" id="" placeholder="Enter Master Degree Year">
    </div>
    <h3 class="text-center">Work Experience</h3>
    <div class="" id="sections">

    @forelse($record->companies as $company)
    <div class="section">
      <fieldset>
          <legend>Company</legend>
          <p>
              <label for="CompanyName">Company Name:</label>
              <input class="form-control" value="{{$company->company_name}}" name="company_name[]" id="" value="" type="text" />
          </p>
          <p>
              <label for="Experience">Experience:</label>
              <input class="form-control" value="{{$company->experience}}" name="experince[]" id="lastName" value="" type="text" />
          </p>
          <p><a href="#" class='remove'>Remove Section</a></p>
      </fieldset>
    </div>
    @empty
    <div class="section">
      <fieldset>
          <legend>Company</legend>
          <p>
              <label for="CompanyName">Company Name:</label>
              <input class="form-control" value="" name="company_name[]" id="" value="" type="text" />
          </p>
          <p>
              <label for="Experience">Experience:</label>
              <input class="form-control" value="" name="experince[]" id="lastName" value="" type="text" />
          </p>
          <p><a href="#" class='remove'>Remove Section</a></p>
      </fieldset>
    </div>
    @endforelse
    </div>
    <p><a href="#" class='addsection'>Add Section</a></p>
    <h3 class="text-center">Known Languages </h3><br>
    <div class="form-group">

      <div class="row">

        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" @if($record->lang1 == 'English') checked @endif name="lang1" type="checkbox" id="inlineCheckbox1" value="English">
            <label class="form-check-label" for="inlineCheckbox1">English</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" @if($record->lang1_read == 'read') checked @endif name="lang1_read" type="checkbox" id="inlineCheckbox1" value="read">
            <label class="form-check-label" for="inlineCheckbox1">Read</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" @if($record->lang1_write == 'write') checked @endif name="lang1_write" type="checkbox" id="inlineCheckbox1" value="write">
            <label class="form-check-label" for="inlineCheckbox1">Write</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input"  @if($record->lang1_speak == 'speak') checked @endif name="lang1_speak" type="checkbox" id="inlineCheckbox1" value="speak">
            <label class="form-check-label" for="inlineCheckbox1">Speak</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" @if($record->lang2 == 'Hindi') checked @endif name="lang2" type="checkbox" id="inlineCheckbox1" value="Hindi">
            <label class="form-check-label" for="inlineCheckbox1">Hindi</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" @if($record->lang2_read == 'read') checked @endif name="lang2_read" type="checkbox" id="inlineCheckbox1" value="read">
            <label class="form-check-label" for="inlineCheckbox1">Read</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="lang2_write" @if($record->lang2_write == 'write') checked @endif type="checkbox" id="inlineCheckbox1" value="write">
            <label class="form-check-label" for="inlineCheckbox1">Write</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="lang2_speak" @if($record->lang2_speak == 'speak') checked @endif  type="checkbox" id="inlineCheckbox1" value="speak">
            <label class="form-check-label" for="inlineCheckbox1">Speak</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="lang3" @if($record->lang3 == 'Gujrati') checked @endif  type="checkbox" id="inlineCheckbox1" value="Gujrati">
            <label class="form-check-label" for="inlineCheckbox1">Gujrati</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="lang3_read" @if($record->lang3_read == 'read') checked @endif  type="checkbox" id="inlineCheckbox1" value="read">
            <label class="form-check-label" for="inlineCheckbox1">Read</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="lang3_write" @if($record->lang3_write == 'write') checked @endif type="checkbox" id="inlineCheckbox1" value="write">
            <label class="form-check-label" for="inlineCheckbox1">Write</label>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-check form-check-inline">
            <input class="form-check-input" name="lang3_speak" @if($record->lang3_speak == 'speak') checked @endif  type="checkbox" id="inlineCheckbox1" value="speak">
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
              <input class="form-check-input" name="tech_lang1" @if($record->tech_lang1 == 'PHP') checked @endif  type="checkbox" id="inlineCheckbox1" value="PHP">
              <label class="form-check-label" for="inlineCheckbox1">PHP</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang1_type" type="radio" @if($record->tech_lang1_type == 'Beginer') checked @endif id="inlineCheckbox1" value="Beginer">
              <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang1_type" type="radio" @if($record->tech_lang1_type == 'Mideator') checked @endif id="inlineCheckbox1" value="Mideator">
              <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang1_type" @if($record->tech_lang1_type == 'Expert') checked @endif type="radio" id="inlineCheckbox1" value="Expert">
              <label class="form-check-label" for="inlineCheckbox1">Expert</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang2" @if($record->tech_lang2 == 'Mysql') checked @endif type="checkbox" id="inlineCheckbox1" value="Mysql">
              <label class="form-check-label" for="inlineCheckbox1">Mysql</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang2_type" @if($record->tech_lang2_type == 'Beginer') checked @endif type="radio" id="inlineCheckbox1" value="Beginer">
              <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang2_type" @if($record->tech_lang2_type == 'Mideator') checked @endif type="radio" id="inlineCheckbox1" value="Mideator">
              <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang2_type" @if($record->tech_lang2_type == 'Expert') checked @endif type="radio" id="inlineCheckbox1" value="Expert">
              <label class="form-check-label" for="inlineCheckbox1">Expert</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang3" @if($record->tech_lang3 == 'Laravel') checked @endif type="checkbox" id="inlineCheckbox1" value="Laravel">
              <label class="form-check-label" for="inlineCheckbox1">Laravel</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang3_type" @if($record->tech_lang3_type == 'Beginer') checked @endif type="radio" id="inlineCheckbox1" value="Beginer">
              <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang3_type" @if($record->tech_lang3_type == 'Mideator') checked @endif type="radio" id="inlineCheckbox1" value="Mideator">
              <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang3_type" @if($record->tech_lang3_type == 'Expert') checked @endif type="radio" id="inlineCheckbox1" value="Expert">
              <label class="form-check-label" for="inlineCheckbox1">Expert</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang4" @if($record->tech_lang4 == 'Oracle') checked @endif type="checkbox" id="inlineCheckbox1" value="Oracle">
              <label class="form-check-label" for="inlineCheckbox1">Oracle</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang4_type" @if($record->tech_lang4_type == 'Beginer') checked @endif type="radio" id="inlineCheckbox1" value="Beginer">
              <label class="form-check-label" for="inlineCheckbox1">Beginer</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang4_type" @if($record->tech_lang4_type == 'Mideator') checked @endif type="radio" id="inlineCheckbox1" value="Mideator">
              <label class="form-check-label" for="inlineCheckbox1">Mideator</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="tech_lang4_type" @if($record->tech_lang4_type == 'Expert') checked @endif type="radio" id="inlineCheckbox1" value="Expert">
              <label class="form-check-label" for="inlineCheckbox1">Expert</label>
            </div>
          </div>
        </div>
    </div>
    <h3 class="text-center">Preference </h3><br>
    <div class="form-group">
      <label class="form-check-label" for="inlineCheckbox1">Preferred Location</label>
      <select name="preferred_location" class="form-control">
        <option @if($record->preferred_location == 'Ahmedabad') selected @endif value="Ahmedabad">Ahmedabad</option>
        <option @if($record->preferred_location == 'Rajkot') selected @endif value="Rajkot">Rajkot</option>
        <option @if($record->preferred_location == 'Mumbai') selected @endif value="Mumbai">Mumbai</option>

      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Expected CTC : </label>
      <input type="text" name="expected_ctc" value="{{$record->expected_ctc}}" class="form-control" id="" placeholder="Enter Expected CTC">
    </div>
    @if($errors->has('expected_ctc'))
        <div class="err">{{ $errors->first('expected_ctc') }}</div>
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Current CTC : </label>
      <input type="text" name="current_ctc" value="{{$record->current_ctc}}" class="form-control" id="" placeholder="Enter Current CTC">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Notice Period : </label>
      <input type="text" name="notice_period" value="{{$record->notice_period}}" class="form-control" id="" placeholder="Enter Notice Period">
    </div>
    @if($errors->has('notice_period'))
        <div class="err">{{ $errors->first('notice_period') }}</div>
    @endif
    <div class="text-center">
      <button type="submit" class="btn btn-primary center">Submit</button>
    </div>
  </form>
</div>
<!-- end row -->

@endsection
@push('css')
<style media="screen">
  .err{
    color:red;
  }
</style>
@endpush
@push('js')

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
@endpush
