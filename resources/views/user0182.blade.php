@extends('layout0182')
@section('container')
<div class="container">
    <div class="row">
        <div class="col s12">
            <div class="card-panel white-text blue">
                <h5>Peminjam</h5>
                <table>
                    <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                        <tr>
                            <td>Id Buku</td>
                            <td>Kategori</td>
                            <td>Judul</td>
                            <td>Penerbit</td>
                            <td>Pengarang</td>
                            <td>Tahun Penerbitan</td>
                            <td>Jumlah</td>
                        </tr>
                    </thead>
                    <tbody class="white-text">
                        @foreach($buku as $Buku)
                        <tr>
                            <td>
                                {{$Buku->kode_buku}}
                            </td>
                            <td>
                                {{$Buku->kode_kategori}}
                            </td>
                            <td>
                                {{$Buku->judul_buku}}
                            </td>
                            <td>
                                {{$Buku->kode_penerbit}}
                            </td>
                            <td>
                                {{$Buku->pengarang_buku}}
                            </td>
                            <td>
                                {{$Buku->tahun_terbit_buku}}
                            </td>
                            <td>
                                {{$Buku->jumlah_buku}}
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