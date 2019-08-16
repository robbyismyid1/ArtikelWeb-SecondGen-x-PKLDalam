@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <title>Data Guru</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <a href="{{ route('kompetensi-keahlian.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th>Kode Bidang Studi</th>
                                        <th>Kode Kompetensi Keahlian</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($keahlian as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>#BS{{ $data->bidangstudi->id }}</td>
                                        <td>#KK{{ $data->id }}</td>
                                        <td>{{ $data->guru_nip }}</td>
                                        <td>{{ $data->guru_nama }}</td>
                                        <td>{{ $data->guru_alamat }}</td>
                                        <td>{{ $data->guru_telp }}</td>
                                        <td>
                                        <a  href="{{ route('kompetensi-keahlian.edit', $data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
										<td>
                                            <a href="{{ route('kompetensi-keahlian.show', $data->id) }}" 
                                            class="btn btn-sm btn-primary">Show Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('kompetensi-keahlian.destroy', $data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection