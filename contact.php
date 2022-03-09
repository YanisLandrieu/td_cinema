<?php include_once('./inc/header.php'); ?>
<?php include_once('./functions.php'); ?>

<div class="container dotted p-4 mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-3">Contact</h2>
            <div id="filmTable" class="row mt-3 p-3">
                <div class='col-12 col-sm-6 col-xl-4 mb-3'>
                    <div class='row no-gutters'>
                        <form action="/ma-page-de-traitement" method="post">
                            <label for="mail">Adresse Mail :</label>
                            <div>
                                <input type="email" id="mail" name="user_mail" placeholder="Adresse Mail">
                            </div><br>
                            <label for="objet">Objet du Message :</label>
                            <div>
                                <input type="text" id="objet" name="user_object" placeholder="Objet du Message">
                            </div><br>
                            <label for="msg">Message : </label>
                            <div>
                                <textarea id="msg" name="user_message" placeholder="Message"></textarea>
                            </div><br>
                            <button type="button" class="btn btn-primary" style="background-color: #fecc00; border-color:black; color:black; width: 100px">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include_once('./inc/footer.php'); ?>