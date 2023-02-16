<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <title>Risultati</title>
</head>
<body>

<?php
    $mitalia=$_POST["mitalia"];
    $fitalia=$_POST["fitalia"];

    $mpiemonte=$_POST["mpiemonte"];
    $fpiemonte=$_POST["fpiemonte"];

    $mvalle=$_POST["mvalle"];
    $fvalle=$_POST["fvalle"];

    $mliguria=$_POST["mliguria"];
    $fliguria=$_POST["fliguria"];

    $mlombardia=$_POST["mlombardia"];
    $flombardia=$_POST["flombardia"];

    $malessandria=$_POST["malessandria"];
    $falessandria=$_POST["falessandria"];

    $mtot= $mpiemonte+$mvalle+$mliguria+$mlombardia;
    $ftot= $fpiemonte+$fvalle+$fliguria+$flombardia;
    $tot_nord_ovest= array("maschi"=> $mtot, "femmine" => $ftot, "totali" => $mtot+$ftot);
    
    $percm=$mtot/$mitalia*100;
    $percf=$ftot/$fitalia*100;
    $totita= $mitalia+$fitalia;
    $perctot=$tot_nord_ovest['totali']/$totita*100;
    $perc_nord_ovest = array("percentualemaschi"=> $percm, "percentualefem"=> $percf, "percentualetot" => $perctot);

    $percma=$malessandria/$mitalia*100;
    $percfa=$falessandria/$fitalia*100;
    $totale=$malessandria+$falessandria;
    $perctota=$totale/$totita*100;
    $percale= array("percmaschiale" => $percma, "percfemale" => $percfa, "perctotale" => $perctota);
?>

    <table class="first-table">
        <tr>
            <th class="head-th"></th>
            <th class="head-th"></th>
            <th class="head-th">Maschi</th>
            <th class="head-th">Femmine</th>
            <th class="head-th">Totali</th>
        </tr>
        <tr>
            <th class="grey-stripe">Italia</th>
            <td class="grey-stripe"></td>
            <?php 
            echo "<td class='grey-stripe'>$mitalia</td>";
            echo "<td class='grey-stripe'>$fitalia</td>";
            $tot=$mitalia+$fitalia;
            echo "<td class='grey-stripe'>$tot</td>";
            ?>

        </tr>
        <tr>
            <th>Nord-ovest</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <th class="grey-stripe">Piemonte</th>
            <td class="grey-stripe"></td>
            <?php 
            $tot=$mpiemonte+$fpiemonte;
            echo "<td class='grey-stripe'>$mpiemonte</td>";
            echo "<td class='grey-stripe'>$fpiemonte</td>";
            echo "<td class='grey-stripe'>$tot</td>";
            ?>

        </tr>
        <tr>
            <th>Valle d'Aosta</th>
            <td></td>
            <?php 
            $tot=$mvalle+$fvalle;
            echo "<td>$mvalle</td>";
            echo "<td>$fvalle</td>";
            echo "<td>$tot</td>";
            ?>

        </tr>
        <tr>
            <th class="grey-stripe">Liguria</th>
            <td class="grey-stripe"></td>
            <?php 
            $tot=$mliguria+$fliguria;
            echo "<td class='grey-stripe'>$mliguria</td>";
            echo "<td class='grey-stripe'>$fliguria</td>";
            echo "<td class='grey-stripe'>$tot</td>";
            ?>

        </tr>
        <tr>
            <th>Lombardia</th>
            <td></td>
            <?php 
            $tot=$mlombardia+$flombardia;
            echo "<td>$mlombardia</td>";
            echo "<td>$flombardia</td>";
            echo "<td>$tot</td>";
            ?>

        </tr>
        <tr>
            <th class="grey-stripe">Tot.Nord-ovest</th>
            <td class="grey-stripe"></td>
            <?php
            foreach($tot_nord_ovest as $valore){
                echo "<td class='grey-stripe'>$valore</td>";
            }
            ?>

        </tr>
        <tr>
            <th>%Nord-ovest</th>
            <td></td>
            <?php
            foreach($perc_nord_ovest as $valore){
                echo "<td>$valore%</td>";
            }
            ?>

        </tr>
        <!-- TWO ROWS OF EMPTY LINES -->
        <tr>
            <td class="grey-stripe"></td>
            <td class="grey-stripe"></td>
            <td class="grey-stripe"></td>
            <td class="grey-stripe"></td>
            <td class="grey-stripe"></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

        </tr>
        <tr>
            <th class="grey-stripe">Alessandria</th>
            <td class="grey-stripe"></td>
            <?php 
            $tot=$malessandria+$falessandria;
            echo "<td class='grey-stripe'>$malessandria</td>";
            echo "<td class='grey-stripe'>$falessandria</td>";
            echo "<td class='grey-stripe'>$tot</td>";
            ?>

        </tr>
        <tr>
            <th>%Prov.AL</th>
            <td></td>
            <?php
            foreach($percale as $valore){
                echo "<td>$valore%</td>";
            }
            ?>
        </tr>
        <td class="bottom-td"><input type="submit" value="Invia" class="submit"></td>
        <td class="bottom-td"><button><a href="index.html">Reset</a></button></td>
        <td class="bottom-td"></td>
        <td class="bottom-td"></td>
        <td class="bottom-td"></td>
    </table>


    
    <!-- $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old."; -->
    
</body>
</html>