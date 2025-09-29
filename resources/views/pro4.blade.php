<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SkateLife</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <?php include 'navbar.html'; ?>


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categorías</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Camisetas <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Cencilla</a>
                                <a href="" class="dropdown-item">personalizada</a>
                                <a href="" class="dropdown-item">de lujo</a>
                            </div>
                        </div>
                       <a href="" class="nav-item nav-link">Rodilleras</a>
                        <a href="" class="nav-item nav-link">Zapatos</a>
                        <a href="" class="nav-item nav-link">Cascos</a>
                        <a href="" class="nav-item nav-link">Lijas</a>
                        <a href="" class="nav-item nav-link">Ruedas</a>
                        <a href="" class="nav-item nav-link">Bujes</a>
                        <a href="" class="nav-item nav-link">lubricantes</a>
                        <a href="" class="nav-item nav-link">tornillos</a>
                        <a href="" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>kateLife</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Inicio</a>
                            <a href="shop.php" class="nav-item nav-link">Tienda</a>
                            <a href="detail.php" class="nav-item nav-link active">Detalle de Producto</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.php" class="dropdown-item">Carrito de Compras</a>
                                    <a href="checkout.php" class="dropdown-item">Pagar</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contacto</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="login.php" class="nav-item nav-link">Iniciar Sesión</a>
                            <a href="register.php" class="nav-item nav-link">Registrarse</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Detalle de Producto</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Inicio</a></p>
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
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="img/product-1.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/product-2.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/product-3.jpg" alt="Image">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="img/product-4.jpg" alt="Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
    <?php include 'navbar.html'; ?>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">Camisa Oversize Confort Urbano</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
    <?php include 'footer.html'; ?>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                </div>
                <small class="pt-1">(110 Reseñas)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">$70.000</h3>
            <p class="mb-4">Experimenta la máxima comodidad y estilo con nuestra **Camisa Oversize Confort Urbano**. Perfecta para un look relajado y moderno, su corte amplio te brinda libertad de movimiento y un toque de tendencia urbana. Confeccionada con tela suave y transpirable, es ideal para cualquier estación y ocasión casual.</p>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Talla:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-s" name="size">
                        <label class="custom-control-label" for="size-s">S</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-m" name="size" checked>
                        <label class="custom-control-label" for="size-m">M</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-l" name="size">
                        <label class="custom-control-label" for="size-l">L</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-xl" name="size">
                        <label class="custom-control-label" for="size-xl">XL</label>
                    </div>
                </form>
            </div>
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Color:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-1" name="color">
                        <label class="custom-control-label" for="color-1">Negro</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-2" name="color">
                        <label class="custom-control-label" for="color-2">Blanco</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-3" name="color">
                        <label class="custom-control-label" for="color-3">Gris</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-4" name="color">
                        <label class="custom-control-label" for="color-4">Azul Marino</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-5" name="color">
                        <label class="custom-control-label" for="color-5">Verde Menta</label>
                    </div>
                </form>
            </div>
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
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reseñas (110)</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Descripción del Producto</h4>
                    <p>La **Camisa Oversize Confort Urbano** redefine la moda casual con su corte holgado y materiales de primera calidad. Ideal para quienes buscan un estilo relajado pero a la vanguardia, esta camisa es increíblemente versátil y se adapta a diversas combinaciones, desde jeans hasta joggers.</p>

                    <p>Fabricada con una **mezcla de algodón premium**, ofrece una sensación suave al tacto y una excelente transpirabilidad, manteniéndote fresco y cómodo durante todo el día. Sus acabados de alta calidad aseguran una durabilidad excepcional, haciendo de esta prenda una inversión inteligente para tu armario.</p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Información Adicional</h4>
                    <p>
                        Material: Algodón (70%) y Poliéster (30%)<br>
                        Estilo: Oversize, casual urbano<br>
                        Cuello: Redondo<br>
                        Mangas: Cortas (caída de hombro)<br>
                        Cuidado: Lavar a máquina con agua fría, no usar blanqueador, secar a baja temperatura.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Confort: Tela suave y transpirable
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Versatilidad: Ideal para combinar con múltiples prendas
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">1 reseña para "Camisa Oversize Confort Urbano"</h4>
                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>Sofía M. <small> - <i>05 Julio 2025</i></small></h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>Me encanta esta camisa, es super cómoda y el estilo oversize queda perfecto. La tela es muy suave y fresca, ideal para el clima de Funza. Ya la lavé varias veces y sigue igual. ¡La mejor compra!</p>
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
---

<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">También te Puede Interesar</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Gorra Snapback</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$65.000</h6><h6 class="text-muted ml-2"><del>$70.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detalle</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                    </div>
                </div>
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-2.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Mochila Urbana</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$130.000</h6><h6 class="text-muted ml-2"><del>$140.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detalles</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                    </div>
                </div>
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-3.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Camisa Oversize</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$70.000</h6><h6 class="text-muted ml-2"><del>$75.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detalles</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                    </div>
                </div>
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-4.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Rodilleras Pro</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$45.000</h6><h6 class="text-muted ml-2"><del>$50.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detalles</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                    </div>
                </div>
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Zapatillas Skater</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$210.000</h6><h6 class="text-muted ml-2"><del>$220.000</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detalles</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php include 'footer.html'; ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>