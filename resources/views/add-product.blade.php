
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"/>
    <title>Document</title>
    l
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
               <h1>Add Product</h1>
               <form action="{{ url('/store-product') }}", method="post">
                @csrf 
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" required>
                    </div>

                   <button type="submit" class="btn btn-info mt-3">submit</button>
               </form>
            </div>
        </div>
    </div>
</body>
</html>