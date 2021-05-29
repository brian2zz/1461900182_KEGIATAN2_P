@extends('layout0182')
@section('container')
<div class="container">
    <div class="row">
        <div class="col s4">
            <div class="card-panel white-text blue">
                <h5>Buku</h5>
                <a href="{{route('buku')}}" class="white-text">Open in New Tab</a>
            </div>
        </div>
        <div class="col s8">
            <div class="card-panel white-text red">
                <h5>Peminjam</h5>
                <a href="peminjam" class="white-text">Open in New Tab</a>
            </div>
        </div>
        <div class="col s8">
            <div class="card-panel white-text green">
                <h5>Laporan</h5>
                <a href="laporan" class="white-text">Open in New Tab</a>
            </div>
        </div>
        <div class="col s4">
            <div class="card-panel black-text white">
                <h5>Petugas</h5>
                <a href="/petugas" class="black-text">Open in New Tab</a>
            </div>
        </div>
        
        </div>
    </div>
</div>
@endsection