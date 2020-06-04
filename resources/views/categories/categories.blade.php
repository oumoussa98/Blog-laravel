@extends('layouts.master')

@section('content')

<div class="row py-4">
  <div class="col-2">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" aria-selected="true"
      id="v-pills-home-tab" data-toggle="pill"
      href="#v-pills-home" role="tab"
      aria-controls="v-pills-home"> All Categories</a>
      @foreach ($categories as $category)
      <a class="nav-link"  
         href="{{ url('categories/'.$category->category) }}" 
        aria-selected="false">{{$category->category}}</a>

      @endforeach
    </div>
  </div>
  @if (count($posts) != 0)
   <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" 
              role="tabpanel" aria-labelledby="v-pills-home-tab">
        <div class="album bg-light">
          <div class="container">
            <div class="row">
      @foreach ($posts as $post)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img src="{{asset('storage/'.$post->photo)}}" class="bd-placeholder-img card-img-top" 
          width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="true" >

          <div class="card-body">
            <p class="card-text">
                <h5>{{$post->title}}</h5>
                <p class="text-muted">Published by: {{$post->user->name}}
                     <br><small class="text-muted">Date: {{$post->created_at}}</small>
                </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group ">
                <a href=" {{ url('posts/'.$post->id.'/preview') }}" 
                  class="btn btn-outline-primary" target="_blanck">
                  Read More 
                 <svg class="bi bi-chevron-right mx-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                </a>
              </div>
              <small class="text-muted">{{$post->category}}</small>
            </div>
          </div>
        </div>
      </div>     
      @endforeach
    </div>
      </div>
    </div>
  </div>



    </div>
    <div class="d-flex justify-content-center">{{$posts->links()}}</div>
  </div>
  
  @endif
</div>






@endsection