@extends('layouts.app')
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}

</div>
</div>
</div>
</div>
</div> --}}


<div class="container" style="margin-top:30px ">
    <thead>
    <tr>
        <table class="table table-bordered table-hover">
            <th>#</th>
        <th>Blogs</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Status</th>
        @if(auth()->user()->hasRole('admin'))
        <th>Action</th>
    </tr>
         </thead>
                @endif
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->blog }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>{{ $post->status }}</td>
                    @if(auth()->user()->hasRole('admin'))
                   
                        <td class="btn-group">
                            <form action="{{ route('home.destroy',$post->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-info">Reject</button>
                                <button type="submit" class="btn btn-danger mr-1">Delete</button>
                            </form>
                            @if($post->status == 'pending')
                                <form action="{{ route('home.approve', ['id' =>  $post->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </td>
                            </form>
                            @endif
                            @endif
                        </tr>
                            @endforeach
        </tbody>
    </table>

    @if(auth()->user()->hasRole('user'))

        <h5>Start blogging</h5>
        <form action="{{ route('home.store') }}" method="POST">
            @csrf
            <div class="form-floating">
                <textarea class="form-control" name="blog" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Send</button>

                </div>
            </div>
        </form>
    @endif
    {{ $posts->links('pagination::bootstrap-4') }}
</div>
@endsection