@extends('layouts.app')
@section('content')
<div id="titulo" class="container-flex p-3" style="background-color: #F28627;">
    <div class="row">
      <div class="col">
        <h1 id="titulo-game" class="text-center text-dark display-1">Ranking</h1>
      </div>
    </div>   
  </div>

  

  <div id="tabla-ranking" class="container-flex p-5">
    <h2 class="text-center display-2 text-white">TABLA DE RANKING</h2>
    <table class="table table-hover table-borderless table-striped" style="background-color: #F28627;">
        <thead style="background-color: #c22222;">
            <tr>
              <th scope="col">Ranking</th>
              <th scope="col">Jugador</th>
              <th scope="col">Victorias</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>5</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mark</td>
              <td>5</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Mark</td>
              <td>4</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Mark</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Mark</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Mark</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Mark</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Mark</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Mark</td>
              <td>0</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Mark</td>
              <td>0</td>
            </tr>
          </tbody>
        </table>

        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>

  </div>
@endsection