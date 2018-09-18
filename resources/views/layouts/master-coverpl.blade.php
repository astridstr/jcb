<!-- Main row -->
<div class="box box-widget widget-user">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-black" style="background: url({{asset('dist/img/photo1.png')}}) center center ; height: 400px;">
  @foreach($user as $listuser)
    <h3 class="widget-user-username">{{$listuser->name}}</h3>
    <h5 class="widget-user-desc">{{$listuser->job}}</h5>
    <h5 class="widget-user-desc">{{$listuser->gender}}</h5> 
  </div>
  <div class="widget-user-image" style="top: 140px;">
    <img class="img-circle" src="{{asset('fotoupload/'. $listuser->profpic)}}" alt="User Avatar" style="width: 150px;">
    <form action="{{url('/profile-follow')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
    <input type="hidden" name="foll_id" value="{{$listuser->id}}">   
      <button class="btn btn-primary btn-block" style="margin-top: 10px;color: #263238; background-color: white; border: 1px solid white;"><b>Follow</b></button>
    </form>
  </div>
  @endforeach
  <div class="box-footer">
    <div class="row">
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">{{$listuser->following_sum}}</h5>
          <span class="description-text">Following</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">{{$listuser->follower_sum}}</h5>
          <span class="description-text">Followers</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4">
        <div class="description-block">
          <h5 class="description-header">{{$listuser->post_sum}}</h5>
          <span class="description-text">Posts</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div>
          <!-- /.row -->