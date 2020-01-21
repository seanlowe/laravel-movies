<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                        <title> </title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Cover Art</text>
                    </svg>
                    <div class="card-body">
                    <p class="card-text"> {{ $movie->name }} ({{ $movie->released }}), {{ date("Y")-($movie->released) }} year(s) ago</p>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>