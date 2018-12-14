<?php echo View::make('includes/adminHeader'); ?>

<div class="content-wrapper">
  <section class="content">
         <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Responsive Hover Table</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                 
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </div>
    </section>
</div>
<?php echo View::make('includes/adminFooter'); ?>

