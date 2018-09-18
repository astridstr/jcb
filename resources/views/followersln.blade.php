@extends('layouts.master-aboutpl')
@section('content')

 <!-- USERS LIST -->
              <div class="box box-danger" style="border-top-color: #263238;">
                <div class="box-header with-border">
                  <h3 class="box-title">Followers</h3>

                  <div class="box-tools pull-right">
                    <span class="label" style = "background-color :#263238;">Members</span>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  @foreach($followers as $listwers)
                    <li>
                      <img src="{{asset('fotoupload/'. $listwers->users->profpic)}}" alt="User Avatar" style="height:60px; width:60px;" >
                      <a class="users-list-name" href="#">{{$listwers->users->name}}</a>
                    </li>
                  @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase" style="color: #2c1507;">View All Followers</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->

@stop