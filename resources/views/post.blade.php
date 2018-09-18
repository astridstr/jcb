  @extends('layouts.master-about')
  @section('content')

<div class="col-md-12">
<div class="box box-primay" id="activity" style="border-top-color: #263238; padding: 20px;">

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
    <li class="pull-right">
      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
        (5)</a></li>
    </ul>
 <form class="form-horizontal" action="{{url('/Comment')}}" method="post">
   {{ csrf_field() }}

    <input class="form-control input-sm" type="text" placeholder="Type a comment" name="des_comment">
    <input type="hidden" name="idPost" value="{{$listpost->id}}">
    <div class="pull-right">
    <button class="btn btn-block btn-primary" type="submit" style="background-color: #263238; float: right; border-color: #263238;"> Send </button>
    </div>
    <br>
    <br>
  </form>
     <!-- Comment -->
@foreach($listpost->comment()->orderBy('id','desc')->get() as $listcomment)
        <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="" src="{{asset('fotoupload/'. $listpost->image)}}" alt="User Image">

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
    <li class="pull-right">
      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
        (5)</a></li>
    </ul>

     <form class="form-horizontal" action="{{url('/Comment')}}" method="post">
   {{ csrf_field() }}

   <input type="hidden" name="idPost" value="{{$listpost->id}}">
    <input class="form-control input-sm" type="text" placeholder="Type a comment" name="des_comment">
    <div class="pull-right">
    <button class="btn btn-block btn-primary" type="submit" style="background-color: #263238; float: right; border-color: #263238;"> Send </button>
    </div>
    <br>
    <br>
  </form>
   <!-- Comment -->
@foreach($listpost->comment()->orderBy('id','desc')->get() as $listcomment)
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
<br>
<br>
@stop