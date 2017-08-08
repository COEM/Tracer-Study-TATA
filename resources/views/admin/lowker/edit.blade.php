@extends('admin.lowker.tambah')
@section('editLowkerId', $lowker->id)
@section('editJudul', $lowker->judul)
@section('editIsi', $lowker->isi)
@section('editMethod')
	{{method_field('PUT')}}
@stop