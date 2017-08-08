@extends('admin.alumni.tambah')
@section('editAlumniId', $alumni->id)
@section('editNim', $alumni->nim)
@section('editNama', $alumni->nama)
@section('editAlamat', $alumni->alamat)
@section('editThMasuk', $alumni->tahun_masuk)
@section('editThKeluar', $alumni->tahun_keluar)
@section('editProdi', $alumni->prodi)
@section('editNoTelp', $alumni->no_telp)

@section('editMethod')
	{{method_field('PUT')}}
@stop