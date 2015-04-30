@extends('app')

@section('content')
			<!-- breadcrumb -->
			<ol class="breadcrumb">
				<li>
					<a href="#">Trang chủ</a>
				</li>
				<li>
					<a href="#">Iphone</a>
				</li>
				<li class="active">Tên sản phẩm</li>
			</ol>
			<!-- showproduct -->
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 " >
                    <div class="container-fluid white " style="padding-bottom: 15px;">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" >
                            <img src="image/product/iphone6_large1.jpg" alt="iphone 6" class="cloudzoom img-zoom" id="zoom">
                            <div id="slider">
                                <div class="thumbelina-but horiz left">&#706;</div>
                                <ul>
                                    <li><img class="cloudzoom-gallery" src="image/product/iphone6_small1.jpg"
                                    data-cloudzoom ="useZoom:'.cloudzoom', image:'image/product/iphone6_large1.jpg' "></li>
                                    <li><img class="cloudzoom-gallery" src="image/product/iphone6_small2.jpg"
                                    data-cloudzoom ="useZoom:'.cloudzoom', image:'image/product/iphone6_large2.jpg' "></li>
                                    <li><img class="cloudzoom-gallery" src="image/product/iphone6_small3.jpg"
                                    data-cloudzoom ="useZoom:'.cloudzoom', image:'image/product/iphone6_large3.jpg' "></li>
                                    <li><img class="cloudzoom-gallery" src="image/product/iphone6_small4.jpg"
                                    data-cloudzoom ="useZoom:'.cloudzoom', image:'image/product/iphone6_large4.jpg' "></li>
                                </ul>
                                <div class="thumbelina-but horiz right">&#707;</div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <table class="info-product">
                                <tbody>
                                    <tr>
                                        <td>Nhà sản xuất</td>
                                        <td>Apple</td>
                                    </tr>
                                    <tr>
                                        <td>Số lượng còn</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Mã sản phẩm</td>
                                        <td>NDDHS</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2 class="price">Giá: $799</h2>
                            <table class="info-product">
                                <tbody>
                                    <tr>
                                        <td>Color: </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">White  <span class="caret"></span></button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Black</a></li>
                                                    <li><a href="#">Blue</a></li>
                                                    <li><a href="#">Yellow</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quantity:</td>
                                        <td><input type="number" name="quantity" id="input" class="form-control" value="0" step="1" required="required" style="width:50%;" ></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary "><span class="glyphicon glyphicon-shopping-cart"></span> THÊM VÀO GIỎ HÀNG</a>
                        </div>
                    </div>
                    <div class="discription ">
                        <ul class="nav nav-tabs ">
                            <li class="active" ><a href="#discription" data-toggle="tab" >THÔNG SỐ</a></li>
                            <li class=""><a href="#comment" data-toggle="tab" >BÌNH LUẬN</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content white">
                            <div class="tab-pane fade active in" id="discription">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </div>
                            <div class="tab-pane fade " id="comment">
                                <div class="container-fluid" >
                                    <div class="fb-comments " data-href="https://www.facebook.com/mobilemarket0605?ref=bookmarks" data-numposts="5" data-colorscheme="light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('sidebar')
            </div>
@stop
