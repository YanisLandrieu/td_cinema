<?php include_once('./functions.php'); ?>

<?php     
    $filmsDisplay = '';
    foreach (get_films()->results as $key => $value) : ?>
        <?php $title = get_films()->results[$key]->original_title; ?>
        <?php $posterPath = get_films()->results[$key]->poster_path; ?>
        <div class='col-12 col-sm-6 col-xl-4 mb-3'>
            <div class='row no-gutters'>
                <div class='col-md-7 pl-2'>
                    <h3 class="pt-3 pt-md-0"><?= $title; ?></h5>
                    <img class='img-fluid' src='https://image.tmdb.org/t/p/w500<?= $posterPath; ?>' />
                    <p class='text'>Description du film</p>
                    <button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">En savoir plus</button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
