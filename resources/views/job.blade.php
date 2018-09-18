@extends('layouts.master-home')
@section('content')

<br>
@include('layouts.master-user-left')

<div class="col-md-7">

  <div class="box box-primary" style="border-top-color: white;">
    <div class="box-header with-border" style="border-bottom: 3px solid #ECEFF1;">
      <h3 class="box-title" style="color: #37474F;">Jobs you may be interested in</h3>
  </div>

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