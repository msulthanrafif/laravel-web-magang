@extends('registrasi.template')

@section('content')

<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
    <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Registrasi</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Lengkap" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="E-mail" name="email">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nama Institusi" name="nama_institusi">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Kota Asal Institusi" name="kota_institusi">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Jurusan/Program Studi" name="jurusan">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">Jenjang</option>
                                    <option>SMK</option>
                                    <option>D3</option>
                                    <option>D4/S1</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Mulai" name="tgl_mulai">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Tanggal Selesai" name="tgl_selesai">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="No. WhatsApp" name="no_wa">
                        </div>

                        <div class="p-t-20">
                            <button class="btn" type="submit">Submit</button>
                        </div>
                        <p class="login">Sudah punya akun? <a href="/login"><strong>Login</strong></a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
