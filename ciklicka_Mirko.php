<?php 
            $redova=$_GET['a'];
            $stupaca=$_GET['b'];

            $maxRed=$redova-1;
            $maxStu=$stupaca-1;
            $ispis=1;
            $matrica=[];
            $minStu=0;
            $minRed=0;
            while ($ispis <= $redova*$stupaca) 
            {
                for($j=$maxStu; $j >= $minStu; $j--){
                    $matrica[$maxRed][$j] = $ispis++;
                }
                    $maxRed--;
                    if ($ispis > $redova*$stupaca) break;

                for ($i=$maxRed; $i >= $minRed ;$i--){ 
                    $matrica[$i][$minStu] = $ispis++;
                }
                    $minStu++;
                    if ($ispis > $redova*$stupaca) break;

                for ($j=$minStu; $j <= $maxStu; $j++){ 
                    $matrica[$minRed][$j] = $ispis++;
                }
                    $minRed++;
                    if ($ispis > $redova*$stupaca) break;
                for ($i=$minRed; $i <= $maxRed; $i++){ 
                    $matrica[$i][$maxStu] = $ispis++;
                }
                    $maxStu--;    
            
            }


echo '<table border=1>';
    for($i=0;$i<$redova;){
          echo '<tr>';
            for ($j=0; $j < $stupaca;){ 
              echo '<td>'. $matrica[$i][$j] .'</td>';
              $j++;
            }
            echo '</tr>';
            $i++;
        } 
?>
           