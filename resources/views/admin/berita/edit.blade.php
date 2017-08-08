@extends('admin.berita.tambah')
@section('editBeritaId', $berita->id)
@section('editJudul', $berita->judul)
@section('editIsi', $berita->isi)
@section('editMethod')
	{{method_field('PUT')}}
@stop