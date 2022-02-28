<?php require APPROOT . '/views/inc/product_header.php' ?>
<body>
<!-- header section starts  -->
<section class="feature" id="featured">
<h1 class="heading"></h1>
<section id="product" class="py-3">
<div class="container">
<div class="row">
<div class="card-title" style="font-size:20px;">Seu carrinho<i class="fas fa-shopping-cart"></i><strong class="price" style="float: right;">Preço Total <br>R$<?php echo $data['total_price']->total_price; ?><br></strong></div>
<hr>
<ul class="list-group">
    <?php if(!empty($data['orders'])): ?>
    <?php foreach($data['orders'] as $order): ?>
    <li class="list-group-item" style="font-size: 13px;"><?php echo $order->name; ?> <br><img src="<?php echo URLROOT .'/' . $order->image; ?>" style= "height:100px;width:100px;" alt=""><br><strong class="price" style="color:#ff3300;">R$<?php echo $order->product_price; ?></strong><br>
    <a class="fas fa-trash" style="float:right;" href="<?php echo URLROOT; ?>/orders/deleteCartItem/<?php echo $order->id ?>"></a></li>
    <?php endforeach; ?>
    <?php else: ?>
    <p class="text-muted text-lowercase fs-4">Não há itens em seu carrinho!<br><i class="fas fa-sad-tear"></i></p>
    <?php endif; ?>
</ul>


<a href="<?php echo URLROOT; ?>/pages/" class="btn btn-success" style="width: 100px;">Continuar comprando</a>


<a href="#" class="btn btn-warning" style="width: 100px;" href="">Finalizar pedido</a>


</div>
</div>
</section>
</section>

</body>
</html>