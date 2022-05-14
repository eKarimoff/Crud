@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-12 margin-tb">
<div class="float-left">
<h2>Edit Product</h2>
</div>

<div class="float-right">

</div>
</div>
</div>
@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input. <br><br>
<ul>
@foreach($errors->all() as $error)

<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{route('students.update',$student->id)}}" method="POST">
@csrf

@method('PUT')

<div class="row">

<div class="col-sm-12 col-md-12">
<div class="form-group">
<strong>Student:</strong>
<input type="text" name="studname" value="{{$student->studname}}" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Course:</strong>
<input type="text" name="course" value="{{$student->course}}" class="form-control" placeholder="Course">

</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Fee:</strong>
<input type="text" name="fee" value="{{$student->fee}}" class="form-control" placeholder="Fee">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary mt-3">Submit</button>
<a class="btn btn-danger mt-3" href="{{route('students.index')}}">Back</a>

</div>
</div>
</form>
@endsection