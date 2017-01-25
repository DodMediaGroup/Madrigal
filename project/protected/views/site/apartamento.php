<?php $this->renderPartial('//layouts/_header'); ?>
    <section class="content" style="margin-top: 130px;">
        <div class="limiter-container content-project">
            <div class="items">
                <div class="item wow fadeInUp">
                    <p style="color: #575D29;"><strong>Apartamentos</strong></p>
                </div>
            </div>
        </div>
        <div class="options-apar">
            <div class="column-opt-1">
                <ul>
                <?php 
                    foreach ($items as $key => $item) {?>
                    
                    <li class="opt-proy wow fadeInLeft"><span><img class="item-space" src="images/item.png" alt="Item"></span><?php echo "$item->description" ?></li>

                    <?php
                }
                 ?>
                </ul>
            </div>
        </div>
        <div class="content-drawings">
            <div class="limiter-container">
                <div class="grid">
                <?php 
                foreach ($apartments as $key => $apartment) {?>
                  <article class="panel">
                        <h1 class="">Área <b><?php echo "$apartment->area"; ?></b></h1>
                        <div class=" image" data-resizing="1/1">
                            <div class="grises">
                                <img src="images/planos/350x350/<?php echo $apartment->image ?>" alt="">
                            </div>
                            <a class="button-ver fancybox.ajax" href="<?php echo $this->createUrl('/planos/viewajax/'.$apartment->id) ?>" >
                                <p><span><b>+</b></span>Ver más</p>
                            </a>
                        </div>
                    </article>
                  <?php  
                } ?>
                </div>
            </div>
        </div>
    </section>
<?php $this->renderPartial('//layouts/_footer'); ?>