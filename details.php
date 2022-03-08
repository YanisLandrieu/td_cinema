<?php include_once('./inc/header.php'); ?>
<?php include_once('./functions.php'); ?>

<div class="containers">
    <div class="row">
        <h3></h3>
        <div id="filmTable" class="" style="margin-top: 50px;">
            <div style="display: flex; flex-direction:row; flex-wrap:nowrap; justify-content:center" >
                <div class="item" style="margin-top: 20px; margin-bottom:20px"><img src='https://image.tmdb.org/t/p/original<?= get_film_by_id($_GET['id'])->poster_path; ?>' style="height: 500px; width:400px; padding-left: 30px;" alt=""></div>
                <div class="item" style="margin-left: 10px; padding: 10px;">
                    <h1><?= get_film_by_id($_GET['id'])->title;?></h1>
                    <h5>Date de Sortie</h5>
                    <p><?= get_film_by_id($_GET['id'])->release_date;?></p>
                    <h3>Synopsis</h3>
                    <p><?= get_film_by_id($_GET['id'])->overview;?></p>
                    <h3>Budget</h3>
                    <p><?= get_film_by_id($_GET['id'])->budget;?> $</p>
                    <h3>Moyenne des votes</h3>
                    <p><?= get_film_by_id($_GET['id'])->vote_average;?> / 10</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once('./inc/footer.php'); ?>