@extends ('layouts.master')

@section ('content')

<main role="main">

  <section class="jumbotron text-center">
      <div class="container">
        <h1>My Favorite Movies</h1>
      </div>
  </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#" id="new-card">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title> </title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Add a New Movie</text>
                            </svg>
                        </a>
                    </div>
                </div>
                    
                @include('layouts.movie-edit');
            </div>
        </div>
    </div>


  </main>

@endsection











