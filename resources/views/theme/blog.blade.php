@extends('layouts.app')

@section('current-page','Blog')
    
@section('content')


    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                @foreach ($postCategories as $postCategorie)
                                    <li><a href="#">{{$postCategorie->categoryName}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        {{--  --}}
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                @foreach ($posts->sortByDesc('id') as $post)
                                    @if ($loop->iteration < 4)
                                    <a href="{{url('posts',$post->id)}}" class="rb-item">
                                        <div class="rb-pic">
                                            <img src="{{asset($post->photo)}}" alt="img/blog/recent-{{$loop->iteration}}.jpg">
                                        </div>
                                        <div class="rb-text">
                                            <h6>{{ Str::limit($post->title, 25, '...') }}</h6>
                                            <p>{{$post->mainTag}} <span>- {{ \Carbon\Carbon::parse($post->date)->format('j F, Y')}}</span></p>
                                        </div>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        {{--  --}}
                        <div class="blog-tags">
                            <h4>Blog Tags</h4>
                            <div class="tag-item">
                                @foreach ($postTags as $postTag)
                                    <a href="{{url('posts',$postTag->post_id)}}">{{$postTag->tag}}</a>
                                @endforeach
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        {{--  --}}
                        @foreach ($posts as $post)
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{asset($post->photo)}}" alt="img/blog/blog-{{$loop->iteration}}.jpg">
                                </div>
                                <div class="bi-text">
                                    <a href="{{url('posts',$post->id)}}">
                                        <h4> {{$post->title}} </h4>
                                    </a>
                                    <p>{{$post->mainTag}} <span>- {{ \Carbon\Carbon::parse($post->date)->format('j F, Y')}}</span></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        {{--  --}}
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">
                                    Loading More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection