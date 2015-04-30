@extends('app')
@section('content')

    <!-- carousel -->
    <div class="jcarousel-wrapper">
        <div class="jcarousel">
            <ul>
                <li><a href="#" title=""><img src="image/lg.png" alt=lg"/></a></li>
                <li><a href="#" title=""><img src="image/lg.png"  alt=lg"/></a></li>
                <li><a href="#" title=""><img src="image/lg.png"  alt=lg"/></a></li>
                <li><a href="#" title=""><img src="image/lg.png" alt=lg"/></a></li>
            </ul>
        </div>
        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
    </div>
    <!-- sidebar -->
    <div class="row">
        @include('sidebar')
        <!-- main-content -->
        <div class="col-sm-9 col-md-9 col-lg-9">

            <!-- Sản phẩm cao cấp -->
            <div class="row">
                <div class="category">
                    <span>HÀNG CAO CẤP</span>
                    <a href="#" class="jcarousel-item-next"><i class="fa fa-caret-right"></i></a>
                    <a href="#" class="jcarousel-item-prev"><i class="fa fa-caret-left"></i></a>

                </div>
                <div class="jcarousel-item">
                    <ul>
                        @foreach($newProducts as $newProduct)
                               <li>
                                   <div class="thumbnail">
                                       <a href="{{url('/','product_detail')}}"><img src="{{asset('image\lg_g3.jpg')}}" style="height: 220px; width: 180px" alt="lg_g3"></a>

                                       <div class="caption">
                                           <h3>{{$newProduct->name}}</h3>
                                            <h4 class="price"><b>{{$newProduct->price.'$'}}</b></h4>
                                           <p>
                                               <a href="#" class="btn btn-primary"><span
                                                           class="glyphicon glyphicon-shopping-cart"></span> THÊM VÀO GIỎ HÀNG</a>
                                           </p>
                                       </div>
                                   </div>
                               </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Sản phẩm tầm trung -->
            <div class="row">
                <div class="category">
                    <span>HÀNG TẦM TRUNG</span>
                    <a href="#" class="jcarousel-item-next"><i class="fa fa-caret-right"></i></a>
                    <a href="#" class="jcarousel-item-prev"><i class="fa fa-caret-left"></i></a>

                </div>
                <div class="jcarousel-item">
                    <ul>
                        @foreach($newProducts as $newProduct)
                            <li>
                                <div class="thumbnail">
                                    <a href="{{url('/','product_detail')}}"><img src="{{asset('image\lg_g3.jpg')}}" style="height: 220px; width: 180px" alt="lg_g3"></a>

                                    <div class="caption">
                                        <h3>{{$newProduct->name}}</h3>
                                        <h4 class="price"><b>{{$newProduct->price.'$'}}</b></h4>
                                        <p>
                                            <a href="#" class="btn btn-primary"><span
                                                        class="glyphicon glyphicon-shopping-cart"></span> THÊM VÀO GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Hàng giá rẻ -->
            <div class="row">
                <div class="category">
                    <span>HÀNG GIÁ RẺ</span>
                    <a href="#item1" class="jcarousel-item-next"><i class="fa fa-caret-right"></i></a>
                    <a href="#item1" class="jcarousel-item-prev"><i class="fa fa-caret-left"></i></a>
                </div>
                <div class="jcarousel-item" id="item1">
                    <ul>
                        @foreach($newProducts as $newProduct)
                            <li>
                                <div class="thumbnail">
                                    <a href="{{url('/','product_detail')}}"><img src="{{asset('image\lg_g3.jpg')}}" style="height: 220px; width: 180px" alt="lg_g3"></a>

                                    <div class="caption">
                                        <h3>{{$newProduct->name}}</h3>
                                        <h4 class="price"><b>{{$newProduct->price.'$'}}</b></h4>
                                        <p>
                                            <a href="#" class="btn btn-primary"><span
                                                        class="glyphicon glyphicon-shopping-cart"></span> THÊM VÀO GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Phụ kiện -->
            <div class="row">
                <div class="category">
                    <span>PHỤ KIỆN</span>
                    <a href="#" class="jcarousel-item-next"><i class="fa fa-caret-right"></i></a>
                    <a href="#" class="jcarousel-item-prev"><i class="fa fa-caret-left"></i></a>
                </div>
                <div class="jcarousel-item">
                    <ul>
                        @foreach($newProducts as $newProduct)
                            <li>
                                <div class="thumbnail">
                                    <a href="{{url('/','product_detail')}}"><img src="{{asset('image\lg_g3.jpg')}}" style="height: 220px; width: 180px" alt="lg_g3"></a>

                                    <div class="caption">
                                        <h3>{{$newProduct->name}}</h3>
                                        <h4 class="price"><b>{{$newProduct->price.'$'}}</b></h4>
                                        <p>
                                            <a href="#" class="btn btn-primary"><span
                                                        class="glyphicon glyphicon-shopping-cart"></span> THÊM VÀO GIỎ HÀNG</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop