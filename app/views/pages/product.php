<!-- Header and navbar -->
<?php require APPROOT . '/views/inc/product_header.php' ?>

<section class="feature" id="featured">
    <h1 class="heading"></h1>


    <!--   product  -->
    <section id="product" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="img-fluid">
                        <img src="<?php echo URLROOT . '/' . $data['product']->image; ?>" alt="" class="img-fluid">
                    </div>

                </div>
                <div class="col-sm-6 py-5">
                    <h5 style="font-size: 30px;"><?php echo $data['product']->name; ?></h5>
                    <small style="font-size: 14px; color: orange;">Marca: <?php echo $data['product']->manufacturer; ?></small>
                    <!---    product price       -->
                    <table class="my-3">
                        <tr style="font-size: 30px; background-color: #fff;">
                            <td>Por apenas:</td>
                            <td class="font-size-20 text-danger">R$<?php echo $data['product']->price; ?><span></span><small class="font-size-12">&nbsp;&nbsp;</small></td>
                        </tr>
                    </table>
                    <!---    !product price       -->

                    <!--    #policy -->
                    <div id="policy">
                        <div class="d-flex">
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">

                                </div>

                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">

                                </div>

                            </div>
                            <div class="return text-center mr-5">
                                <div class="font-size-20 my-2 color-second">
                                </div>
                                <div class="return text-center mr-5">
                                    <img src="<?php echo URLROOT . '/images/bandeiras-parcelamento.gif'; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    !policy -->
                    <div class="form-row pt-4">
                    <?php if(isset($_SESSION['user_id'])): ?>    
                    <div class="col">
                            <a href="<?php echo URLROOT; ?>/orders/registerOrder/<?php echo $data['product']->id; ?>/<?php echo $data['product']->price; ?>" class="btn btn-danger btn-lg form-control"><b>Comprar Agora</b></a>
                        </div>
                        <div class="col">
                            <a href="#" class="btn btn-warning btn-lg form-control"><b>Adicionar ao Carrinho</b></a>
                        </div>
                        <?php else: ?>
                            <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/login/" class="btn btn-danger btn-lg form-control"><b>Comprar Agora</b></a>
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/login/" class="btn btn-warning btn-lg form-control"><b>Adicionar ao Carrinho</b></a> 
                        </div>
                            <?php endif; ?>
                    </div>

                </div>
                <div class="col-12">
                    <h6 style="font-size: 18px; font-weight: bold;"><i class="fas fa-file-alt"></i> Descrição do Produto</h6>
                    <hr>
                    <p class="fs-5"><?php echo $data['product']->description; ?></p>

                    <p style="font-size: 17px;"></p>
                    <hr style="font-weight: bold;">
                    <h6 style="font-size: 18px; font-weight: bold;">Detalhes técnicos</h6>
                    <hr>
                    <p style="font-size: 17px;"></p>
                </div>
            </div>
    </section>
</section>
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- custom js file link  -->
<script src="<?php echo URLROOT; ?>/js/main.js"></script>
</body>
</html>