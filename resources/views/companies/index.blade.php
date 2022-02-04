@extends('layouts.app')
@section('content')
<title>Company List</title>   
<h1 class="text-center p-3">These are Companies List</h1>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4">
        <a href="{{route('companies.create')}}">
    <button class="btn btn-success" type="button">Create</button></a>
</div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Company Names</th>
                <th>Company Address</th>
                <th>Company Numbers</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr> 
                <td>{{ (($companies->currentpage()-1)*$companies->perpage() + ($loop->index+1)) }}</td>
                <td><a href="{{route('companies.show', ['company' => $company->id])}}">{{ $company->name }}</a>
                </td>
                
                <td>{{ $company->address }}</td>
                <td>{{ $company->phone }}</td>
                <td><a href="{{route('companies.edit', ['company' =>$company->id])}}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                </td><form action="{{route('companies.destroy', ['company' => $company->id])}}" method="POST">
                @csrf
                <td>@method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button></td>
                </form>
                @endforeach
</tr>
</tbody>
    </table>
     {{$companies-links('pagination::bootstrap-4')}}
@endsection