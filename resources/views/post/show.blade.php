@extends('layouts.main')
@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up"
               data-aos-delay="200"> {{ $date->format('F') }} {{ $date->day }}, {{$date->year}}
                • {{$date->format('H:i') }} • Featured • {{$post->comments->count()}} Comments</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
            </section>
            <section class="post-content mb-4">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="py-0 mb-3">
                        @auth()
                        <form action="{{route('post.like.store',$post->id)}}" method="post">
                            @csrf
                            <span>{{$post->liked_users_count > 0 ? $post->liked_users_count : ''}}</span>
                            <button type="submit" class="border-0 bg-transparent">
                                    <i class="text-danger fa{{auth()->user()->likedPosts->contains($post->id) ? 's' : "r"}} fa-heart"></i>
                            </button>
                        </form>
                        @endauth
                        @guest()
                            <div>
                                <span>{{$post->liked_users_count > 0 ? $post->liked_users_count : ''}}</span>
                                <i class="text-danger far fa-heart"></i>
                            </div>
                        @endguest
                    </section>
                    @if($relatedPosts->count() > 0)
                        <section class="related-posts">
                            <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                            <div class="row">
                                @foreach($relatedPosts as $relatedPost)
                                    <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                        <img src="{{asset('storage/' . $relatedPost->main_image)}}" alt="related post"
                                             class="post-thumbnail">
                                        <p class="post-category">{{ $relatedPost->category->title }} </p>
                                        <a href="{{route('post.show', $relatedPost->id)}}"><h5
                                                class="post-title">{{ $post->title }}</h5></a>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    @endif
                    @if($post->comments->count() > 0)
                        <section class="comment-list mb-5">
                            <h2 class="section-title mb-5" data-aos="fade-up">Comments ({{ $post->comments->count() }}
                                )</h2>
                            @foreach($post->comments as $comment)
                                <div class="comment-text mb-3">
                                <span class="username">
                                    <div>{{$comment->user->name}}</div>
                                    <span
                                        class="text-nuted float-right">{{$comment->DateAsCarbon->diffForHumans()}}</span>
                                </span>
                                    {{ $comment->message }}
                                </div>
                            @endforeach
                        </section>
                    @endif
                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                            <form action="{{route('post.comment.store', $post->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label for="comment" class="sr-only"></label>
                                        <textarea name="message" id="comment" class="form-control" placeholder="Comment"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input type="submit" value="Send Message" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
