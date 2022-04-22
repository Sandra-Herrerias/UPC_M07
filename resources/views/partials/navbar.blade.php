  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
  />
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!--fontawesome-->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
</script>

<!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->

<!-- Styles 
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">-->

<nav id="navBarStyle" class="navbar navbar-expand-lg navbar-light bg-white  sticky">
    <a id="titles" class="navbar-brand navTitle" href="/">
        <img src="https://i.ibb.co/T4SZmfG/pngegg.png" width="40" height="40" class="d-inline-block align-top"
            alt="logo">
        Exploding Kittens
    </a>
    <button type="button" id="toggler-icon" class="fa fa-bars " data-toggle="collapse" data-target="#navbarNavDropdown">
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul id="barNavegador" class="navbar-nav">
            <li class="nav-item active">
                <a id="titles" class="nav-link" href="{{ url('/') }}">Home<span
                        class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link " href="{{ url('/aboutgame') }}">Juego</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/aboutus') }}">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/ranking_results') }}">Ranking</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/comments_feedback') }}">Comentarios</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/technologies') }}">Tecnologias</a>
            </li>
            <li class="nav-item">
                <a id="titles" class="nav-link" href="{{ url('/download') }}">Descargar</a>
            </li>

            <li class="nav-item">
                <a id="titles" class="nav-link" href="#">Login</a>
            </li>

        </ul>
    </div>
    </div>
</nav>
<br>
