<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$page_description}}">

    <title>{{$page_title}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('blogtheme/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('blogtheme/css/blog-post.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{url("/")}}">{{$blog_name}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("lastest")}} ">Lastest</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("lastest")}} ">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url("lastest")}} ">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">
          
          @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form action="{{url("search")}}" method="get">
                <div class="card-body">
                  <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit">Go!</button>
                    </span>
                  </div>
                </div>
            </form>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                @foreach ($categories as $category)

                <div class="col-lg-6">
                  <a href="{{url("category/$category->id/".str_slug($category->name))}}">{{$category->name}}</a>
                </div>
                  
                @endforeach
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Welcome :)</h5>
            <div class="card-body">
              Hello welcome to my simple blog with CRUDBooster !.
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('blogtheme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('blogtheme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
