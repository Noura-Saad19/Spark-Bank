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

<div class="content-wrapper m-5">
    <div class="bg-image overlay" style="background-image:url({{asset('web/img/home-background.jpg')}})"></div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Transfer Money</h3>
                    </div>
                    <div class="content">
                        <div class="container-fluid">
                            @if(session('msg'))
                                <div class="alert alert-success mt-5">
                                    {{ session('msg') }}
                                </div>

                            @endif
                            <div class="row">
                                <div class="col-12">

                                    <form method="post" action="{{url("/store")}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="{{$transfer->id}}">
                                                        <label class="form-label">From : </label>
                                                        <input type="email" name="sender_email" class="form-control"
                                                               value="{{$transfer->email}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Transfer To : </label>

                                                        <input type="email" name="receiver_email" class="form-control"
                                                               placeholder="Enter Transfered Email">

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Amount</label>

                                                        <input type="number" class="form-control" name="money"
                                                               placeholder="Enter Transfered Money">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pb-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
                                        </div>


                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
