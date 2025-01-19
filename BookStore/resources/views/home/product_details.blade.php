<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style type="text/css">
        .div_center{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .detail_box{
            padding: 15px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')

    </div>
    <!-- Product details start -->
    <!-- shop section -->

    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Latest Products
                </h2>
            </div>
            <div class="row">




                <div class="col-md-12">
                    <div class="box">

                        <div class="div_center">
                            <img width="400" src="/products/{{$data->image}}" alt="image">
                        </div>

                        <div class="detail-box">
                            <h6>
                                {{$data->title}}
                            </h6>
                            <h6>
                                Price
                                <span>
                                    {{$data->price}}
                                </span>
                            </h6>
                        </div>

                        <div class="detail-box">
                            <h6>
                                Category: {{$data->category_name}}
                            </h6>
                            <h6>
                                Available Quantity
                                <span>
                                    {{$data->quantity}}
                                </span>
                            </h6>
                        </div>

                        <div class="detail-box">
                            <p>
                                {{$data->description}}
                            </p>
                            
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- end shop section -->
    <!-- Product details end -->

    @include('home.footer')


    <script src="{{asset('s/jqjuery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>