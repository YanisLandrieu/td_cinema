<?php include_once('./inc/header.php'); ?>
<?php

    if(!(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0)) {
        $_GET['page'] = 1;
    }
?>
<div class="container dotted p-4 mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-3">Films à voir</h2>
            <div id="filmTable" class="row mt-3 p-3">
                <?php require_once('./display.php'); ?>
            </div>
            <div class="boutons" style="margin-left: 460px;">
                <a href="http://td_cinema.test?page=<?= ($_GET['page'] == 1) ? $_GET['page'] : $_GET['page'] - 1; ?>"><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">Précédent</button></a>
                <a href="http://td_cinema.test?page=<?= $_GET['page'] + 1; ?>"><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">Suivant</button></a>
            </div>

        </div>
    </div>
</div>



<?php include_once('./inc/footer.php'); ?>