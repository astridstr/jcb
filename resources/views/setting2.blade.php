@extends('layouts.master-home')
@section('content')

<br>
<div class="col-md-2">
  <!-- Profile Image -->
  <div class="box box-primary" style="border-top-color: #8d6f52">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture" style="border: 2px solid #8d6f52;">

      <h3 class="profile-username text-center" style="color: #2c1507;">Nina Mcintire</h3>

      <p class="text-muted text-center" style="color: #2c1507;">Software Engineer</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item" style="border-bottom: 1px solid #8d6f52; color: #2c1507;" >
          <b >Followers</b> <a class="pull-right" style="color: #2c1507;">1,322</a>
        </li>
        <li class="list-group-item" style="border-bottom: 1px solid #8d6f52; color: #2c1507;">
          <b>Following</b> <a class="pull-right" style="color: #2c1507;">543</a>
        </li>
        <li class="list-group-item" style="border-bottom: 1px solid #8d6f52; color: #2c1507;">
          <b>Posts</b> <a class="pull-right" style="color: #2c1507;">13,287</a>
        </li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
<div class="col-md-7">
  <div class="box box-primary" style="border-top-color: #2c1507;">
    <div class="box-header with-border" style="border-bottom: 3px solid #2c1507;">
      <h3 class="box-title">Setting Your Profile</h3>
    </div>
    <br>
    <form action="{{url('setting/post')}}" method="post" class="form-horizontal">
      <div class="form-group">
       {{ csrf_field() }}
        <label for="inputName" class="col-sm-2 control-label">Name</label>
        <input type="text" name="name" required="">
      </div>
      <button type="submit">Submit</button>
    </form>
    <br>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@stop