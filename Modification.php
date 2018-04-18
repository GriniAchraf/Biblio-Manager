

<?php



$file='resources\html\keys.html';


?>








    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin-left: 80px;">
            
            <form class="form-inline " action="/xmlproject/ModificationResult.php" method="post">
            
    <?php include($file); ?>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 10px;"">Search</button>
  </form>
        <div>
    </body>
</html>