<?php include_once('./inc/header.php'); ?>


<div class="container dotted p-4 mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-3">Films à voir</h2>
            <div id="filmTable" class="row mt-3 p-3">
                <?php require_once('./display.php');?>
            </div>
        </div>
    </div>
</div>



<?php include_once('./inc/footer.php'); ?>