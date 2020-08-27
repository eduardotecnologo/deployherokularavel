<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/resource/trix/trix.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.css"> -->
  <link rel="stylesheet" href="/css/styles.css">

  <title>Painel Administrativo!</title>
</head>

<body class="d-flex flex-column">
  <div id="header">
    <nav class="navbar navbar-expend-lg navbar-dark bg-dark">
      <a href="" class="navbar-brand">Edudeveloper ADM</a>
      <span class="navbar-text">Painel Administrativo!</span>
    </nav>
  </div>
  <div id="main">
    <div class="row">
      <div class="col">
        <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
          <li class="nav-item">
            <span class="nav-link"><small>Menu</small></span>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link active text-white-50">Páginas</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Usuários</a>
          </li>
        </ul>
      </div>
      <div id="content" class="col-10">
        <?php include $content ?>
      </div>
    </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="/resource/trix/trix.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="/resource/pnotify/pnotify.custom.min.js"></script> -->
  <script>
    <?php swal(); ?>
    const confirmEl = document.querySelector('.confirm');

    if (confirmEl) {
        confirmEl.addEventListener('click', function(e) {
        e.preventDefault();
        if (confirm('Tem certeza que deseja fazer isso?')) {
          window.location = e.target.getAttribute('href');
        }
      });
    }
  </script>
</body>

</html>