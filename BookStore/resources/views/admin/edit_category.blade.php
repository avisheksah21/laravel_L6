<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type='text'] {
            width: 400px;
            height: 50px;
        }
    </style>
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_deg">
                    <h1 style="color:white">Update Category</h1>
                </div>
                <form action="{{url('update_category', $data->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="category" value="{{$data->category_name}}">
                    <input class="btn btn-secondary" type="submit" value="Update Category">
                </form>

            </div>
        </div>
    </div>
    @include('admin.scripts')
</body>

</html>