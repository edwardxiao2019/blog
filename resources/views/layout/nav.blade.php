<div class="blog-masthead">
    <div class="container">
        <form action="/posts/search" method="GET">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="blog-nav-item" href="/">Home</a>
                </li>
                <li>
                    <div>
                        <input name="query" type="text" class="form-control search-input" placeholder="Search">
                        <button class="btn btn-default search-button" type="submit">Go!</button>
                    </div>
                </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">

                <?php if(Auth::check()): ?>
                    <li class="dropdown">
                        <div>
                            <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{\Auth::user()->name}}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/posts/create">Compose</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                <?php else: ?>
                    <li>
                        <a class="blog-nav-item " href="/login">Administrator Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </form>
    </div>
</div>