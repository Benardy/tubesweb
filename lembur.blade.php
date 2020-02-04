@extends('layouts.app')

@section('title', 'Data Lembur')
	
@section('col')
	<div class="col-md-8">
	    <div class="row mt-2 ml-3">
    		<h2>Data Lembur</h2>
    		<br>
    		<table class="table">
	    		<thead class="thead-dark">
	    			<tr>
	    				<th scope="col">No</th>
	    				<th scope="col">ID Pegawai</th>
	    				<th scope="col">Nama Pegawai</th>
	    				<th scope="col">Tanggal</th>
	    				<th scope="col">Jumlah</th>
	    				<th scope="col">Opsi</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			@foreach( $lembur as $lbr )
	    			<tr>
	    				<th scope="row">{{ $loop->iteration }}</th>
	    				<td>{{ $lbr->id_karyawan }}</td>
	    				<td>{{ $lbr->nama_karyawan }}</td>
	    				<td>{{ $lbr->tanggal }}</td>
	    				<td>{{ $lbr->jumlah }}</td>
	    				<td>
	    					<a href="" class="bagde badge-success">Edit</a>
	    					<a href="" class="bagde badge-danger">Delete</a>
	    				</td>
	    			</tr>
	    			@endforeach
	    		</tbody>		
	    	</table>

    	</div>	
    </div>
@endsection