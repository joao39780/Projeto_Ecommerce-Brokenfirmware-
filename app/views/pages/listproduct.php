
<!-- Header and navbar -->
<?php require APPROOT . '/views/inc/product_header.php' ?>

<section class="feature" id="featured">
<h1 class="heading"></h1>
<!--   product  -->
<section id="product" class="py-3">
<div class="container">
<div class="row">

<ul class="list-group">
<?php if(!empty($data['listProduct'])): ?>  
<?php foreach($data['listProduct'] as $product): ?>
  <li class="list-group-item"><div class="info fs-1 ptitle"><a href="<?php echo URLROOT . '/pages/product/' . $product->id; ?>"><?php echo $product->name; ?></a><br><img src="<?php echo URLROOT .'/' . $product->image; ?>"id="img"><br><strong class="price" style="color:#ff3300;">R$<?php echo $product->price; ?></strong></div></li>
  
 <?php endforeach; ?>

</ul>
<?php else: ?>
  <p class="text-muted fs-1">Desculpe produto não encontrado!<br><i class="fas fa-sad-tear"></i></p>
<?php endif; ?>  
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