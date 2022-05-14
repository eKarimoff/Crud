@extends('layouts.app')
@section('content')

<div class="float-left">
    <h2 style="text-align: center;">Student Management</h2>
</div>

<a style="margin: 3px;" class="btn btn-success add-new" href="{{ route('students.create') }}"><i
        class="fas fa-plus"></i></a>
@if($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>

    </div>
@endif

<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th style="width:280px">Details | Edit | Delete</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->studname }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->fee }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                    <a style="margin: 3px;" class="btn btn-secondary"
                        href="{{ route('students.show', $student->id) }}"><i
                            class="fas fa-info-circle"></i></a>
                    <a style="margin: 3px;" class="btn btn-info"
                        href="{{ route('students.edit',$student->id) }}"><i
                            class="fas fa-pen fa-1x"></i></a>

                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt fa-1x"></i></button>
                </form>
            </td>

        </tr>

    @endforeach
</table>
<div class="float-right">

</div>
@endsection