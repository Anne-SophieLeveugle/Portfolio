@extends('Layout.admin')

@section('content')
    <div class="achtergrond"></div>
    <div class="verzameling" style="padding-top: 240px;">
        <h1 class="titeladmin">Create</h1>
    <div class="container" style="padding: 50px; margin-bottom: 50px;">
        @include('includes.error')
        <form method="post" action="{{route('itemCreate')}}" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content">
            </div>
            @foreach($tags as $tag)
                <div class="custom-checkbox">
                    <label>
                        <input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->name}}
                    </label>
                </div>
            @endforeach
            <div class="form-group">
                <input id="image" name="image" type="file" class="image" data-show-upload="true"/>
            </div>
            @csrf <!--veilige request-->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
@endsection