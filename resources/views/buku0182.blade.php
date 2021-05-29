@extends('layout0182')
@section('container')
<div class="container">
    <div class="row">   
        <form method="get" action="/buku/kategori">
            <label style="color:white;font-size:100%">Bulan </label>
               <select style="background-color: rgba(0, 0, 0, 0.25);width: 150px;height: 30px" class="browser-default" name="kategori">
                @foreach($kategori as $Kategori)
                    <option value="{{$Kategori->kode_kategori}}">{{$Kategori->nama_kategori}}</option>
                @endforeach
               </select>
               <button style="height: 30px" class="btn btn-primary">Tampilkan</button>
              </form>
        <div class="col s12">
            <div class="card-panel white-text blue">
                <h5>BUKU</h5>
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