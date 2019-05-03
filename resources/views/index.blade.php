<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My CarsApp</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>


<body>

<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid bg-danger p-1">
<div class="row">
    <div class="col-md-6">
        <h1 class="display-1 text-white">Momento</h1>
        <p class="lead text-white">Find The Car You Always Wanted.</p>
    </div>
    <div class="col-md-6">
        <img src="img/lada.png" alt="bgCar">
    </div>
</div>
    </div>
    <div class="col-md-6">
        <form action="{{route('cars.create')}}" method="POST">
           @csrf
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="">Brand</label>
                    <input type="text" name="make" class="form-control" id="" required>
                </div>

                <div class="col-md-12">
                    <label for="">Serie</label>
                    <input type="text" name="model" class="form-control" id="" required>
                </div>

                <div class="col-md-12">
                    <label for="">Year</label>
                    <input type="date" name="produced_on" class="form-control" id="" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-info  ">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <div class="col-md-6">
        <table class="table table-striped table-hover">
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Produced on</th>
            </tr>
            @foreach ($cars as $car)
                <tr>
                    <td>{{$car->make}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->produced_on}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

</body>