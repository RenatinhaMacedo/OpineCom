<!doctype html>
<html lang="pt-br">

<head>
  <title>Opine.com</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
  <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="product.css" rel="stylesheet">
</head>

<body>

  <header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
      <a class="py-2 d-none d-md-inline-block" href="login/index.php">Login</a>
    </nav>
  </header>

  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Punny headline</h1>
        <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this
          example based on Apple’s marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#"> Entrar</a>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

  </main>

  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">Opine.com &copy; 2017–2022</small>
      </div>
      <div class="col-6 col-md">
        <h5>Desenvolvedores</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Renan</a></li>
          <li><a class="link-secondary" href="#">Renata</a></li>
          <li><a class="link-secondary" href="#">Fernanda</a></li>
          <li><a class="link-secondary" href="#">Jana</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Contato</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Entre em contato</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
