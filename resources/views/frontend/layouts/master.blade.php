
<!DOCTYPE html>
<html>
<head>
    <title>Islami Bank Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet"type="text/css"href="{{asset('frontend/css/customized.css')}}">
    <link rel="stylesheet"type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>
{{--website body--}}
<section class="body">
    <div class="container">
        <div class="col-md-12">
            <body>
            <div class="container">
                @include('frontend.layouts.header')
            </div>
            <div class="container">
                @yield('content')
            </div> </br>
            <div class="container">
                @include('frontend.layouts.footer')
            </div>
            <script src="{{asset('frontend/js/proper.js')}}" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>


            <script src="{{asset('frontend/js/bootstrap.js')}}" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
            <script src="{{asset('backend/js/handlebars.min-v4.7.6.js')}}"></script>
            </body>

        </div>




    </div>

</section>

</html>