<?php 
        // echo "<pre>";
        // print_r($cars);
        // echo "</pre>";
    $title = "List Of Cars";
    ob_start();
?>
<div class="text-end">
    <a href="index.php?action=create" class="btn btn-dark">Create Car</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#ID</th>
            <th>Modele</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($cars as $car) :?>
            <tr>
                <td><?= $car->getId()?></td>
                <td><?= $car->getModele()?></td>
                <td><?= $car->getPrix()?></td>
                <td>
                    <a href="index.php?action=edit&id=<?=$car->getId()?>" class="btn btn-info btn-sm">Edit</a>
                    <a href="index.php?action=destroy&id=<?=$car->getId()?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Are You Sure Deleted Car <?= $car->getModele()?>?')"
                        >Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php
    $content = ob_get_clean();
    include_once("layout.php");
?>
