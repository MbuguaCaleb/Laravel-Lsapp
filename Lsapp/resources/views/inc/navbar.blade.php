<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">


        <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul  class="navbar-nav mr-auto" >
                      <li><a class="nav-link"  href="/">Home</a></li>
                      <li><a class="nav-link"href="/about">About</a></li>
                      <li><a class="nav-link" href="/services">Services</a></li>
                      <li><a class="nav-link" href="/posts">Blog</a></li>
                    </ul>

                    <ul class="nav navbar-nav  navbar-right" >
                        <li><a class="nav-link" href="/posts/create">Create Post</a></li>
                    </ul>
                </div>

</nav>
