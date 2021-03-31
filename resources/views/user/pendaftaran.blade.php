@extends('user.template')

@section('title', 'Pendaftaran')

@section('content')

            <div class="daftar-opd">
                <h3>DAFTAR MAGANG</h3>
                <div class="dropdown">
                    <button class="dropbtn">Silahkan Pilih OPD</button>
                    <div class="dropdown-content">
                    <a href="#">Dinas Komunikasi dan Informatika</a>
                    <a href="#">Dinas Perpustakaan dan Kearsipan</a>
                    <a href="#">Dinas Tenaga Kerja</a>
                    </div>
                </div>
                <div class="choose-file">
                    <button>Choose File</button>
                    <p>Berkas Anda...</p><h5>(Proposal atau Surat Pengantar)</h5>
                </div>
                <button class="btn-daftar-opd">DAFTAR</button>
            </div>

    @endsection
