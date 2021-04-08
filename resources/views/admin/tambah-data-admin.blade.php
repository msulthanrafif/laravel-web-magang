@extends('layout.admin')

@section('title', 'Tambah Data Admin')

@section('user', 'Super Admin')

@section('sidebar')
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Menu <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="/super-admin">Data Admin</a></li>
                <li><a href="index2.html">Admin OPD</a></li>
                <li><a href="index2.html">Admin BKD</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <h1 class="text-center">Data Admin</h1>
        <hr>
        <form>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="username" class="form-control" id="inputUsername" placeholder="Username">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
              <select class="form-control" id="exampleFormControlSelect1 col-sm-10">
                <option>Admin OPD</option>
                <option>Admin BKD</option>
              </select>
            </div>
          </div>

          <button type="button" class="btn btn-dark">Tambah Data</button>
        </form>
      </div>
      <!-- /page content -->
@endsection
