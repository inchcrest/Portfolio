<?php
include_once'php/header.php';

?>
<div class="well">
    <p>
        VOTED THE "BEST CHICKEN WINGS" - PALM BEACH POST<br>
        OVER 70 BOTTLED BEERS
    </p>
</div>

<div class="panel-group" id="accordion">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                Beers
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <?php include_once "php/menu_items/beers.php"?>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    Munchies
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <?php include_once "php/menu_items/munchies.php"?>        
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  Wraps
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <?php include_once "php/menu_items/wraps.php"?>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                    Burgers
                </a>
            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
                <?php include_once "php/menu_items/burgers.php"?>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                    Additional Toppings
                </a>
            </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body">
                <?php include_once "php/menu_items/additional_toppings.php"?>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'php/footer.php';
?>