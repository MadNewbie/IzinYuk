@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tambah User Baru</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
@stop

@section('content')
    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="InputName">Nama</label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'InputName')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="InputEmail1">User Email</label>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control', 'id' => 'InputEmail')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="InputPassword">Password</label>
                    {!! Form::Password('password', array('placeholder' => 'Password','class' => 'form-control', 'id' => 'InputPassword')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="InputConfirm">Konfirmasi Password</label>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control', 'id' => 'InputConfirm')) !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="InputRole">Role</label>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','id' => 'InputRole','multiple')) !!}
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    {!! Form::close() !!}
@stop
                
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
