@extends('layout.admin')

@section('title', 'Super Admin')

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
    <a href="/tambah-data-admin">
        <button type="button" class="btn btn-dark">Tambah Data</button>
    </a>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">User</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Wahyu</td>
            <td>Admin OPD</td>
            <td>
                <a href="/update-data-admin">
                    <button type="button" class="btn btn-success btn-sm">Update</button>
                </a>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Eko</td>
            <td>Admin BKD</td>
            <td><button type="button" class="btn btn-success btn-sm">Update</button>
              <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
          </tr>
        </tbody>
      </table>
  </div>
  <!-- /page content -->

@endsection
