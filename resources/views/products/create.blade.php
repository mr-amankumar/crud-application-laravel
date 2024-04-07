<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    <h3 style="color: blueviolet;padding-left:30px;">Product</h3>
    <div class="container" style="Margin-top:30px">

        <div class="row">
            <form method="post" action="{{route('product.store')}}">
                @csrf
                @method('post')
            <div class="col-sm-6">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control" placeholder="product name">
            </div>
            <div class="col-sm-6">
                <label for="qty">Qty</label>
                <input type="text" name="qty" class="form-control" placeholder="qty">
            </div>
            <div class="col-sm-6">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" placeholder="price">
            </div>
            <div class="col-sm-6">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" placeholder="description">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:15px;margin-left:14px;">Add Product</button>
        </form>
    </div>
</body>
</html>