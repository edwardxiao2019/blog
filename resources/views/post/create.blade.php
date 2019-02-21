@extends("layout.main")
@section("content")
    <div class="col-sm-7 blog-main">
            <form action="/posts" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                <div class="form-group">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Here is title">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea id="content"  class="form-control wysihtml5" style="height:400px;max-height:500px;" name="content"  placeholder="Here is content"></textarea>
                </div>
                @include("layout.error")
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <br>
        </div><!-- /.blog-main -->
@endsection


