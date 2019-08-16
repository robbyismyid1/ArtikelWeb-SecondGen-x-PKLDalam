@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data | Kompetensi Keahlian</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Show Data Kompetensi Keahlian</div>
                    <div class="card-body">
                    <form action="{{ route('kompetensi-keahlian.show', $keahlian->id) }}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">Kode Bidang</label>
                                <input type="text" name="nama_bidang" class="form-control" value="#BS{{ $keahlian->bidangstudi->id }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kompetensi</label>
                                <input type="text" name="nama_kompetensi" class="form-control" value="{{ $keahlian->kompetensi_nama }}" disabled>
                            </div>
        
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('kompetensi-keahlian.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection