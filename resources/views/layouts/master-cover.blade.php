<!-- Main row -->
<div class="box box-widget widget-user">
  <!-- Add the bg color to the header using any of the bg-* classes -->
  <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center ; height: 400px;">
    <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
    <h5 class="widget-user-desc">{{Auth::user()->job}}</h5>
    <h5 class="widget-user-desc">{{Auth::user()->gender}}</h5>
  </div>
  <div class="widget-user-image" style="top: 140px;">
    <img class="img-circle" src="{{asset('fotoupload/'. Auth::user()->profpic)}}" alt="User Avatar" style="width: 150px;">
  </div>

  <div class="box-footer">
    <div class="row">
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">{{Auth::user()->following_sum}}</h5>
          <span class="description-text">Following</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4 border-right">
        <div class="description-block">
          <h5 class="description-header">{{Auth::user()->follower_sum}}</h5>
          <span class="description-text">Followers</span>
        </div>
        <!-- /.description-block -->
      </div>
      <!-- /.col -->
      <div class="col-sm-4">
        <div class="description-block">
          <h5 class="description-header">{{Auth::user()->post_sum}}</h5>
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