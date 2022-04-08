
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- Bootstrap CSS -->
<link rel="shortcut icon" href="https://i.ibb.co/T4SZmfG/pngegg.png" alt="cat_explode">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>

<!--fontawesome-->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
</script>

<!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->

<!-- Styles 
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">-->

<nav id="navBarStyle" class="navbar navbar-expand-lg navbar-light bg-white  fixed-top">
    <a id="titles" class="navbar-brand navTitle" href="/">
        <img src="https://i.ibb.co/T4SZmfG/pngegg.png" width="40" height="40" class="d-inline-block align-top"
            alt="logo">
        Exploding Kittens
    </a>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul id="barNavegador" class="navbar-nav">
            <li class="nav-item active">
                <a id="titles" class="nav-link" href="{{ url('/') }}">Home<span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link " href="{{ url('/aboutgame') }}">Game</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/aboutus') }}">About us</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/ranking_results') }}">Ranking</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/comments_feedback') }}">Comments</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/technologies') }}">Technologies</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/download') }}">Download</a>
            </li>

            <li class="nav-item">
                <a id="titles" class="nav-link" href="#">Login</a>
            </li>

        </ul>
    </div>
    </div>
</nav>
<br>
