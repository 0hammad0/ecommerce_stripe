@extends('layouts.app')

@section('title')
    Welcome to Ecommerce Stripe
@endsection

@section('content')
    <div class="container">
        <div class="row pt120">
            <div class="books-grid">
                <div class="row mb30">
                    @foreach ($prod as $prods)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="books-item">
                                <div class="books-item-thumb">
                                    <img src="{{ $prods->prod_image }}" alt="book" />
                                    <div class="new">New</div>
                                    <div class="sale">Sale</div>
                                    <div class="overlay overlay-books"></div>
                                </div>

                                <div class="books-item-info">
                                    <h5 class="books-title"><a
                                            href="prod_detail/{{ $prods->id }}">{{ $prods->prod_name }}</a></h5>

                                    <div class="books-price">${{ $prods->prod_price }}</div>
                                </div>

                                <a href="addCart/{{ $prods->id }}" class="btn btn-small btn--dark add">
                                    <span class="text">Add to Cart</span>
                                    <i class="seoicon-commerce"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row pb120">
                    <div class="row">{{ $prod->links() }}</div>
                    <div class="col-lg-12">
                        <nav class="navigation align-center">
                            {{-- <a href="#" class="page-numbers bg-border-color current"><span>1</span></a>
                            <a href="#" class="page-numbers bg-border-color"><span>2</span></a>
                            <a href="#" class="page-numbers bg-border-color"><span>3</span></a>
                            <a href="#" class="page-numbers bg-border-color"><span>4</span></a>
                            <a href="#" class="page-numbers bg-border-color"><span>5</span></a> --}}

                            {{-- <svg class="btn-prev">
                                <use xlink:href="#arrow-left"></use>
                            </svg>
                            <svg class="btn-next">
                                <use xlink:href="#arrow-right"></use>
                            </svg> --}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
