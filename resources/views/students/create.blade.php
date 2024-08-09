@extends('students.layout')

@section('content')
<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <br>
            <h2>Add New Student</h2>
        </div>
        <div class="pull-right">
            <br>
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
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

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gender:</strong><br>
                <div class="form-check">
                    <input type="radio" id="male" name="gender" value="Male" class="form-check-input" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                    <label for="male" class="form-check-label">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="female" name="gender" value="Female" class="form-check-input" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                    <label for="female" class="form-check-label">Female</label>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Std:</strong>
                <input type="text" name="std" class="form-control" placeholder="Std" autocomplete="off">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection