<body>
    <header>

        <div class="header-1" style="background-color:#696969; ">

            <a href="<?php echo URLROOT; ?>/pages" class="logo"><img src="<?php echo URLROOT . '/'; ?>images/logo2.png"></i></a>

            <div class="form-container">
                <form method="GET" action="<?php echo URLROOT; ?>/pages/listproduct/">
                    <input type="text" placeholder="search products" id="search" name="query" />
                    <button type="submit" class="fas fa-search" id="btn"></button>
                </form>
            </div>

        </div>

        <div class="header-2">

            <div id="menu" class="fas fa-bars"></div>

            <nav class="navbar">
                <ul>
                    <li><a class="active" href="#home">Página inicial</a></li>
                    <li><a href="#arrival">Destaques</a></li>
                    <li><a href="#featured">Navegar por hardware</a>
                        <ul>
                            <li><a href="<?php echo URLROOT; ?>/pages/listproduct/?query=placa+mãe">Placa Mãe</a></li>
                            <li><a href="<?php echo URLROOT; ?>/pages/listproduct/?query=PROCESSADOR">Processador</a></li>
                            <li><a href="<?php echo URLROOT; ?>/pages/listproduct/?query=Memória+ram">Memória Ram</a></li>
                            <li><a href="<?php echo URLROOT; ?>/pages/listproduct/?query=Placa+de+video">Placa de Vídeo</a></li>
                            <li><a href="<?php echo URLROOT; ?>/pages/listproduct/?query=ssd">SSD(Solid State Drive)</a></li>
                            <li><a href="<?php echo URLROOT; ?>/pages/listproduct/?query=hd">HDD</li></a>

                        </ul>
                    </li>
                </ul>
            </nav>
            <?php if(isset($_SESSION['user_id'])): ?>
                <div class="icons">
                <a href="#" class="fas fa-user"><small><?php echo $_SESSION['user_name']; ?></a>
                <a href="<?php echo URLROOT; ?>/orders/cart/" class="fas fa-shopping-cart"><small>Carrinho</a>
                <a href="<?php echo URLROOT; ?>/users/logout/" class="fas fa-sign-out-alt"><small>Sair</a>

            </div>
            <?php else: ?>
            <div class="icons">
                <a href="<?php echo URLROOT; ?>/users/register/" class="fas fa-file-invoice"><small>cadastro</a>
                <a href="<?php echo URLROOT; ?>/users/login/" class="fas fa-user"><small>Login</a>

            </div>
            <?php endif;?>
        </div>
    </header>