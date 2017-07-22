<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	 <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Berat</th>
                        <th>Tinggi</th>
                        <th>Diamter</th>
                        <th>Edit/Delete</th>
                      </tr>
                    </thead>
                    <?php
    
    if($data_tebu){
        if ($data_tebu->num_rows() > 0)
            {
               foreach ($data_tebu->result() as $row)
               {
                    echo "<tr>";
                    echo "<td>".$row->tanggal."</td>";
                    echo "<td>".$row->berat."</td>";
                    echo "<td>".$row->tinggi."</td>";
                    echo "<td>".$row->diameter."</td>";
                    echo '<td><a href="'.site_url('info_tebu/show_form_data_tebu/'.$row->id_tebu).'" 
                    ';
                    echo '<a href="'.site_url('info_tebu/delete_data_tebu/'.$row->id_tebu).'" 
                    class="btn btn-danger btn-sm">Delete</a></td>';
                    echo "<tr>" ; 
               }
            }
    }
    ?>
                  </table>

</body>
</html>
	