<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Application</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <h3 style="color:blueviolet;padding-left:35px">Products List</h3>
    <div class="container" style="margin-top:50px">
       @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        
        @endif
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col"> Product Name</th>
                <th scope="col">Qty</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($product as $product)
                   
              <tr>
                <th scope="row">{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td><a href="{{route('product.edit',['product'=>$product])}}" class="btn btn-primary">Edit</a> <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>
