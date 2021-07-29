<?php include"header.php"; ?>

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
          <li><i class="fa fa-table"></i>Table</li>
          <li><i class="fa fa-th-list"></i>Basic Table</li>
        </ol>
      </div>
    </div>
    <!-- page start-->

    <a class="btn btn-primary" href="add_data_article.php"><i class="icon_plus_alt2"></i> Add Data</a>

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Advanced Table
          </header>

          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th><i class="icon_profile"></i>No</th>
                <th><i class="icon_calendar"></i> Title</th>
                <th><i class="icon_mail_alt"></i> Image</th>
                <th><i class="icon_pin_alt"></i> Content</th>
                <th><i class="icon_mobile"></i> Date</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include "connection.php";
              $no=1;
              $data_article= "SELECT * FROM tb_article";
              $sql= mysqli_query($connect,$data_article);

              while ($row = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                  <td><?= $no++;?></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><img src="article_image/<?php echo $row['image']; ?>" style="width: 100px; height: 100px;"> </td>
                  <td><?php echo $row['content']; ?></td>
                  <td><?php echo $row['added_on']; ?></td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="update_data_article.php?id=<?php echo $row['id_article'];  ?>"><i class="icon_check_alt2"></i></a>
                      <a class="btn btn-danger" href="delete_article.php?id=<?php echo $row['id_article']; ?>" onclick="return confirm('Are you sure to delete this item?');"><i class="icon_close_alt2"></i></a>
                    </div>
                  </td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </section>
      </div>
    </div>
    <!-- page end-->
  </section>
</section>
<!--main content end-->
<?php include"footer.php"; ?>