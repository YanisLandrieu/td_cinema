<!-- On appel le header -->
<?php include_once('./inc/header.php'); ?>
<?php include_once('./functions.php');

// on vérifie si le paramètres 'page' est valide, sinon on l'initialise à 1
    if(!(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0)) {
        $_GET['page'] = 1;
    }?>
    <?php 
        session_start();
        if(isset($_POST['search'])){
            $_SESSION['search'] = $_POST['search'];
        }

    ?>


    <div class="container dotted p-4 mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-3">Recherché : <?= $_SESSION['search'];?></h2>
            <div id="filmTable" class="row mt-3 p-3">
                <!-- On boucle sur le résultat de searchFilms() -->
                <?php foreach (searchFilms($_SESSION['search'], $_GET['page'])->results as $key => $value) : ?>
                    <?php $title = searchFilms($_SESSION['search'], $_GET['page'])->results[$key]->original_title; ?>
                    <?php $posterPath = searchFilms($_SESSION['search'], $_GET['page'])->results[$key]->poster_path; ?>
                    <?php $desc = searchFilms($_SESSION['search'], $_GET['page'])->results[$key]->overview; ?>
                    <?php $id = searchFilms($_SESSION['search'], $_GET['page'])->results[$key]->id; ?>
                    <!-- Début partie html -->
                    <div class='col-12 col-sm-6 col-xl-4 mb-3'>
                        <div class='row no-gutters'>
                            <div class='col-md-7 pl-2'>
                                <h3 class="pt-3 pt-md-0"><?= $title; ?></h5>
                                <?= (!empty($posterPath)) ? "<img class='img-fluid' src='https://image.tmdb.org/t/p/original$posterPath' />" : "<img class='img-fluid' src='./assets/img/no-image.jpg' />" ?>
                                <p class='text'><?= $desc; ?></p>
                                <a href='https://<?= $_SERVER['SERVER_NAME'];?>/details.php?id=<?= $id; ?>'><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">En savoir plus</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- Fin partie html -->
                <?php endforeach; ?>
            </div>
            <div class="boutons" style="margin-left: 460px;">
            <!-- Boutons précédent et suivant -->
                <a href="https://<?= $_SERVER['SERVER_NAME'];?>/search.php?page=<?= ($_GET['page'] == 1) ? $_GET['page'] : $_GET['page'] - 1; ?>"><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">Précédent</button></a>
                <a href="https://<?= $_SERVER['SERVER_NAME'];?>/search.php?page=<?= $_GET['page'] + 1; ?>"><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">Suivant</button></a>
            </div>

        </div>
    </div>
</div>

<!-- On appel le footer -->
<?php include_once('./inc/footer.php'); ?>