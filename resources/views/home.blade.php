@extends('layouts.master-home')
@section('content')

<br>
@include('layouts.master-user-left')

<div class="col-md-7">

  <div class="box box-primary" style="border-top-color: white;">
    <div class="box-header with-border" style="border-bottom: 3px solid #ECEFF1;">
      <h3 class="box-title" style="color: #37474F;">Share an article, photo, or update</h3>
  </div>
  <!-- /.box-header -->
  <form class="form-horizontal" action="{{url('setting/post')}}" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
  <div class="box-body">
      <ul class="products-list product-list-in-box" style="color :#2c1507;">
        <li class="item" style="border-bottom: 1px solid #CFD8DC;">
          <input class="form-control input-sm" type="text" placeholder="Type your status" name="des_post">
      </li>
  </ul>
  <br>
  <label class="fa fa-camera" style="float: left;">
    <input type="file" style="display: none;" name="image">
</label>
<div class="pull-right">
<button class="btn btn-block btn-primary" type="submit" style="margin-top: -10px; float: right; width: 70px;"> Post </button>
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

    <img class="img-circle img-bordered-sm" src="{{asset('fotoupload/'. $listpost->user->profpic)}}" alt="User Image">
    <span class="username">
      <a href="#">{{$listpost->user->name}}</a>
  </span>
  <span class="description">Shared publicly</span>
</div>
<p>
{{$listpost->des_post}}
</p>
<!-- /.user-block -->
<div class="row margin-bottom">
  <div class="col-sm-10">
      <div class="row" style="margin-left: 50px;">
      <img src= "{{asset('fotoupload/'. $listpost->image)}}">
      </div>
  <!-- /.row -->
  </div>
<!-- /.col -->
</div>
<!-- /.row -->

<ul class="list-inline">
    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
    </li>
    </ul>
 <form class="form-horizontal" action="{{url('/Comment')}}" method="post">
   {{ csrf_field() }}

    <input class="form-control input-sm" type="text" placeholder="Type a comment" name="des_comment">
    <input type="hidden" name="idPost" value="{{$listpost->id}}">
    <div class="pull-right">
    <button class="btn btn-block btn-primary" type="submit" style="margin-top: 10px; float: right; width: 70px;"> Send </button>
    </div>
    <br>
    <br>
  </form>
     <!-- Comment -->
@foreach($listpost->comment()->orderBy('id','asc')->get() as $listcomment)
        <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="" src="{{asset('fotoupload/'. $listpost->user->profpic)}}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        {{$listcomment->users->name}}
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  {{$listcomment->des_comment}}
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
@endforeach

</div>
<!-- /.post -->
    <!-- Post -->
  @else
    <div class="post">
      <div class="user-block">
        <img class="img-circle img-bordered-sm" src="{{asset('fotoupload/'. $listpost->user->profpic)}}" alt="user image">
        <span class="username">
          <a href="#">{{$listpost->user->name}}</a>
      </span>
      <span class="description">Shared publicly</span>
  </div>
  <!-- /.user-block -->
  <p>
    {{$listpost->des_post}}
</p>
<ul class="list-inline">
    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
    </li>
    </ul>

     <form class="form-horizontal" action="{{url('/Comment')}}" method="post">
   {{ csrf_field() }}

   <input type="hidden" name="idPost" value="{{$listpost->id}}">
    <input class="form-control input-sm" type="text" placeholder="Type a comment" name="des_comment">
    <div class="pull-right">
    <button class="btn btn-block btn-primary" type="submit" style="margin-top: 10px; float: right; width: 70px;""> Send </button>
    </div>
    <br>
    <br>
  </form>
  <!-- Comment -->
@foreach($listpost->comment()->orderBy('id','asc')->get() as $listcomment)
        <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="" src="{{asset('fotoupload/'. $listcomment->users->profpic)}}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        {{$listcomment->users->name}}
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  {{$listcomment->des_comment}}
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
@endforeach
</div>
@endif
@endforeach
<!-- /.post -->


</div>
<!-- /.tab-pane -->
</div>

<div class="col-md-3">
  <div class="box box-danger" style="border-top-color: white;">
                <div class="box-header with-border" style="border-bottom: 3px solid #ECEFF1;">
                  <h3 class="box-title">Latest Members</h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    @if(isset($member))
                    @foreach($member as $listmember)
                    <li>
                    <a href="{{ url('/profile/'.$listmember->name) }}">
                      <img src="{{asset('fotoupload/'. $listmember->profpic)}}" alt="User Image">
                      <a class="users-list-name" href="#">{{$listmember->name}}</a>
                      <span class="users-list-date">Today</span>
                    </a>
                    </li>
                    @endforeach
                    @endif
                  </ul>
                  <!-- /.users-list -->
                </div>

                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="#" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
</div>
<br>
<br>
@stop