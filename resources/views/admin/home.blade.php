@extends('admin.layout')
@section('content')

<br>
<div class="col-md-2">
  <!-- Profile Image -->
  <div class="box box-primary" style="width:210px; border-top-color: white">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{asset('dist/img/logo.jpg')}}" alt="User profile picture" style="border: 2px solid #455A64;">

      <h3 class="profile-username text-center" style="color: #263238;">Admin</h3>

      <p class="text-muted text-center" style="color: #263238;"></p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item" style="border-bottom: 1px solid #ECEFF1; color: #263238;" >
          <b >Users</b> <a class="pull-right" style="color: #263238;">1,322</a>
      </li>
      <li class="list-group-item" style="border-bottom: 1px solid #ECEFF1; color: #263238;">
          <b>Posts</b> <a class="pull-right" style="color: #263238;">6,699</a>
      </li>
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>

<div class="col-md-7">

  <div class="box box-primary" style="border-top-color: white;">
    <div class="box-header with-border" style="border-bottom: 3px solid #ECEFF1;">
      <h3 class="box-title" style="color: #37474F;">Share a Jobs </h3>
  </div>
  <!-- /.box-header -->
  <form class="form-horizontal" action="{{url('admin/job/post')}}" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
  <div class="box-body">
    <ul class="products-list product-list-in-box" style="color :#2c1507;">
      <div class="form-group">
        <label for="inputNamaPerusahaan" class="col-sm-3 control-label">Company's name</label>

        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputNamaPerusahaan" placeholder="Company's name" name="nama_perusahaan">
        </div>
      </div>
      <div class="form-group">
        <label for="inputJobTitle" class="col-sm-3 control-label">Title</label>

        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputJobTitle" placeholder="Title" name="title_job">
        </div>
      </div>
      <div class="form-group">
        <label for="inputJobDes" class="col-sm-3 control-label">Description</label>

        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputJobDes" placeholder="Type job's description" name="des_job">
        </div>
      </div>

    </ul>
  <br>
  <div class="row">
  <div class="col-sm-3">
  <label class="fa fa-camera" style="float: left;">
      <input type="file" style="display: none;" name="image">
  </label>
  </div>
  <div class="col-sm-8">
  <button class="btn btn-block btn-primary" type="submit" style="margin-top: -10px; float: right; width: 70px;"> Post </button>
  </div>
</div>
</div>
</form>
<!-- /.box-body -->
</div>
<!-- /.box -->

<div class="box box-primay" id="activity" style="border-top-color: #ECEFF1; padding: 20px;">

@foreach($post as $listpost)
@if(isset($listpost->image))
<!-- Post -->
<div class="post">
  <div class="user-block">

    <img class="img-circle img-bordered-sm" src="{{asset('dist/img/logo.jpg')}}" alt="User Image">
    <span class="username">
      <a href="#">{{$listpost->nama_perusahaan}}</a>
  </span>
  <span class="description">Shared publicly</span>
</div>
<a href="#"><h4>
        <b>{{$listpost->title_job}}</b>
      </h4></a> 
<p>
{{$listpost->des_job}}
</p>
<ul class="list-inline" style="border-bottom: 1px solid #CCC;">
</ul>
<!-- /.user-block -->
<div class="row margin-bottom">
  <div class="col-sm-10">
      <div class="row" style="margin-left: 50px;">
      <img src= "{{asset('jobimage/'. $listpost->image)}}">
      </div>
  <!-- /.row -->
  </div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<br>
<!-- /.post -->
    <!-- Post -->
  @else
<div class="post">
  <div class="user-block">
    <img class="img-circle img-bordered-sm" src="{{asset('dist/img/logo.jpg')}}" alt="User Image">
    <span class="username">
<a href="#"><h4>
        <b>{{$listpost->title_job}}</b>
      </h4></a>      
    </span>
    <span class="description">{{$listpost->nama_perusahaan}}</span>
</div>

<p>
  {{$listpost->des_job}}
</p>
<ul class="list-inline" style="border-bottom: 1px solid #CCC;">
</ul>
@endif
@endforeach
<!-- /.post -->
</div>
</div>
</div>
@stop