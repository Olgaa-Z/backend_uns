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

    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Advanced Table
          </header>

          <table class="table table-striped table-advance table-hover">
            <thead>
              <tr>
                <th><i class="icon_profile"></i>Name</th>
                <th><i class="icon_calendar"></i> Logo</th>
                <th><i class="icon_mail_alt"></i> Desc </th>
                <th><i class="icon_pin_alt"></i> phone</th>
                <th><i class="icon_mobile"></i> Email</th>
                <th><i class="icon_cogs"></i> Location</th>
                <th><i class="icon_cogs"></i> SocMed</th>
                <th><i class="icon_cogs"></i> Action </th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include "connection.php";
              $no=1;
              $data_profil= "SELECT * FROM tb_profil";
              $sql= mysqli_query($connect,$data_profil);

              while ($row = mysqli_fetch_array($sql)) {
                ?>

                <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td>
                    <img src="article_image/<?php echo $row['logo']; ?>" style="width: 100px; height: 100px;">
                    </td>
                  <td><?php echo $row['description']; ?></td>
                  <td><?php echo $row['phone']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['location']; ?></td>
                  <td>
                    IG :<?php echo $row['instragram']; echo "<br>"; ?>
                    FB : <?php echo $row['facebook']; ?>
                  </td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
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