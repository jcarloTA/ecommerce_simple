<?php include APP_PATH . '/views/partials/head.view.php'; ?>
<?php include APP_PATH . '/views/partials/header.view.php'; ?>


<div class="l-main ed-container">
    <div class="ed-item">
    <h1><?= $game->name ?></h1>
    <div class="ed-container product__page">
        <div class="ed-item web-50"><img src="<?= PUBLIC_PATH ?>/img/<?= $game->image?>" class="product__page__img"/></div>
        <div class="ed-item web-50 product__page__description">
        <p><?= $game->description ?>
            <div class="ed-container product__page__data">
            <div class="ed-item main-center">
                <h3 class="product__page__size">Precio: <?= $game->priceFloat ?></h3>
            </div>
            <div class="ed-item main-center">
                <h3 class="product__page__size">Tipo: 
                    <?php foreach($game->types as $type):?>
                        <?= $type->name ?>
                    <?php endforeach;?>
                </h3>
            </div>

            <!-- <div class="ed-item main-center">
                <h3 class="product__page__color">Color: negro</h3>
            </div> -->
            <div class="ed-item main-center">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="Z96CYKACUWRTL">
                    <table>
                        <tr>
                            <td>
                                <input type="hidden" name="on0" value="<?= $game->name?>">
                                <?= $game->name?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="os0">
                                    <option value="Opción 1"><?=$game->priceFloat?></option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input type="hidden" name="currency_code" value="USD">
                    <!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea."> -->
                    <!-- <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1"> -->
                    <button type="submit" class="boton icon-cart espacio product__page__buy">
                        Agregar al carrito
                    </button>
                    <!-- <div class="ed-item main-center"><a href="#" class="boton icon-cart espacio product__page__buy">Comprar</a></div> -->
                </form>
            </div>
            <div class="ed-item main-center product__page__share">
                <!--Created by Álvaro on 11/3/2016.
                -->
                <div class="sociales"><a href="http://facebook.com" class="icon-facebook"></a><a href="http://twitter.com" class="icon-twitter"></a><a href="http://instagram.com" class="icon-instagram"></a><a href="http://pinterest.com" class="icon-pinterest"></a></div>
            </div>
            </div>
        </p>
        </div>
    </div>
    </div>
</div>


<?php include APP_PATH . '/views/partials/foot.view.php'; ?>