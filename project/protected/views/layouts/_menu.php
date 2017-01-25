<nav class="line nav">
    <ul class="line-box">
        <li class="line item-1">
            <a href="<?php echo $this->createUrl('/proyecto') ?>" style="">
                <span><img src="images/icon-project.svg" alt="Proyecto" class="to-svg"></span>
                <br> PROYECTO
            </a>
        </li>
        <li class="line item-2">
            <a href="<?php echo $this->createUrl('/apartamento') ?>">
                <span><img src="images/icon-apartament.svg" alt="Planos" class="to-svg"></span>
                <br> APARTAMENTOS
            </a>
        </li>
        <li class="line item-3">
            <a href="<?php echo $this->createUrl('/local') ?>">
                <span><img src="images/icon-local.svg" alt="Planos" class="to-svg"></span>
                <br> LOCALES
            </a>
        </li>
        <li class="line item-4">
            <a href="<?php echo $this->createUrl('/video') ?>">
                <span><img src="images/icon-video.svg" alt="Video" class="to-svg"></span>
                <br> VIDEO
            </a>
        </li>
        <li class="line item-5">
            <a href="<?php echo $this->createUrl('/brochure') ?>">
                <span><img src="images/icon-brochure.svg" alt="Brochure" class="to-svg"></span>
                <br> BROCHURE
            </a>
        </li>
        <li class="line item-6">
            <a href="<?php echo $this->createUrl('/contacto') ?>">
                <span><img src="images/icon-contact.svg" alt="Contacto" class="to-svg"></span>
                <br> CONTACTO
            </a>
        </li>
        <li class="line social">
        <?php $facebook = GeneralValue::model()->findByPk(3); ?>
            <a href="<?php echo $facebook->value ?>" target="_blank" class="face-ico">
                <img src="images/icon-facebook.svg" alt="Facebok" class="to-svg">
            </a>
        </li>
        <li class="line social">
        <?php $youtube = GeneralValue::model()->findByPk(4); ?>
            <a href="<?php echo $youtube->value ?>" target="_blank" class="youtube-ico">
                <img src="images/icon-youtube.svg" alt="Pinterest" class="to-svg">
            </a>
        </li>
    </ul>
</nav>