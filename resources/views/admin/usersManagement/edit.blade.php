@extends('admin.usersManagement.create')

@section('editId',$users->id)
@section('editName',$users->name)

@section('editEmail',$users->email)

@section('editPassword',$users->password)

@section('editConfirm',$users->confirm)

@section('editMethod')
	{{method_field('PUT')}}
@endsection


