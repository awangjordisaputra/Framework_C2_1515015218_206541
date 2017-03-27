@extends('master')
@section('container')
<div class="panel panel-info">
		<div class="panel-heading">
				<strong><a href="{{ url('pengguna') }}">
<i class="fa text-default fa-chevron-left"></i>
</a></a> Perbarui Data Pengguna</strong>
		</div>
		{!! Form::model($pengguna,['url'=>'pengguna/edit/'.$pengguna->id,'class'=>'form-horizontal']) !!}
				@include('pengguna.form')
				<div style="width:100%"
					