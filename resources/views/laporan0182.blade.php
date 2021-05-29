@extends('layout0182')
@section('container')
<div class="container">
    <div class="row">

        <div class="col s12">
            <div class="card-panel white-text blue">
                <h5>Laporan</h5>
                <table>
                    <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                        <tr>
                            <td>Kode Buku</td>
                            <td>kode peminjam</td>
                            <td>Tanggal Peminjaman</td>
                            <td>Tanggal Kembali</td>
                            <td>denda</td>
                            <td>status</td>
                            <td>Petugas</td>
                        </tr>
                    </thead>
                    <tbody class="white-text">
                        @foreach($laporan as $Laporan)
                        <tr>
                            <td>
                                {{$Laporan->kode_buku}}
                            </td>
                            <td>
                                {{$Laporan->kode_peminjam}}
                            </td>
                            <td>
                                {{$Laporan->tgl_peminjaman}}
                            </td>
                            <td>
                                {{$Laporan->tgl_kembali}}
                            </td>
                            <td>
                                {{$Laporan->denda}}
                            </td>
                            <td>
                                {{$Laporan->status_kembali}}
                            </td>
                            <td>
                                {{$Laporan->nama_petugas}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="/laporan/denda" ><button class="red btn waves-effect">Denda</button></a>
            </div>
        </div>
        
        
    </div>
    <a href="/" onclick="window.close();"><button class="btn waves-effect red">Kembali</button></a>
</div>
@endsection