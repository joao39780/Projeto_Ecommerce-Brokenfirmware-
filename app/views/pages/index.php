<!-- header and navbar -->
<?php require APPROOT . '/views/inc/home_header.php' ?>

<!-- Slider -->
<section class="home" id="home">
<div class="home-slider owl-carousel">

    <div class="item">
        <img src="<?php echo URLROOT; ?>/images/image.jpg" alt="">
        <div class="content">
            <h3>Intel 11th gen</h3>
            <p style="color: white; font-weight: bold;">Faça mais do que importa para você com um processador Intel® Core™ da 11ª Geração.</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>

    <div class="item">
        <img src="<?php echo URLROOT;?>/images/Slider03.jpg" alt="">
        <div class="content">
            <h3>Porque o desempenho é a regra do jogo com a Radeon™ RX 6800 XT</h3>
            <p style="font-size: 18px; font-weight:bold;">A placa de vídeo AMD Radeon™ RX 6800 XT, alimentada pela arquitetura AMD RDNA™ 2, oferecendo 72 unidades avançadas de computação poderosas, 128 MB do mais novo AMD Infinity Cache e 16GB de memória GDDR6 dedicada, foi criada para oferecer taxas de quadro ultra altas e jogos em resolução 4K de alto nível</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>

    <div class="item">
        <img src="<?php echo URLROOT; ?>/images/Slider02.jpg"alt="">
        <div class="content">
        <h3 style="color:#76b900;">FAMÍLIA GEFORCE RTX 3060</h3>
        <h3 style="font-weight: bold;">THE ULTIMATE PLAY</h3>
    <p style="font-size: 18px; font-weight:bold;">Com a GeForce RTX™ 3060 Ti e a RTX™ 3060, você pode jogar os games mais atuais usando o poder da Ampere, a 2ª geração da arquitetura RTX da NVIDIA. Obtenha um desempenho incrível com Ray Tracing Cores e Tensor Cores aprimorados, novos multiprocessadores de streaming e memória G6 de alta velocidade.</p>
            <a href="#"><button class="btn">discover</button></a>
        </div>
    </div>

</div>

</section>

<!-- Products -->
<section class="arrival" id="arrival">

<h1 class="heading"><span>Produtos em destaque</span></h1>

<div class="box-container">
    <?php foreach($data['products'] as $product): ?>
    <div class="box">
        <div class="image">
            <img src="<?php echo URLROOT .'/' . $product->image; ?>" alt="">
        </div>
        <div class="info">
            <h3><a href="<?php echo URLROOT . '/pages/product/' . $product->id; ?>"><?php echo $product->name; ?></a></h3>
            <div class="subInfo">
                <strong class="price">R$ <?php echo $product->price; ?></strong>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
            </div>
        </div>
        <div class="overlay">
            
        </div>
    </div>
<?php endforeach; ?>
</section>




<!-- footer -->
<?php require APPROOT . '/views/inc/footer.php' ?>