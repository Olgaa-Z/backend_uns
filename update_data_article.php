<?php include"header.php" ?>

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
          <li><i class="icon_document_alt"></i>Forms</li>
          <li><i class="fa fa-file-text-o"></i>Form elements</li>
        </ol>
      </div>
    </div>

    <!-- Basic Forms & Horizontal Forms-->

    <div class="row container">
      <div class="col-lg-10">
        <section class="panel">
          <header class="panel-heading">
            Basic Forms
          </header>
          <div class="panel-body">
            <?php
            include "connection.php";
            $id=$_GET['id'];
            $sql=mysqli_query($connect,"SELECT * FROM tb_article WHERE id_article=$id");
            while ($row = mysqli_fetch_array($sql)){
             ?>
             <form role="form" method="POST" action="article_update_process.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">ID Article</label>
                <input type="text" name="id_article" value="<?= $row['id_article'];?>" class="form-control" id="exampleInputEmail1" readonly placeholder="Enter Title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" value="<?= $row['title'];?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Title">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <input type="file" id="exampleInputFile" name="image">
              
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Content</label>
                <textarea class="form-control ckeditor" name="content" rows="6"> <?= $row['content'];?> </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          <?php } ?>

        </div>
      </section>
    </div>

  </div>

  <!-- page end-->
</section>
</section>
<!--main content end-->
<div class="text-right">
  <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>

    <!-- colorpicker -->

    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap-colorpicker.js"></script>
    <script src="js/daterangepicker.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


  </body>

  </html>
