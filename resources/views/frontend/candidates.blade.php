<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->



    </div>
  </header><!-- End Header -->

<body>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{route('show_home')}}">Home</a></li>
          <li>Candidates Page</li>
        </ol>
        <h2>Fill This Form Please</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <p>


            @if ($errors->any())
                <div>

                        @foreach ($errors->all() as $error)

                            <script>

                                iziToast.show({
                                color: 'red',
                                position:'topRight',
                                message: '{{ $error }}'
                            });

                            </script>

                        @endforeach

                </div>
            @endif

            <form action="{{route('create_candidate')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <legend>Create Candidate</legend>

                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name</label>
                <input type="text" id="disabledTextInput" class="form-control" name="name" placeholder="name">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Job</label>
                <input type="text" id="disabledTextInput" class="form-control" name="job" placeholder="job">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Phone</label>
                <input type="text" id="disabledTextInput" class="form-control" name="phone" placeholder="phone">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Email</label>
                <input type="email" id="disabledTextInput" class="form-control" name="email" placeholder="email">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Address</label>
                <input type="text" id="disabledTextInput" class="form-control" name="address" placeholder="address">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="formFile" name="photo">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Resume</label>
                    <input class="form-control" type="file" id="formFile" name="pdfresume">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Video Candidate</label>
                    <input class="form-control" type="file" id="formFile" name="videocandidate">
                </div>
                <button type="submit" class="btn btn-primary">Create</button>

            </form>

            @if(session('success'))

            <script>

            iziToast.success({
            color: 'green',
            position:'topRight',
            message: '{{session('success')}}'
            });

            </script>

            @endif
        </p>
      </div>
    </section>

  </main><!-- End #main -->

  @include('frontend.body.footer')
