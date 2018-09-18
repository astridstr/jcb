@extends('layouts.master-home')
@section('content')

<br>
@include('layouts.master-user-left')

<div class="col-md-7">
  <div class="box box-primary" style="border-top-color: #263238;">
    <div class="box-header with-border" style="background-color: #263238; border-bottom: 3px solid #263238;">
      <h3 class="box-title" style="color: white;">Setting Your Profile</h3>
    </div>
    
    <br>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        {{ csrf_field() }}
        <label for="inputName" class="col-sm-2 control-label">Name</label>

        <div class="col-sm-9">
          <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{Auth::user()->name}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputJob" class="col-sm-2 control-label">Job</label>

        <div class="col-sm-9">
          <input type="text" class="form-control" id="inputName" placeholder="Job" name="job" value="{{Auth::user()->job}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputStatus" class="col-sm-2 control-label">Status</label>

        <div class="col-sm-9">
          <input type="text" class="form-control" id="inputStatus" placeholder="Color Blind Status" name="status" value="{{Auth::user()->status}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputGender" class="col-sm-2 control-label">Gender</label>

        <div class="col-sm-4">
        <input type="radio" value="Male" id="inputMale" name="gender" checked> Male
        </div>
        <div class="col-sm-4">
          <input type="radio" value="Female" id="inputFemale" name="gender" checked> Female
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress" class="col-sm-2 control-label">Address</label>

        <div class="col-sm-9">
          <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address" value="{{Auth::user()->address}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputBirthday" class="col-sm-2 control-label">Birthday</label>

        <div class="col-sm-9">
          <input type="date" class="form-control" id="inputBirthday" name="birthday" value="{{Auth::user()->birthday}}">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEducation" class="col-sm-2 control-label">Education</label>

        <div class="col-sm-9">

          @if(!$edu->isEmpty())
          @foreach($edu as $listedu)
          <input type="text" class="form-control" id="inputEducation" placeholder="Education" name="education[]" value="{{$listedu->des_education}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputEducation" placeholder="Education" name="education[]">
          @endif
          <div id="addmore"></div>
          <div id="add" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
      </div>

      <div class="form-group">
        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
        
        <div class="col-sm-9">
          @if(!$expe->isEmpty())
          @foreach($expe as $listexpe)
          <input type="text" class="form-control" id="inputExperience" placeholder="Experience" name="experience[]" value="{{$listexpe->des_experience}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputExperience" placeholder="Experience" name="experience[]">
          @endif
          <div id="addmore2"></div>
          <div id="add2" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
        
      </div>
      <div class="form-group">
        <label for="inputSocialActivity" class="col-sm-2 control-label">Social Activity</label>

        <div class="col-sm-9">
          @if(!$socac->isEmpty())
          @foreach($socac as $listsocac)
          <input type="text" class="form-control" id="inputSocialActivity" placeholder="Social Activity" name="socialactivity[]" value="{{$listsocac->des_socialactivity}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputSocialActivity" placeholder="Social Activity" name="socialactivity[]">
          @endif
          <div id="addmore4"></div>
          <div id="add4" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputOrganization" class="col-sm-2 control-label">Organization</label>

        <div class="col-sm-9">
          @if(!$orga->isEmpty())
          @foreach($orga as $listorga)
          <input type="text" class="form-control" id="inputOrganization" placeholder="Organization" name="organization[]" value="{{$listorga->des_organization}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputOrganization" placeholder="Organization" name="organization[]">          
          @endif
          <div id="addmore5"></div>
          <div id="add5" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputAchievement" class="col-sm-2 control-label">Achievement</label>

        <div class="col-sm-9">
          @if(!$achi->isEmpty())
          @foreach($achi as $listachi)
          <input type="text" class="form-control" id="inputAchievement" placeholder="Achievement" name="achievement[]" value="{{$listachi->des_achievement}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputAchievement" placeholder="Achievement" name="achievement[]">
          @endif
          <div id="addmore6"></div>
          <div id="add6" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputProject" class="col-sm-2 control-label">Project</label>

        <div class="col-sm-9">
          @if(!$proj->isEmpty())
          @foreach($proj as $listproj)
          <input type="text" class="form-control" id="inputProject" placeholder="Project" name="project[]" value="{{$listproj->des_project}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputProject" placeholder="Project" name="project[]">
          @endif
          <div id="addmore7"></div>
          <div id="add7" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputLanguageSkill" class="col-sm-2 control-label">Language Skill</label>

        <div class="col-sm-4">
          @if(!$lang->isEmpty())
          @foreach($lang as $listlang)
          <input type="text" class="form-control" id="inputLanguageSkill" placeholder="Language Skill" name="language[]" value="{{$listlang->des_languageskill}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputLanguageSkill" placeholder="Language Skill" name="language[]">
          @endif
        </div>
        <label for="inputScore" class="col-sm-2 control-label">Score</label>

        <div class="col-sm-3">
          @if(!$lang->isEmpty())
          @foreach($lang as $listlang)
          <input type="text" class="form-control" id="inputScore" placeholder="1-100" name="score_l[]" value="{{$listlang->score_l}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputScore" placeholder="1-100" name="score_l[]">
          @endif
        </div>
        <div class="col-sm-offset-2 col-sm-10">
          <div id="addmore8"></div>
          <div id="add8" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputExpertise" class="col-sm-2 control-label">Expertise</label>

        <div class="col-sm-4">
          @if(!$tise->isEmpty())
          @foreach($tise as $listtise)
          <input type="text" class="form-control" id="inputExpert" placeholder="Expertise" name="expertise[]" value="{{$listtise->des_expertise}}">
          @endforeach
          @else
          <input type="text" class="form-control" id="inputExpert" placeholder="Expertise" name="expertise[]">
          @endif
        </div>
        <label for="inputScore" class="col-sm-2 control-label">Score</label>

        <div class="col-sm-3">
         @if(!$tise->isEmpty())
         @foreach($tise as $listtise)
         <input type="text" class="form-control" id="inputScore" placeholder="1-100" name="score_e[]" value="{{$listtise->score_e}}">
         @endforeach
         @else
         <input type="text" class="form-control" id="inputScore" placeholder="1-100" name="score_e[]">
         @endif
       </div>
       <div class="col-sm-offset-2 col-sm-10">
        <div id="addmore9"></div>
        <div id="add9" class="btn btn-success btn-xs" style="margin-top: 10px"><i class="fa fa-plus-circle"></i>Add More</div>
      </div>
    </div>
    <div class="form-group">
      <label for="profpic" class="col-sm-2 control-label">Photo Profile</label>
      <div class="col-sm-4">
        <input type="file" name="profpic">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> I agree to the <a href="https://almsaeedstudio.com/themes/AdminLTE/pages/examples/profile.html#">terms and conditions</a>
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </form>
  <br>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#add').click(function(){
    $('#addmore').append('<div class="col-sm-12" style="margin-left: -15px;"><input type="text" class="form-control" id="inputEducation" placeholder="Education" name="education[]"></div>');
    $('.add').select2();
  });
  $('#add2').click(function(){
    $('#addmore2').append('<div class="col-sm-12" style="margin-left: -15px;"><input type="text" class="form-control" id="inputExperience" placeholder="Experience" name="experience[]"></div>');
    $('.add2').select3();
  });
  $('#add4').click(function(){
    $('#addmore4').append('<div class="col-sm-12" style="margin-left: -15px;"><input type="text" class="form-control" id="inputSocialActivity" placeholder="Social Activity" name="socialactivity[]"></div>');
    $('.add4').select5();
  });
  $('#add5').click(function(){
    $('#addmore5').append('<div class="col-sm-12" style="margin-left: -15px;"><input type="text" class="form-control" id="inputOrganization" placeholder="Organization" name="organization[]"></div>');
    $('.add5').select6();
  });
  $('#add6').click(function(){
    $('#addmore6').append('<div class="col-sm-12" style="margin-left: -15px;"><input type="text" class="form-control" id="inputAchievement" placeholder="Achievement" name="achievement[]"></div>');
    $('.add6').select7();
  });
  $('#add7').click(function(){
    $('#addmore7').append('<div class="col-sm-12" style="margin-left: -15px;"><input type="text" class="form-control" id="inputProject" placeholder="Project" name="project[]"></div>');
    $('.add7').select8();
  });
  $('#add8').click(function(){
    $('#addmore8').append('<div class="col-sm-5" style="margin-left: -15px;"><input type="text" class="form-control" id="inputLanguageSkill" placeholder="Language Skill" name="language[]"></div><div class="col-sm-3"></div><div class="col-sm-4"><input style="margin-left: -24px;" type="text" class="form-control" id="inputScore" placeholder="1-100" name="score_l[]"></div>');
    $('.add8').select9();
  });
  $('#add9').click(function(){
    $('#addmore9').append('<div class="col-sm-5" style="margin-left: -15px;"><input type="text" class="form-control" id="inputExpert" placeholder="Expertise" name=expertise[]></div><div class="col-sm-3"></div><div class="col-sm-4"><input style="margin-left: -24px;" type="text" class="form-control" id="inputScore" placeholder="1-100" name="score_e[]"></div>');
    $('.add9').select10();
  });
</script>
@stop