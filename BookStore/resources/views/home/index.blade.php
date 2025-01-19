<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style>
        body {
            background-color:rgb(167, 202, 169); /* Light gray background */
        }
        .hero_area {
            background-color:rgb(244, 178, 178); /* Light blue background */
        }
    </style>
</head>

<body>
  <div class="hero_area">
    @include('home.header')
  </div>
  @include('home.product')
  @include('home.footer')

  @include('home.script')

</body>

</html>