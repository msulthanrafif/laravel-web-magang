@extends('layout.admin')

@section('title', 'Admin OPD')

@section('user', 'Admin OPD')

@section('sidebar')
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Antrian <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="admin-opd.html">Belum Dikonfirmasi</a></li>
                <li><a href="index2.html">Sudah Dikonfirmasi</a></li>
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
        <h1 class="text-center">Data Peserta Magang</h1>
        <hr>
        <button type="button" class="btn btn-dark">Cetak Laporan</button>
          <table class="table">
            <thead class="thead-light text-center">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Institusi</th>
                <th scope="col">Jurusan/Prodi</th>
                <th scope="col">Jenjang</th>
                <th scope="col">Periode Magang</th>
                <th scope="col">OPD yang Dipilih</th>
                <th scope="col">Berkas</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <th scope="row">1</th>
                <td>Nadia</td>
                <td>Politeknik Elektronika</td>
                <td>Teknik Informatika</td>
                <td>D3</td>
                <td>21 Juli 2020 s/d 21 Agustus 2020</td>
                <td>DISKOMINFO</td>
                <td><button type="button" class="btn btn-info btn-sm">Lihat</button></td>
                <td><button type="button" class="btn btn-success btn-sm">Update</button><button type="button" class="btn btn-danger btn-sm">Delete</button></td>
              <!-- sudah konfirmasi -->
                <!-- <td>Diterima | Sedang Berjalan</td> -->
              </tr>
              <tr>
                  <th scope="row">2</th>
                  <td>Edo</td>
                  <td>Politeknik Elektronika</td>
                  <td>Teknik Informatika</td>
                  <td>D3</td>
                  <td>21 Juli 2020 s/d 21 Agustus 2020</td>
                  <td>DISKOMINFO</td>
                  <td><button type="button" class="btn btn-info btn-sm">Lihat</button></td>
                  <td><button type="button" class="btn btn-success btn-sm">Update</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                </tr>
            </tbody>
          </table>
      </div>
      <!-- /page content -->
@endsection
