@extends('layouts.app')
@section('content')
    

<div class="album bg-light " id="grid">
    <div class="container py-5">
      <div class="row">
                @foreach ($posts as $post)
               <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <img src="{{asset('storage/'.$post->photo)}}" class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false"  aria-label="Placeholder: Thumbnail">
                  <div class="card-body">
                    <p class="card-text">
                        <h4>{{$post->title}}</h4>
                        <p class="text-muted">{{$post->user->name}}</p>
                        {{$post->content}}
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi facilis
                        earum natus ea asperiores laboriosam assumenda distinctio explicabo ex.
                         Voluptatibus.
                        </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href=" {{ url('posts/'.$post->id.'/preview') }}" 
                            class="btn btn-outline-primary" target="_blanck">
                            Read More 
                           <svg class="bi bi-chevron-right mx-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                          </a>                      </div>
                      <small class="text-muted">{{$post->created_at}}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
  </div>
    </div>
    <div class="d-flex justify-content-center"> {{ $posts->links() }}</div>
   
  </div>

@endsection