<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('libs/Style/custom_style.css')}}">
    <link rel="stylesheet" href="{{url('libs/bootstrap/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>

<div class="container-fluid border">
    <div class="col-12 m-0 p-0" style="height: 120px;border-bottom: 1px solid #edf2f7">
        <div style="height: 100%" class="logo">
            <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fvi.pngtree.com%2Ffreepng%2Fapartment-ground-logo_6237449.html&psig=AOvVaw08R792An99J_P1FI1gq3oW&ust=1627483560282000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCOiV5e2-g_ICFQAAAAAdAAAAABAD" alt="">
        </div>
    </div>
    <div class="menu-top col-12 m-0 p-0" style="height: 50px;border-bottom: 1px solid #edf2f7">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Best home</a></li>
            <li><a href="{{route('apartment.create')}}">Create new</a></li>
            <li><a href="">Life style</a></li>
            <li><a href="">About us</a></li>
            <li><a href="">Contact us</a></li>
        </ul>
        <input type="text" placeholder="Search">
    </div>

    <div class="col-12 row">
        <div class="col-9 main_content row">
            @for($i = 0 ; $i < sizeof($apartment) ; $i++)
                <div class="col-4 border m-0 p-3 d-flex justify-content-center">
                    <div>
                        <img src="{{$apartment[$i]->avatar}}" alt="">
                        <h3>{{$apartment[$i]->apartment_name}}</h3>
                        <h4>{{$apartment[$i]->price}} $</h4>
                        <h5>{{$apartment[$i]->address}}</h5>
                        <hr>
                        <p>{{$apartment[$i]->details}}</p>
                    </div>
                </div>

            @endfor
            <div class="col-12 d-flex justify-content-center mt-2">
                @include('paginate',['list' => $apartment])
            </div>
        </div>
        <div class="col-3 right_menu p-5">
            <h2>Search by area</h2>
            <ul>
                <li>Distric 1</li>
                <li>Distric 2</li>
                <li>Distric 3</li>
                <li>Distric 4</li>
            </ul>
            <br>
            <h2>Search by price</h2>
            <ul>
                <li>< 10000$</li>
                <li>10000$ - 15000$</li>
                <li>15000$ - 30000$</li>
                <li>30000$ - 50000$</li>
                <li>50000$</li>
            </ul>

        </div>
    </div>
    <div class="footer col-12 d-flex justify-content-center">
        <p>@2021 DVT-LTV TLU-FPT</p>
    </div>
</div>
</body>
</html>
