<style>
    .tent-contact-info-ul {
        margin: 0;
        padding-left: 1.5rem;
        list-style-type: none;
    }
    .tent-contact-info-li {
        position: relative;
        margin: 1rem 0 1.5rem 0;
    }
    .tent-contact-info-li i {
        position: absolute;
        width: 1rem; 
        left: -1.5rem;
        top: 0.5rem;
        text-align:center;
    }
</style>

<!-- This file is used to markup the public-facing widget. -->
<ul class="<?php echo "{$this->get_widget_slug()}-ul" ?>">
<?php if( strlen( trim( $phone_number ) ) > 0 ): ?>
    <li class="<?php echo "{$this->get_widget_slug()}-li" ?>">
        <i class="fas fa-phone-alt"></i>
        <?php echo $phone_number?>
    </li>
<?php endif ?>
<?php if( strlen( trim( $email ) ) > 0 ): ?>
    <li class="<?php echo "{$this->get_widget_slug()}-li" ?>">
        <i class="fas fa-envelope"></i>
        <?php echo $email?>
    </li>
<?php endif ?>
<?php if( strlen( trim( $address ) ) > 0 ): ?>
    <li class="<?php echo "{$this->get_widget_slug()}-li" ?>">
        <i class="fas fa-map-marker-alt"></i>
        <?php echo $address?>
    </li>
<?php endif ?>
</ul>