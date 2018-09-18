  <div class="col-md-4">
   
    <!-- MENU -->
<div class="box box-primary" style="border-top-color: #263238;">
  <div class="box-header with-border" style="background-color: #263238;">
    <h3 class="box-title" style="color: white;">Menu</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <ul class="products-list product-list-in-box" style="color :#263238;">
          <li class="item" style="border-bottom: 1px solid #455A64;">
            <div class="product-info">
              <a href="{{ url('/username-profile') }}" class="product-title" style="color :#263238;">Profile</a>
            </div>
          </li>
          <li class="item"  style="border-bottom: 1px solid #455A64;">
            <div class="product-info">
              <a href="{{ url('/username-followers') }}" class="product-title"  style="color :#263238;">Followers</a>
            </div>
          </li>
          <li class="item"  style="border-bottom: 1px solid #455A64;">
            <div class="product-info">
              <a href="{{ url('/username-following') }}" class="product-title"  style="color :#263238;">Following</a>
            </div>
          </li>
          <li class="item"  style="border-bottom: 1px solid #455A64;">
            <div class="product-info">
              <a href="{{ url('/username-post') }}" class="product-title"  style="color :#263238;">Posts</a>
            </div>
          </li>
          <!-- /.item -->
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <div class="box box-primary" style="border-top-color: #263238;">
      <div class="box-header with-border" style="background-color: #263238;">
      <h3 class="box-title" style="color: white;">Color Blind</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <ul class="products-list product-list-in-box" style="color :#263238;">
          <li class="item">
            <div class="product-info">
              <a href="javascript:void(0)" class="product-title" style="color :#263238;"><b>Status </b> : {{Auth::user()->status}} </a>
            </div>
          </li>
          <!-- /.item -->
        </ul>
      </div>
      <!-- /.box-body -->
    </div>
  </div>
        <!-- /.col -->