@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Bidang Studi
			  	<div class="btn btn-bg"><a href="{{ route('bidang-studi.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($bstudi as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->bidang_nama }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('bidang-studi.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('bidang-studi.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection