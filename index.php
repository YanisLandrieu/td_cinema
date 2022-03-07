<?php include_once('./inc/header.php'); ?>


<div class="container dotted p-4 mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-3">Films à voir</h2>
            <div id="filmTable" class="row mt-3 p-3">
                <div class='col-12 col-sm-6 col-xl-4 mb-3'>
                    <div class='row no-gutters'>
                        <div class='col-md-7 pl-2'>
                            <h3 class="pt-3 pt-md-0">Titre du film</h5>
                            <img class='img-fluid' src='${poster}' />
                            <p class='text'>Description du film</p>
                            <button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; ">En savoir plus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once('./inc/footer.php'); ?>