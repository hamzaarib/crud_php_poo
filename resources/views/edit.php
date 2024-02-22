<?php 
        // echo "<pre>";
        // print_r($cars);
        // echo "</pre>";
    $title = "Edit Car";
    ob_start();
?>
<div class="container w-75">
    <div class="text-end">
        <a href="index.php?action=list" class="btn btn-danger">Back</a>
    </div>
    <form action="index.php?action=update" method="post">
        <div class="mb-3">
            <input type="hidden" name="id" value="<?= $cars->getId()?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Modele:</label>
            <input type="text" name="modele" value="<?= $cars->getModele()?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Prix:</label>
            <input type="number" name="prix" value="<?= $cars->getPrix()?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<?php
    $content = ob_get_clean();
    include_once("layout.php");
?>
