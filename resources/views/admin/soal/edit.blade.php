@extends('admin.soal.tambah')
@section('editSoalId', $soal->id)
@section('editSoal', $soal->soal)
{{-- @section('editTipeSoal',$soal->type) --}}
@section('editMethod')
	{{method_field('PUT')}}
@stop