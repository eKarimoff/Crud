@extends('layouts.app')
@section('content')
{{-- 
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div> 

{{-- <div class="card-body">
    @if(session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('Hello Admin!') }}

</div>

{{-- </div>
</div>
</div>
</div>  --}}




<div class="container " style="margin-top:30px; ">
    <div class="table-responsive">

    
    <table class="table table-bordered" >
        
        <tr>
        <th>#</th>
        <th>Blogs</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Status</th>
        @if(auth()->user()->hasRole('admin'))
        <th>Action</th>
        @endif
        </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->blog }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>{{ $post->status }}</td>
                    @if(auth()->user()->hasRole('admin'))
                   
                        <td>
                            @if($post->status == 'pending')
                            <form action="{{ route('home.approve', ['id' =>  $post->id]) }}" method="POST">
                                @csrf
                                <input onclick="this.value='Rejected'" type="button" value="Reject" id="myButton1" class="btn btn-info" />
                                    <button type="submit" class="btn btn-success">Approve</button>
                                    @method('POST')
                                
                            </form>
                            @endif
                            <form action="{{ route('home.destroy',$post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2">Delete</button>
                            </td>
                            </form>
                            @endif
                        </tr>
                            @endforeach
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
</div>
@endsection