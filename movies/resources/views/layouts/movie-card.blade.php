<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    @php 
                        $temp = $movie->name;
                        $temp2 = str_replace(" ", "+", $temp);
                        $temp2 = str_replace(":", "%3a", $temp2);
                        $temp2 = strtolower('http://lab.abhinayrathore.com/imdb/?m=' . $temp2);
                        dd($temp2);

                        // $ch = curl_init();
                        // curl_setopt($ch, )
                        // https://www.php.net/manual/en/function.curl-setopt.php
                        // https://stackoverflow.com/questions/3249157/php-how-can-i-load-the-content-of-a-web-page-into-a-variable
                        // http://lab.abhinayrathore.com/imdb/
                        // https://stackoverflow.com/questions/2305362/php-search-string-with-wildcards

                        // $pagesource = file_get_contents($temp2);
                        // $pagesource = 'http://lab.abhinayrathore.com/imdb/?m=' . $temp2;

                        // preg_match("/\bPOSTER_FULL\b/");
                        // https://www.geeksforgeeks.org/php-preg_match-function/

                        // dd($pagesource);


                    @endphp
                    <img src="https://www.imdb.com/find?q={{$temp2}}" alt="">
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