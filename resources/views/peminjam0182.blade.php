@extends('layout0182')
@section('container')
<div class="container">
    <div class="row">

        <div class="col s12">
            <div class="card-panel white-text blue">
                <h5>Anggota</h5>
                <table>
                    <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                        <tr>
                            <td>Nama Peminjam</td>
                            <td>Alamat</td>
                            <td>No Telp</td>
                    
                        </tr>
                    </thead>
                    <tbody class="white-text">
                        @foreach($peminjam as $pinjam)
                        <tr>
                            <td>
                                {{$pinjam->nama_peminjam}}
                            </td>
                            <td>
                                {{$pinjam->alamat_peminjam}}
                            </td>
                            <td>
                                {{$pinjam->telp_peminjam}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        
    </div>
    <a href="/" onclick="window.close();"><button class="btn waves-effect red">Kembali</button></a>
</div>
@endsection