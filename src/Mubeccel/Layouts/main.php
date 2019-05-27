<!doctype html>
<html lang="en">
  <head>
    <title>Mubeccel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-light">

    <nav class="navbar navbar-expand-md navbar-dark bg-danger">
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-light" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link text-light" href="/">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/wiki">Wiki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/about">Hakkında</a>
                </li>
                <li class="nav-item ml-lg-5 py-0 my-0 border btn btn-danger rounded">
                    <a class="nav-link text-light my-0" href="/download">İndir</a>
                </li>
            </ul>
            <ul class="navbar-nav  my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="/contact">İletişim</a>
                </li> 
            </ul>
        </div>
    </nav>

      <div class="container-fluid m-1 p-3">


      <?=View::render()?>
      
      

    </div>
    <hr>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




