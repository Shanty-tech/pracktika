<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="title">
        <h1>О нас</h1>
        <p>Мы продаем исключительно исклюзивные игры! <br> У нас вы найдете игры по вкусу и цвету, мы на рынке уже более 3-х лет <br>
    Регистрируйся на сайте и получи скидку 25% на все товары!</p>
    </div>

    <div class="new_tovar">
        <p>Ниже представлены новинки нашего сайта!</p>
    </div>
<div class="carusel">
    <div class="itms1" id="prev"><</div>
        <div class="card">
            <?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obprod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="imgage_c">
                <img src="<?php echo e($obprod->image); ?>" alt="">
                <div class="text"><?php echo e($obprod->name_product); ?></div>
                <div class="price"><p><?php echo e($obprod->price); ?></p></div>
                <div class="btn_buy"><button>Добавить в корзину</button></div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <div class="items2" id="next">></div>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/users/yaujryim/gghtcpd-m1/resources/views/welcome.blade.php ENDPATH**/ ?>