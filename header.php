
    
    <div class="jumbotron m-0">
        <div class="container">
            
            <div class="media">
                <a href="."><img src="interface/logo-o.png" class="mr-3 align-self-center" style="width: 100px;"></a>
                <div class="media-body">
                    <h1 class="display-4">Три мастера</h1>
                </div>
            </div>
            
            <p class="lead">
            
                <?php

                    $arr = array( 
                            'Качество, которое чувствуется',
                            'Строим с умом и сердцем',
                            'Строим будущее для вас',
                            'Мы знаем, как сделать ваш дом уютным'
                        );

                    $key = array_rand( $arr );

                    echo $arr[$key];
                
                ?>
            
            </p>
        
        </div>
    </div>
        
    <div class="countainer_full_menu">
        <div class="wrap">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <ul class="list-group list-group-horizontal-xl list-inline mx-auto justify-content-center">
                            <li><a href="index.php#prem" class="navbarlink">Преимущества</a></li>
                            <li><a href="index.php#kwk" class="navbarlink">Как мы работаем</a></li>
                            <li><a href="dogovor.php">Договор</a></li>
                            <li><a href="#price">Цены</a></li>
                            <li><a href="forma.php" class="navbarlink">Оставить заявку</a></li>
                            <li><a href="admin.php" class="navbarlink">Admin</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    



