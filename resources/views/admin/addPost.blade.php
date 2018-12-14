<?php echo View::make('includes/adminHeader'); ?>

<div class="content-wrapper">
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">News Trus Editor Page
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                </textarea>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php echo View::make('includes/adminFooter'); ?>

