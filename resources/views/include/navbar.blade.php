<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand navFont" href="/">{{config('app.name', 'Latihan')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="ml-auto ">
                <ul class="navbar-nav form-inline my-2 my-lg-0 mx-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item mx-3">
                        <a class="nav-link" href="/about">About Us</a>
                    </li> --}}
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="/posts">Posts</a>
                    </li>
                    {{-- <li class="nav-item mx-3">
                        <a class="nav-link" href="/services">Services</a>
                    </li> --}}
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="/posts/create">Create Post</a>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
</nav>