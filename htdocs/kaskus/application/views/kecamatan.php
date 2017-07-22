<?php 
    if ($kecamatan->num_rows() > 0)
        {
           foreach ($kecamatan->result() as $row)
           {
              echo '<option value="'.$row->id_kecamatan.'">'.$row->kecamatan.'</option><br>';
           }
        }
?>