@extends('work.base')
@section('content')


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-4">
                <form action="{{route('post.update',['post'=>$record->id])}}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="">title</label>
                        <input type="text" name="title" class="form-control" value="{{$record->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="">author</label>
                        <input type="text" name="author" class="form-control" value="{{$record->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="">body</label>
                        <input type="text" name="body" class="form-control" value="{{$record->body}}">
                    </div>

                    <div class="mb-3">
                        <input type="submit"  class="btn btn-danger w-100" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

