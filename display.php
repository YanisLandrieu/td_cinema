<?php include_once('./functions.php'); ?>

<?php     
    $filmsDisplay = '';
    foreach (get_films($_GET['page'])->results as $key => $value) : ?>
        <?php $title = get_films($_GET['page'])->results[$key]->original_title; ?>
        <?php $posterPath = get_films($_GET['page'])->results[$key]->poster_path; ?>
        <?php $desc = get_films($_GET['page'])->results[$key]->overview; ?>
        <?php $id = get_films($_GET['page'])->results[$key]->id; ?>
        <div class='col-12 col-sm-6 col-xl-4 mb-3'>
            <div class='row no-gutters'>
                <div class='col-md-7 pl-2'>
                    <h3 class="pt-3 pt-md-0"><?= $title; ?></h5>
                    <img class='img-fluid' src='https://image.tmdb.org/t/p/original<?= $posterPath; ?>' />
                    <p class='text'><?= $desc; ?></p>
                    <a href='http://td_cinema.test/details.php?id=<?= $id; ?>'><button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black;">En savoir plus</button></a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
