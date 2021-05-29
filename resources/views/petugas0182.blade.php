@extends('layout0182')
@section('container')
<div class="container">
    <div class="row">

        <div class="col s12">
            <div class="card-panel white-text blue">
                <h5>Petugas</h5>
                <table>
                    <thead style="background-color: rgba(0, 0, 0, 0.25);" class="white-text">
                        <tr>
                            <td>Kode Petugas</td>
                            <td>Nama Petugas</td>
                        </tr>
                    </thead>
                    <tbody class="white-text">
                        @foreach($petugas as $officer)
                        <tr>
                            <td>
                                {{$officer->kode_petugas}}
                            </td>
                            <td>
                                {{$officer->nama_petugas}}
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