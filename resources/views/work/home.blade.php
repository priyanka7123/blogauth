@extends('work.base')
@section('content')

   <div class="container-fluid">
       <class="row">
           @if (session('msg'))
             {!! session('msg')!!}

           @endif
           <div class="col-lg-3"></div>
           <div class="col-lg-6">

               <table class="table">
                   <tr>
                       <th>id</th>
                       <th>title</th>
                       <th>author</th>
                       <th>body</th>
                       <th>user_id</th>
                       <th>action</th>
                   </tr>
                  @foreach ($post as $p)

                   <tr>
                       <td>{{$p->id}}</td>
                       <td>{{$p->title}}</td>
                       <td>{{$p->author}}</td>
                       <td>{{$p->body}}</td>
                       <td>{{$p->user_id}}</td>
                       <td>
                           <form action="{{route('post.destroy',['post'=>$p->id])}}" method="post">
                               @method('delete')
                               @csrf
                               <input type="submit" name="delete" value="delete" class="btn btn-danger">
                           </form>
                       </td>
                       <td><a href="{{route('post.edit',['post'=>$p->id])}}" class="btn btn-success float-end">update</a></td>
                   </tr>
                     @endforeach

               </table>

           </div>
       </div>
   </div>
@endsection
