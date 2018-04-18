

<?php



$file='resources\html\keys.html';


?>








    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin-left: 80px;">
            
            <form action="/xmlproject/InsertionResult.php" method="post">
<div class="form-group col-lg-5">
<label for="exampleInputEmail1">key</label><input type="text" class="form-control" name="key" >
</div>
<div class="form-group col-lg-8">
<label for="exampleInputPassword1">Authors</label><input type="text" class="form-control" name="authors" placeholder="author1;author2;author3"
">
</div>
<div class="form-group col-lg-10">
<label for="exampleInputPassword1">Titre</label><input type="text" class="form-control" name="titre" >
</div>
<div class="form-group col-lg-3">
<label for="exampleInputPassword1">Année</label><input type="text" class="form-control" name="annee" >
</div>
<div class="form-group col-lg-5">
<label for="exampleInputPassword1">url</label><input type="text" class="form-control" name="url" >
</div>
<div class="form-group col-lg-5">
<label for="exampleInputPassword1">publtype</label><input type="text" class="form-control" name="publtype" >
</div>
<div class="form-group col-lg-5">
<label for="exampleInputPassword1">volume</label><input type="text" class="form-control" name="volume" >
</div>
<div class="form-group col-lg-5">
<label for="exampleInputPassword1">journal</label><input type="text" class="form-control" name="journal" >
</div>
<div class="form-group col-lg-5">
<label for="exampleInputPassword1">ee</label><input type="text" class="form-control" name="ee" >
</div>
<button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

        <div>
    </body>
</html>