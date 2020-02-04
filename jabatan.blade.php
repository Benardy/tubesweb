@extends('layouts.app')

@section('title', 'Data Jabatan')
	
@section('col')
	<div class="col-md-6">
	    <div class="row mt-2 ml-3">
    		<h2>Data Jabatan</h2>
    		<br>
    		<table class="table">
	    		<thead class="thead-dark">
	    			<tr>
	    				<th scope="col">No</th>
	    				<th scope="col">Kode Jabatan</th>
	    				<th scope="col">Nama Jabatan</th>
	    				<th scope="col">Opsi</th>
	    			</tr>
	    		</thead>
	    		<tbody>
	    			@foreach( $jabatan as $jbt )
	    			<tr>
	    				<th scope="row">{{ $loop->iteration }}</th>
	    				<td>{{ $jbt->id_jabatan }}</td>
	    				<td>{{ $jbt->nama_jabatan }}</td>
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