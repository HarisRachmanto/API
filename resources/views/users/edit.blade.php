@extends('users.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('users.update', $user['id']) }}" method="POST" enctype="multipart/form-data"> 
    @csrf

    @method('PUT')
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>First Name</strong>
                <input type="text" name="nama_depan" class="form-control" placeholder="first name" value="{{ old('nama_depan', $user['firstName']) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Last Name</strong>
                <input type="text" name="nama_belakang" class="form-control" placeholder="last name" value="{{ old('nama_belakang', $user['lastName']) }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Email</strong>
                <input type="email" name="email" class="form-control" placeholder="email" disabled value="{{ old('email', $user['email']) }}" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection