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

<div class="container d-flex justify-content-center">
    <div class="col-7">
        <form class="p-5 border border-primary" action="{{route('apartment.store')}}" method="post"
              style=" min-height: 500px;margin-top: 100px;border-radius: 20px">
            @csrf
            <h1 class="text-center">Create Apartment</h1>
            @if(session('create_success'))
                <p style="font-weight: bold" class="text-center text-success">{{session('create_success')}}</p>
            @endif
            <div class="row">
                <div class="form-group col-7">
                    <label for="apartment_name">Apartment name</label>
                    <input name="apartment_name" class="form-control" id="apartment_name" type="text"
                           placeholder="Enter Apartment name">
                    @error('apartment_name')
                    <label for="" style="font-size: 15px" class="text-danger">{{$message}}</label>
                    @enderror
                </div>
                <div class="form-group col-5">
                    <label for="apartment_name">Price</label>
                    <input name="price" class="form-control" id="apartment_name" type="number"
                           placeholder="Enter price">
                    @error('price')
                    <label for="" style="font-size: 15px" class="text-danger">{{$message}}</label>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="apartment_name">Address</label>
                    <input name="address" class="form-control" id="apartment_name" type="text"
                           placeholder="Enter Apartment address">
                    @error('address')
                    <label for="" style="font-size: 15px" class="text-danger">{{$message}}</label>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="apartment_name">Avatar</label>
                    <input name="avatar" class="form-control" id="apartment_name" type="text"
                           placeholder="Enter link avatar">
                    @error('avatar')
                    <label for="" style="font-size: 15px" class="text-danger">{{$message}}</label>
                    @enderror
                </div>

            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="apartment_name">General information</label>
                    <input name="general_information" class="form-control" id="apartment_name" type="text"
                           placeholder="Enter general information">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="apartment_name">Detail information</label>
                    <input name="details" class="form-control" id="apartment_name" type="text"
                           placeholder="Enter detail information">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <button class="btn btn-primary form-control" type="submit">Create</button>
                </div>
                <div class="form-group col-6">
                    <button class="btn btn-warning form-control" type="reset">Reset</button>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <a href="{{route('apartment.index')}}">Go to message board</a>
                </div>
            </div>


        </form>
    </div>
</div>


</body>
</html>
