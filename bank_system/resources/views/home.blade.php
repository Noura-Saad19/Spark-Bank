
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="{{asset('web/css/style.css')}}"/>

</head>
<body>


<!-- Header -->
<header id="header">
    <div class="container">
        <!-- Navigation -->
        <x-navbar></x-navbar>
        <!-- Navigation -->
    </div>
</header>
<!-- /Header -->

<!-- Home -->
<div id="home" class="hero-area">

    <div class="bg-image bg-parallax overlay" style="background-image:url({{asset('web/img/home-background.jpg')}})"></div>

    <div class="home-wrapper">
        <div class="container">
            <div class="row   ">
                <div class="col-md-12  ">
                    <h1 class="white-text">Welcome To Spark Bank</h1>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Home -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
