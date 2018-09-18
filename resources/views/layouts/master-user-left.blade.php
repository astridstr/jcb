<div class="col-md-2">
  <!-- Profile Image -->
  <div class="box box-primary" style="width:210px; border-top-color: white">
    <div class="box-body box-profile">
      <img class="profile-user-img img-responsive img-circle" src="{{asset('fotoupload/'. Auth::user()->profpic)}}" alt="User profile picture" style="border: 2px solid #455A64;">

      <h3 class="profile-username text-center" style="color: #263238;">{{Auth::user()->name}}</h3>

      <p class="text-muted text-center" style="color: #263238;">{{Auth::user()->job}}</p>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item" style="border-bottom: 1px solid #ECEFF1; color: #263238;" >
          <b >Followers</b> <a class="pull-right" style="color: #263238;">{{Auth::user()->follower_sum}}</a>
      </li>
      <li class="list-group-item" style="border-bottom: 1px solid #ECEFF1; color: #263238;">
          <b>Following</b> <a class="pull-right" style="color: #263238;">{{Auth::user()->following_sum}}</a>
      </li>
      <li class="list-group-item" style="border-bottom: 1px solid #ECEFF1; color: #263238;">
          <b>Posts</b> <a class="pull-right" style="color: #263238;">{{Auth::user()->post_sum}}</a>
      </li>
  </ul>
</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
</div>