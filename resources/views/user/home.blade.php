@extends('layouts.layout')

@section('content')
 <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url('{{ asset("img/slide-1.jpg") }}')"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are awesome</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url('{{ asset("img/slide-2.jpg") }}')"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are great</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aspernatur, dolorum harum molestias tempora deserunt voluptas possimus quos eveniet, vitae voluptatem accusantium atque deleniti inventore. Enim quam placeat expedita! Quibusdam!</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url('{{ asset("img/slide-3.jpg") }}')"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are superb</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptates necessitatibus dicta recusandae quae amet nobis sapiente explicabo voluptatibus rerum nihil quas saepe, tempore error odio quam obcaecati suscipit sequi.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <!--Latest product  -->
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @if(isset($latestProducts) && !$latestProducts->isEmpty())
                                @foreach($latestProducts as $product)
                                <div class="single-product">
                                    
                                    <div class="product-f-image">
                                        <a href="#">
                                            <img src="{{ asset('img/products/' . $product->HinhAnh) }}" 
                                                alt="{{ $product->TenSanPham }}" 
                                                class="fixed-product-image">
                                        </a>
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="#" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2>
                                        <a href="#">
                                            {{ $product->TenSanPham }}
                                        </a>
                                    </h2>

                                    <div class="product-carousel-price">
                                        <ins>{{ number_format($product->Gia, 0, ',', '.') }} VNĐ</ins>
                                    </div> 
                                </div>
                                @endforeach

                            @else
                                <p class="text-center">Chưa có sản phẩm nào để hiển thị.</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <img src="img/services_logo__1.jpg" alt="">
                            <img src="img/services_logo__2.jpg" alt="">
                            <img src="img/services_logo__3.jpg" alt="">
                            <img src="img/services_logo__4.jpg" alt="">
                            <img src="img/services_logo__1.jpg" alt="">
                            <img src="img/services_logo__2.jpg" alt="">
                            <img src="img/services_logo__3.jpg" alt="">
                            <img src="img/services_logo__4.jpg" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apple new mac book 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>

                <!-- recently product -->
                <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <a href="{{ route('recently.viewed') }}" class="wid-view-more">View All</a>

                    @if (!empty($recentProducts))
                        @foreach ($recentProducts as $sp)
                            <div class="single-wid-product">
                                <a href="single-product.html">
                                    <img src="{{ asset('img/products/'.$sp->HinhAnh) }}" alt="{{ $sp->Ten }}" class="product-thumb">
                                </a>
                                <h2><a href="single-product.html">{{ $sp->Ten }}</a></h2>

                                @for ($i = 0; $i < 5; $i++)
                                <span class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                </span>
                                @endfor

                                <div class="product-wid-price">
                                    <ins>${{ number_format($sp->GiaSauGiam, 2) }}</ins>
                                    <del>${{ number_format($sp->GiaNhap, 2) }}</del>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Không có sản phẩm nào được xem gần đây.</p>
                    @endif
                </div>
            </div>

                <!-- Single product -->
                <div class="col-md-4">
                    @php
                        // Inline Top New widget: use TopNewService directly here
                        $topService = app(\App\Service\TopNewService::class);
                        $items = $topService->getTop(3);
                    @endphp

                    @if(isset($items) && $items->count())
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top New</h2>
                            <a href="#" class="wid-view-more">View All</a>
                            @foreach($items as $item)
                                @php
                                    $thumb = $item->HinhAnh ? asset('img/products/' . $item->HinhAnh) : asset('img/product-thumb-1.jpg');
                                    $title = $item->Ten ?? 'Product';
                                    $price = $item->GiaSauGiam ?? $item->GiaNhap ?? null;
                                    $detailUrl = url('single-product') . '?id=' . ($item->MaSanPham ?? '');
                                @endphp
                                <div class="single-wid-product">
                                    <a href="{{ $detailUrl }}"><img src="{{ $thumb }}" alt="" class="product-thumb"></a>
                                    <h2><a href="{{ $detailUrl }}">{{ $title }}</a></h2>
                                    <div class="product-wid-price">
                                        @if($price)
                                            <ins>${{ number_format($price, 2) }}</ins>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="single-product-widget">
                            <h2 class="product-wid-title">Top New</h2>
                            <p>Không có sản phẩm mới.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
@endsection