 @extends('layouts.master-aboutpl')
 @section('content')

 <!-- Profile -->
 <div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
    <i class="fa fa-graduation-cap margin-r-5" style="color: white;"></i>
    <h3 class="box-title" style="color: white">Education</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <ul class="products-list product-list-in-box" style="color :#37474F;">
     @foreach($edu as $listedu)
     <li class="item" style="border-bottom: 1px solid #455A64;">
      <div class="product-info">
        <a href="javascript:void(0)" class="product-title" style="color :#37474F;">{{$listedu->des_education}}</a>
      </div>
    </li>
    @endforeach
    <!-- /.item -->
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
    <i class="fa fa-paper-plane margin-r-5" style="color: white;"></i>
    <h3 class="box-title" style="color: white;">Experience</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <ul class="products-list product-list-in-box" style="color :#37474F;">
      @foreach($expe as $listexpe)
      <li class="item" style="border-bottom: 1px solid #8d6f52;">
        <div class="product-info">
          <a href="javascript:void(0)" class="product-title" style="color :#37474F;">{{$listexpe->des_experience}}</a>
        </div>
      </li>
      @endforeach  
      <!-- /.item -->
    </ul>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
    <i class="fa fa-heartbeat margin-r-5" style="color: white;"></i>
    <h3 class="box-title" style="color: white;">Social Activity</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <ul class="products-list product-list-in-box" style="color :#37474F;">
      @foreach($socac as $listsocac)
      <li class="item" style="border-bottom: 1px solid #8d6f52;">
        <div class="product-info">
          <a href="javascript:void(0)" class="product-title" style="color :#37474F;">{{$listsocac->des_socialactivity}}</a>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
   <i class="fa  fa-group margin-r-5" style="color: white;"></i>
   <h3 class="box-title" style="color: white;">Organization</h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
  <ul class="products-list product-list-in-box" style="color :#37474F;">
    @foreach($orga as $listorga)
    <li class="item" style="border-bottom: 1px solid #8d6f52;">
      <div class="product-info">
        <a href="javascript:void(0)" class="product-title" style="color :#37474F;">{{$listorga->des_organization}}</a>
      </div>
    </li>
    @endforeach
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->


<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
    <i class="fa fa-trophy margin-r-5" style="color: white;"></i>
    <h3 class="box-title" style="color: white;">Achievement</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <ul class="products-list product-list-in-box" style="color :#37474F;">
      @foreach($achi as $listachi)
      <li class="item" style="border-bottom: 1px solid #8d6f52;">
        <div class="product-info">
          <a href="javascript:void(0)" class="product-title" style="color :#37474F;">{{$listachi->des_achievement}}</a>
        </div>
      </li>
      @endforeach  
    </ul>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
   <i class="fa fa-ship margin-r-5" style="color: white;"></i>
   <h3 class="box-title" style="color: white;">Project</h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
  <ul class="products-list product-list-in-box" style="color :#37474F;">
    @foreach($proj as $listproj)
    <li class="item" style="border-bottom: 1px solid #8d6f52;">
      <div class="product-info">
        <a href="javascript:void(0)" class="product-title" style="color :#37474F;">{{$listproj->des_project}}</a>
      </div>
    </li>
    @endforeach
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
   <i class="fa fa-book margin-r-5" style="color: white;"></i>
   <h3 class="box-title" style="color: white;">Language Skill</h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
  <ul class="products-list product-list-in-box" style="color :#37474F;">
    @foreach($lang as $listlang)
    <li class="item" style="border-bottom: 1px solid #8d6f52;">
      <div class="product-info">
        <a href="#">
          <h4 style="color :#37474F;">
            {{$listlang->des_languageskill}}
          </h4>
          <div class="progress xs">
            <div class="progress-bar progress-bar-aqua" style="width: {{$listlang->score_l}}%; background-color :#263238;" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

            </div>
          </div>
        </a>
      </div>
    </li>
    @endforeach
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
   <i class="fa fa-laptop margin-r-5" style="color: white;"></i>
   <h3 class="box-title" style="color: white;">Expertise</h3>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
  <ul class="products-list product-list-in-box" style="color :#37474F;">
    @foreach($tise as $listtise)
    <li class="item" style="border-bottom: 1px solid #8d6f52;">
      <div class="product-info">
        <a href="#">
          <h4 style="color :#37474F;">
            {{$listtise->des_expertise}}
          </h4>
          <div class="progress xs">
          <div class="progress-bar progress-bar-aqua" style="width: {{$listtise->score_e}}%; background-color :#263238;" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

            </div>
          </div>
        </a>
      </div>
    </li>
    @endforeach
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->

@stop