@extends('Layout.admin')

@section('content')
    <h1>create</h1>

    <div class="container">
@include('includes.error')
        <form method="post" action="{{route('itemCreate')}}">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            @csrf <!--veilige request-->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection