<?php 
        // echo "<pre>";
        // print_r($cars);
        // echo "</pre>";
    $title = "Add New Car";
    ob_start();
?>
<div class="container w-75">
    <div class="text-end">
        <a href="index.php?action=list" class="btn btn-danger">Back</a>
    </div>
    <form action="index.php?action=store" method="post">
        <div class="mb-3">
            <label class="form-label">Modele:</label>
            <input type="text" name="modele" placeholder = "Model the Car" class="form-control">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label class="form-label">Prix:</label>
            <input type="number" name="prix" placeholder="Prix The Car" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<?php
    $content = ob_get_clean();
    include_once("layout.php");
?>
