<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg {
            border: 2px solid greenyellow;
        }

        th {
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }

        td {
            border: 1px solid skyblue;
            text-align: center;
        }
    </style>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div class="div_deg">
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($product as $products)


                            <tr>
                                <td>{{$products->title}}</td>
                                <td>{{$products->description}}</td>
                                <td>{{$products->category}}</td>
                                <td>{{$products->price}}</td>
                                <td>{{$products->quantity}}</td>
                                <td><img height="120" width="120" alt="image" src="products/{{$products->image}}"></td>
                                <td>
                                    <a class="btn btn-success" href="{{url('update_product', $products->id)}}">Update</a>
                                </td>
                                <td>
                                    <form action="{{ route('delete_product', $products->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="div_deg">

                    {{$product->links()}}
                </div>

            </div>
        </div>
    </div>
    @include('admin.scripts')
</body>

</html>