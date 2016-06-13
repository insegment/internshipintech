<?php
  require_once 'include/config.php';
  session_start();
  include 'header.php';
?>

<section class="content-header">
    <h1>
        Articles List
        <small>Add articles</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="articles.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Articles List</li>
    </ol>
</section>

<section class="content">
  <div class="row first-row">
  </div><!-- end row -->
  <div class="row">
    <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header">
              <h3 class="box-title">Add article</h3>
          </div>
          <form method="post" action="" id="add-article">
            <div class="box-body">
              <div class="form-item item-article-date form-group">
                <label for="add_date">Article Date</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" id="add_date" name="date" class="form-control" data-provide="datepicker">
                </div>
              </div>
              <div class="form-item item-article-name form-group">
                <label for="add_name">Article Name</label>
                <input type="text" id="add_name" name="name" placeholder="Name of the article" class="form-control">
              </div>
              <div class="form-item item-article-url form-group">
                <label for="add_url">Article URL</label>
                <input type="text" id="add_url" name="url" placeholder="Eg.: http://cnn.com" class="form-control">
                <p class="help-block">Include http://.</p>
              </div>
              <div class="form-item item-article-url form-group">
                <label for="add_source">Article Source</label>
                <input type="text" id="add_source" name="source" placeholder="Eg.: Business Insider" class="form-control">
              </div>
            </div><!-- /.box-body -->
            <div class="form-actions box-footer">
              <input class="btn btn-primary" type="submit" value="Add article">
            </div>
          </form>
      </div><!-- /.box -->
    </div>
    
  </div>
  
  <div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">Articles</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive no-padding articles-view">
                <table class="table table-hover">
                    <tbody><tr>
                        <th>Date</th>
                        <th>Article</th>
                        <th>Source</th>
                        <th>Actions</th>
                    </tr>
                    <?php include('article_list.php'); ?>
                </tbody></table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
  </div><!-- end view articles -->
  
</section>
<?php 
  include 'footer.php';
?>