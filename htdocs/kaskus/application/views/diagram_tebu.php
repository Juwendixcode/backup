
 <div class="box-body">
     <div class="row">
         <div class="col-md-6">
              <!-- AREA CHART -->
               <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Area Chart</h3>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="areaChart<?php echo $id?>" style="height: 250px; width: 510px;" width="510" height="250"></canvas>
                  </div>
                </div><!-- /.box-body -->
                <div >
                   <div>
                        <div class="btn btn-sm btn-default btn-flat " style="background-color: rgba(240, 80, 80, 1)"></div>
                        berat
                    </div>
                     <div>
                        <div class="btn btn-sm btn-default btn-flat " style="background-color: rgba(80, 240, 80, 1)"></div>
                        tinggi
                    </div>
                     <div>
                        <div class="btn btn-sm btn-default btn-flat " style="background-color: rgba(80,80,240,1"></div>
                        diameter
                    </div>
                     <div>
                        <div class="btn btn-sm btn-default btn-flat " style="background-color: rgba(240, 240, 80, 1)"></div>
                        std berat
                    </div>
                     <div>
                        <div class="btn btn-sm btn-default btn-flat " style="background-color: rgba(240, 80, 240, 1)"></div>
                        std tinggi
                    </div>
                     <div>
                        <div class="btn btn-sm btn-default btn-flat " style="background-color: rgba(80, 240, 240, 1)"></div>
                        std diameter
                    </div>
                      <a href="<?php echo site_url('schedule/show_form_schedule/'.$id_val)?>" class="btn btn-sm btn-default btn-flat pull-right">Edit schedule</a>
                      <a href="<?php echo site_url('schedule/delete_schedule/'.$id_val)?>" class="btn btn-sm btn-danger btn-flat pull-right">Delete Scedule</a>
                </div><!-- /.box-footer -->
                </div><!-- /.box -->
      </div><!-- /.col (RIGHT) -->
   </div><!-- /.row -->
</div><!-- ./box-body -->
