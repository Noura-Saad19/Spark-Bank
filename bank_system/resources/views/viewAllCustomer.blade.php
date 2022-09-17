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
                        <h3 class="card-title">All Customers</h3>
                    </div>
                    @if(session('msg'))
                        <div class="alert alert-success mt-1">
                            {{ session('msg') }}
                        </div>
                    @elseif(session('fail'))
                        <div class="alert alert-danger mt-1">
                            {{ session('fail') }}
                        </div>
                    @endif
                    <div class="card-body table-responsive">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Balance</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->balance}}</td>
                                    <td>
                                        <a
                                            class="btn btn-sm btn-primary"
                                            href="{{route("customer.transfer",$customer->id)}}"
                                            id="{{$customer->email}}">
                                            Tranfer
                                        </a>
                                        <a
                                            class="btn btn-sm btn-info"
                                            href="{{url("/viewonecustomer/{$customer->email}")}}">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

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

