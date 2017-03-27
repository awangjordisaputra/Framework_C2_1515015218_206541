@extends('master')
@section('container')
<div class="panel panel-default">
		<div class="panel-heading">
				<strong>Seluruh Data Pengguna</strong>
				<a href="{{ url('pengguna/tambah') }}" class="btn btn-xs btn-primary
pull-right">				
<i class="fa text-default fa-chevron-left"></i>
</a></a> Perbarui Data Pengguna</strong>
		</div>
		{!! Form::model($pengguna,['url'=>'pengguna/edit/'.$pengguna->id,'class'=>'form-horizontal']) !!}
				@include('pengguna.form')
				<div style="width:100%"