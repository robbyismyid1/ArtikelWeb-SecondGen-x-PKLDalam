@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Data | Bidang Studi</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">Show Data Bidang Studi</div>
                    <div class="card-body">
                    <form action="{{ route('bidang-studi.show', $bstudi->id) }}" method="post">
                            <input type="hidden" name="_method" value="PATCH">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Bidang</label>
                                <input type="text" name="nama_bidang" class="form-control" value="{{ $bstudi->bidang_nama }}" disabled>
                            </div>
        
                            <a name="" id="" class="btn btn-md btn-warning" 
                            href="{{ route('bidang-studi.index') }}" role="button">Kembali</a>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection