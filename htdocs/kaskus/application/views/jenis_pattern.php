<?php
if ($jenis->num_rows() > 0)
    {
       foreach ($jenis->result() as $row)
       {
            echo '<option value="'.$row->id_jenistebu.'">'.$row->jenis_tebu.'</option><br>';
       }
    }
?>