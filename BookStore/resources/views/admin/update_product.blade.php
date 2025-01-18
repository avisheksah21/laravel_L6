<!DOCTYPE html>
<html>

<head>
  @include('admin.css')
  <style type="text/css">
    .div_deg {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    label {
      display: inline-block;
      width: 200px;
      padding: 20px;
    }
  </style>
</head>

<body>
  @include('admin.header')
  @include('admin.sidebar')
  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">

        <h2>Update Product</h2>
        <div class="div_deg">
          <form action="{{url('edit_product', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
              <label>Title</label>
              <input type="text" name="title" value="{{$data->title}}">
            </div>
            <div>
              <label>Description</label>
              <textarea name="description">{{$data->description}}</textarea>
            </div>
            <div>
              <label>Price</label>
              <input type="text" name="price" value="{{$data->price}}">
            </div>
            <div>
              <label>Quantity</label>
              <input type="number" name="quantity" value="{{$data->quantity}}">
            </div>
            <div>
              <label>category</label>
              <select name="category">
                <option value="{{$data->category}}">{{$data->category}}</option>
                @foreach ($category as $categories)
                <option value="{{$categories->category_name}}">{{$categories->category_name}}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label>Image</label>
              <img src="/products/{{$data->image}}" alt="image">
            </div>
            <div>
              <label>Change Image</label>
              <input type="file" name="image">
            </div>
            <div>
              <input class="btn btn-success" type="submit" value="Update Product">
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
  <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
  <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('admincss/js/charts-home.js')}}"></script>
  <script src="{{asset('admincss/js/front.js')}}"></script>
</body>

</html>