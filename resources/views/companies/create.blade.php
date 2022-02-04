@extends('layouts.app')
@section('content')
<h1 class="text-center p-3">This create page</h1>
@csrf
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
     @endif
        <form method="POST" action="{{route('companies.store')}}">
            @csrf
           @include('companies.form')
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
    </div>
</div>


@endsection

