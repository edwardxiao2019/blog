@extends("layout.main")
@section("content")
    <div class="col-sm-7 blog-main">
            <div class="blog-post">
                <div style="display:inline-flex">
                    <h2 class="blog-post-title">{{$post->title}}</h2>
                    @can('update',$post)
                    <a href="/posts/edit/{{$post->id}}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    @endcan
                    @can('delete',$post)
                    <a onclick="if(confirm('Are you sure you want to delete the post?')==false)return false;" href="/posts/delete/{{$post->id}}">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                    @endcan
                </div>

                <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}}</p>

                <p><p>{!! $post->content !!}</p><p><br></p></p>

            </div>
        </div><!-- /.blog-main -->
@endsection