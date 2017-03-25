<?php

    require "../src/bdd.php";

    $sql = "SELECT * from profile2";
    $mysqli = getConnection();
    $data = execSql($mysqli, $sql);

?>

<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des contact</div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>prenom</th>
                    <th>nom</th>
                    <th>email</th>
                </tr>
                <?php foreach($data as $record): ?>
                <tr>
                    <td><?php echo $record['prenom'];?></td>
                    <td><?php echo $record['nom'];?></td>
                    <td><?php echo $record['email'];?></td>
                </tr>
             <?php endforeach; ?>
            </table>
        </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>
