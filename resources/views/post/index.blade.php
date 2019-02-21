@extends("layout.main")
@section("content")
    <div class="col-sm-7 blog-main">
            <div>
                @foreach($posts as $post)
                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="/posts/{{$post->id}}" >{{$post->title}}</a></h2>
                    <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

                    {!! str_limit($post->content, 150) !!}
                </div>
               @endforeach
                {{$posts->links()}}
            </div><!-- /.blog-main -->
        </div>
@endsection