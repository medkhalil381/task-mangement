  @extends('layouts.app')

  @section('content')
<div class="container">
    <div class="row">
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>iPortfolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ URL('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ URL('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ URL('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL('assets/css/style.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="{{ asset('index.html') }}">mohamedkhalil </a></h1>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#home" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
    <a href="{{ route('produitees.index') }}"
       class="nav-link {{ Request::is('produitees*') ? 'active' : '' }}">
        <p>Produit</p>
    </a>
</li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->









<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Graphique des prix des produits par mois</h2>
            <canvas id="myChart" width="800" height="400"></canvas>
        </div>
    </div>
</div>

<?php
    // Données factices pour l'exemple
    $gestion2 = DB::table('produitees')
    -> select (DB::raw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(prix) as total'))
    ->groupBy('year','month')
    ->get();


    $label = [];
    $data = [];
    foreach ($gestion2 as $prod){
      $label[] =$prod->year . '-' .$prod->month;
      $data[]= $prod->total;
    }
    $chart = new \stdClass();
    $chart->type = 'bar';
    $chart -> data = new \stdClass();
    $chart->data->label=$label;
    $chart->data->datasets =[
      [
        'label'=> 'montant depense',
        'data'=>$data,
        'backgroundColor'=>'rgba(255,99,132,0.2)',
        'borderColor'=> 'rgba(255,99,132,1)',
        'borderwidth'=>1
      ]
    ];


?>





<script>
    const data = <?php echo json_encode($chart); ?>;

    // Configuration du graphique
    const options = {
        scales: {
            y: {
                beginAtZero: true // Commencer l'axe y à zéro
            }
        }
    };

    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: data.type,
        data: {
            labels: data.data.label,
            datasets: data.data.datasets
        },
        options: options
    });
</script>








</body>


</html>
    </div>
</div>
  @endsection
