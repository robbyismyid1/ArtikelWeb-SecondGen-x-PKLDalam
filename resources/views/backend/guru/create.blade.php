@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data | Kompetensi Keahlian</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Tambah Data Kompetensi Keahlian</div>
                    <div class="card-body">
                    <form action="{{ route('kompetensi-keahlian.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <select class="form-control selectric" name="nama_bidang">
                                @foreach($bstudi as $data)
                                    <option value="{{ $data->id }}">#BS{{ $data->id }} - {{ $data->bidang_nama }}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kompetensi</label>
                                <input type="text" name="nama_kompetensi" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-md btn-info">Simpan</button>
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