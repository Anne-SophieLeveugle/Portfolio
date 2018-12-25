@extends('Layout.admin')

@section('content')
    <div class="achtergrond"></div>
    <div class="verzameling" style="padding-top: 240px;">
        <h1 class="titeladmin">Create</h1>
    <div class="container"  style="padding: 50px; margin-bottom: 50px;">
        @include('includes.error')
        <form method="post" action="{{route('adminupdate')}}" enctype="multipart/form-data">
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
            @foreach($werk->images as $image)
                <div class="images clearfix">
                    <img id="{{ $image->index }}" class="d-block w-100" src="{{ URL::asset($image->imagepath) }}" style="float: left; width: 20% !important;">
                    <a class="col-1 btn btn-danger btn-xs" href="{{ route('admin.delete.image', ['id' => $image->id])}}" role="button">Delete</a>
                </div>
            @endforeach
            <div class="form-group">
                <input id="image" name="image" type="file" class="image" data-show-upload="true"/>
            </div>
        @csrf <!--veilige request-->

            <br/>
            <input type="hidden" name="id" value="{{$werk->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
@endsection