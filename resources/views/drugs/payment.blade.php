<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Outfit" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatable.css') }}" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

.container {
    margin: 30px auto
}

.container .card {
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    background: #fff;
    border-radius: 0px
}

body {
    background: #eee
}

.btn.btn-primary {
    background-color: #ddd;
    color: black;
    box-shadow: none;
    border: none;
    font-size: 20px;
    width: 100%;
    height: 100%
}

.btn.btn-primary:focus {
    box-shadow: none
}

.container .card .img-box {
    width: 80px;
    height: 50px
}

.container .card img {
    width: 100%;
    object-fit: fill
}

.container .card .number {
    font-size: 24px
}

.container .card-body .btn.btn-primary .fab.fa-cc-paypal {
    font-size: 32px;
    color: #3333f7
}

.fab.fa-cc-amex {
    color: #1c6acf;
    font-size: 32px
}

.fab.fa-cc-mastercard {
    font-size: 32px;
    color: red
}

.fab.fa-cc-discover {
    font-size: 32px;
    color: orange
}

.c-green {
    color: green
}

.box {
    height: 40px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ddd
}

.btn.btn-primary.payment {
    background-color: #1c6acf;
    color: white;
    border-radius: 0px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 24px
}

.form__div {
    height: 50px;
    position: relative;
    margin-bottom: 24px
}

.form-control {
    width: 100%;
    height: 45px;
    font-size: 14px;
    border: 1px solid #DADCE0;
    border-radius: 0;
    outline: none;
    padding: 2px;
    background: none;
    z-index: 1;
    box-shadow: none
}

.form__label {
    position: absolute;
    left: 16px;
    top: 10px;
    background-color: #fff;
    color: #80868B;
    font-size: 16px;
    transition: .3s;
    text-transform: uppercase
}

.form-control:focus+.form__label {
    top: -8px;
    left: 12px;
    color: #1A73E8;
    font-size: 12px;
    font-weight: 500;
    z-index: 10
}

.form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
    top: -8px;
    left: 12px;
    font-size: 12px;
    font-weight: 500;
    z-index: 10
}

.form-control:focus {
    border: 1.5px solid #1A73E8;
    box-shadow: none
}
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt=""> </div>
                        <div class="number"> <label class="fw-bold" for="">**** **** **** 1060</label> </div>
                        <div class="d-flex align-items-center justify-content-between"> <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small> <small><span class="fw-bold">Name:</span><span>Kumar</span></small> </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png" alt=""> </div>
                        <div class="number"> <label class="fw-bold">**** **** **** 1060</label> </div>
                        <div class="d-flex align-items-center justify-content-between"> <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small> <small><span class="fw-bold">Name:</span><span>Kumar</span></small> </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png" alt=""> </div>
                        <div class="number"> <label class="fw-bold">**** **** **** 1060</label> </div>
                        <div class="d-flex align-items-center justify-content-between"> <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small> <small><span class="fw-bold">Name:</span><span>Kumar</span></small> </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <p class="mb-0 fw-bold h4">Payment Methods</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-body border p-0">
                            <p> <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">PayPal</span> <span class="fab fa-cc-paypal"> </span> </a> </p>
                            <div class="collapse p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of product</span></p>
                                        <p class="mb-0"><span class="fw-bold">Price:</span><span class="c-green">:$452.90</span></p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque nihil neque quisquam aut repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab quis, iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border p-0">
                            <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Credit Card</span> <span class=""> <span class="fab fa-cc-amex"></span> <span class="fab fa-cc-mastercard"></span> <span class="fab fa-cc-discover"></span> </span> </a> </p>
                            <div class="collapse show p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-5 mb-lg-0 mb-3">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of product</span> </p>
                                        <p class="mb-0"> <span class="fw-bold">Price:</span> <span class="c-green">:$452.90</span> </p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque nihil neque quisquam aut repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab quis, iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                    <div class="col-lg-7">
                                        <form action="" class="form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">Card Number</label> </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">MM / yy</label> </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form__div"> <input type="password" class="form-control" placeholder=" "> <label for="" class="form__label">cvv code</label> </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">name on the card</label> </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="btn btn-primary w-100">Sumbit</div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn btn-primary payment"> Make Payment </div>
                </div>
            </div>
        </div>
    </body>
</html>