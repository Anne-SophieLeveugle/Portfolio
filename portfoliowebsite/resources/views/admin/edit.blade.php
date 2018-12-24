@extends('Layout.admin')

@section('content')
    <h1>edit</h1>
    <div class="container">
        @include('includes.error')
        <form method="post" action="{{route('adminupdate')}}">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" value="{{$werk->title}}" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" value="{{$werk->content}}" name="content">
            </div>
            @foreach($tags as $tag)
            <div class="custom-checkbox">
                <label>
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}" {{$werk->tags->contains($tag->id) ? 'checked' : ''}}>{{$tag->name}}
                </label>
            </div>
                @endforeach
        @csrf <!--veilige request-->
            <input type="hidden" name="id" value="{{$werk->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection