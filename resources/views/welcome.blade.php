<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="container mt-5">
            <div class="card mx-auto p-3" style="width: 50%;">
                <div class="card-body">
                    <h2 class="card-title font-weight-bold">Invite friends, earn rewards!</h2>
                    <h5 class="card-subtitle mb-2 text-muted">Get PHP 250 on your next savings deposit!</h5>
                    
                    
                    <form class="pt-3" name="refer-form" id="refer-form" method="post" action="{{url('/refer')}}">
                    @csrf
                        <input type="email" name="email" class="form-control" placeholder="Enter email address">
                        <button type="submit" class="btn btn-primary w-100 mt-3">Send Referral Link</button>
                    </form>
       

                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">Your total earnings</h5>
                                <div class="row text-center">
                                    <div class="col">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h5 class="card-title">PHP {{ $earnings }}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Total Earned</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card border-0">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $referrals }}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">Referred Friends</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
