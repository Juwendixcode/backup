<?php
$i=1;
    if ($schedule->num_rows() > 0)
        {
           foreach ($schedule->result() as $row)
           {
              echo '<option value="'.$row->id_schedule.'">schedule '.$i.'</option><br>';
               $i++;
           }
        }
?>