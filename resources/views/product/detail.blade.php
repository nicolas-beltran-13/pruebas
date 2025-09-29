{{-- resources/views/product/detail.blade.php --}}
@extends('layouts.app') {{-- Asegúrate de que 'layouts.app' exista y tenga @yield('content') --}}

@section('title', $product['name'] . ' - SkateLife')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Detalle de Producto</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="{{ route('home') }}">Inicio</a></p> {{-- Asegúrate de tener una ruta 'home' --}}
            <p class="m-0 px-2">-</p>
            <p class="m-0">Detalle de Producto</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    @foreach ($product['gallery_images'] as $index => $image)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <img class="w-100 h-100" src="{{ asset($image) }}" alt="Imagen de {{ $product['name'] }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">{{ $product['name'] }}</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    @php
                        $fullStars = floor($product['average_rating']);
                        $hasHalfStar = ($product['average_rating'] - $fullStars) >= 0.5;
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $fullStars)
                            <small class="fas fa-star"></small>
                        @elseif ($i == $fullStars + 1 && $hasHalfStar)
                             <small class="fas fa-star-half-alt"></small>
                        @else
                             <small class="far fa-star"></small>
                        @endif
                    @endfor
                </div>
                <small class="pt-1">({{ $product['reviews_count'] }} Reseñas)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">${{ number_format($product['price'], 0, ',', '.') }}
                 @if(isset($product['old_price']) && $product['old_price'] > $product['price'])
                     <span class="text-muted ml-2"><del>${{ number_format($product['old_price'], 0, ',', '.') }}</del></span>
                 @endif
            </h3>
            <p class="mb-4">{!! nl2br(e($product['description'])) !!}</p> {{-- Usar nl2br si el texto viene con saltos de línea simples --}}

            @if(!empty($product['sizes']))
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Tamaño:</p>
                <form>
                    @foreach ($product['sizes'] as $size)
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-{{ $loop->index }}" name="size" {{ $loop->first ? 'checked' : '' }}>
                        <label class="custom-control-label" for="size-{{ $loop->index }}">{{ $size }}</label>
                    </div>
                    @endforeach
                </form>
            </div>
            @endif

            @if(!empty($product['colors']))
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Color:</p>
                <form>
                     @foreach ($product['colors'] as $color)
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-{{ $loop->index }}" name="color" {{ $loop->first ? 'checked' : '' }}>
                        <label class="custom-control-label" for="color-{{ $loop->index }}">{{ $color }}</label>
                    </div>
                     @endforeach
                </form>
            </div>
            @endif

            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-minus">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control bg-secondary text-center" value="1">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-plus">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Añadir al carrito</button>
            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Compartir en:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Descripción</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Información</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reseñas ({{ $product['reviews_count'] }})</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Descripción del Producto</h4>
                    {!! $product['long_description'] !!} {{-- Usamos {!! !!} porque el contenido ya está en HTML --}}
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Información Adicional</h4>
                     <p>{!! nl2br(e($product['additional_info'])) !!}</p>
                     {{-- Puedes estructurar mejor esta info si está en formato clave: valor --}}
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                     <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">1 reseña para "{{ $product['name'] }}"</h4>
                            <div class="media mb-4">
                                <img src="{{ asset('img/user.jpg') }}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;"> {{-- Imagen de usuario genérica --}}
                                <div class="media-body">
                                    <h6>Laura G. <small> - <i>15 Mayo 2025</i></small></h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>¡Me encantan estas zapatillas! Son súper cómodas y aguantan un montón en el skatepark. El agarre es increíble, me siento mucho más segura haciendo trucos. Además, el estilo es genial, las uso para todo. ¡Totalmente recomendadas!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Deja una reseña</h4>
                            <small>Tu dirección de correo electrónico no será publicada. Los campos obligatorios están marcados con *</small>
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Tu Calificación * :</p>
                                <div class="text-primary">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="message">Tu Reseña *</label>
                                    <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Tu Nombre*</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Tu Correo Electrónico *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Enviar tu reseña" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">También te Puede Interesar</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                 @forelse ($product['related_products'] as $relatedProduct)
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ asset($relatedProduct['image']) }}" alt="{{ $relatedProduct['name'] }}">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $relatedProduct['name'] }}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>${{ number_format($relatedProduct['price'], 0, ',', '.') }}</h6>
                            @if(isset($relatedProduct['old_price']) && $relatedProduct['old_price'] > $relatedProduct['price'])
                            <h6 class="text-muted ml-2"><del>${{ number_format($relatedProduct['old_price'], 0, ',', '.') }}</del></h6>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="{{ route('product.detail', ['id' => $relatedProduct['id']]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detalle</a>
                        <a href="{{ route('cart') }}" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a> {{-- Asegúrate de tener la ruta 'cart' --}}
                    </div>
                </div>
                 @empty
                      <p>No hay productos relacionados disponibles.</p>
                 @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
