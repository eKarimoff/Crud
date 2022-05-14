@extends('layouts.app')
@section('content')

<h1 style="text-align: center;">Students details</h1>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="mb-5"></div>
<table class="table table-bordered ">
<tr>
<td>Student</td>
<td>{{$student->studname}}</td>
</tr>
<tr>
<td>Student's Course</td>
<td>{{$student->course}}</td>
</tr>
<tr>
<td>Student's Fee</td>
<td>{{$student->fee}}</td>
</tr>

</table>
<div class="d-flex" style="justify-content:center">
    <a style="float: right;" class="btn btn-danger"  href="{{route('students.index')}}">Back</a>
</div>
</div>
</div>
</div>

@endsection