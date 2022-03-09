<!-- https://frozen-plateau-83916.herokuapp.com/ -->

<!-- On appel le header -->
<?php include_once('./inc/header.php'); ?>
<?php
    // on vérifie si le paramètres 'page' est valide, sinon on l'initialise à 1
    if(!(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0)) {
        $_GET['page'] = 1;
    }
?>
<div class="container dotted p-4 mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-3">Films à voir</h2>
            <div id="filmTable" class="row mt-3 p-3">
                <!-- On appel le fichier qui génère les films -->
                <?php require_once('./display.php'); ?>
            </div>
            <div class="boutons" style="margin-left: 460px;">
            <!-- Boutons précédent et suivant -->
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>?page=<?= ($_GET['page'] == 1) ? $_GET['page'] : $_GET['page'] - 1; ?>"><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">Précédent</button></a>
                <a href="http://<?= $_SERVER['SERVER_NAME'] ?>?page=<?= $_GET['page'] + 1; ?>"><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">Suivant</button></a>
            </div>

        </div>
    </div>
</div>


<!-- On appel le footer -->
<?php include_once('./inc/footer.php'); ?>