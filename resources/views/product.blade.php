<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>coding test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}"/>
   
  </head>
  <body>
    <div class="container ">
        <div class="my-2">
            <nav class="bg-info">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <p class="fw-bold text-white">IMS</p>
                    <div>
                        <x-app-layout>
                        </x-app-layout>  
                    </div>
                </div>       
            </nav>
        </div>
        <div class="d-flex justify-content-end align-items-center my-2">
            
            <a class="btn btn-sm btn btn-outline-primary  rounded"
                href="{{ url('/add-product') }}"><i class="fa-solid fa-plus-circle "></i> Add Product</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Welcome! </strong>{{ session('success') }}
                <button class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead class="table-dark ">
                <tr>
                    <th>Name</th>
                    <th class="text-right">Quantity</th>
                    <th class="text-right">Price</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td class="text-right">{{ $item->quantity }}</td>
                    <td class="text-right">{{ $item->price }}</td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-success rounded" href="{{ url('/edit-product',$item->id )}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a class="btn btn-sm btn-danger" href="{{ url('/delete-product', $item->id)}}"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr> 
                @endforeach
                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>