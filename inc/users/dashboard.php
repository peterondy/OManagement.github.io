<?php include 'header.php';?>
  <?php 
  //if the id is from to user ==> enter to dashboard || if id is from to admin enter to admin
    $id = $_GET['id'];
    //echo $id;
            
  ?>
    <div class="container">
        

        <section class="section mt-4 mb-4 pt-2 pb-2 row" id="show">
          <h3>Manage informations page</h3>
          <h6>You can show all services like : </h6>
          <span class="col-md-2 col-sm-2 mr-1">Pay Online</span><span class="col-md-2 col-sm-2 mr-1">Get Papers</span><span class="col-md-2 col-sm-2 mr-1">Edit Informations</span><span class="col-md-2 col-sm-2 mr-1">Education Online</span>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?do=show">GO To show Page</a>
        </section>



        <section class="section mt-4 mb-4 pt-2 pb-2 row" id="manage">
          <h3>Manage informations page</h3>
          <h6>You can Manage all the informations like : </h6>
          <span class="col-md-2 col-sm-2 mr-1">residence</span><span class="col-md-2 col-sm-2 mr-1"> passport number</span><span class="col-md-2 col-sm-2 mr-1">name</span><span class="col-md-2 col-sm-2 mr-1"> phone number</span>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="settings.php?id=<?php echo $id;?>">GO To Manage Page</a>
        </section>

        
        <section class="section mt-4 mb-4 pt-2 pb-2 row" id="pay-online">
          <h3>Manage informations page</h3>
          <h6>You can Manage all the informations like : </h6>
          <span class="col-md-2 col-sm-2 mr-1">residence</span><span class="col-md-2 col-sm-2 mr-1"> passport number</span><span class="col-md-2 col-sm-2 mr-1">name</span><span class="col-md-2 col-sm-2 mr-1"> phone number</span>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?do=pay">GO to Pay Online Page</a>
        </section>

        
        <section class="section mt-4 mb-4 pt-2 pb-2 row" id="reserve-online">
          <h3>Manage informations page</h3>
          <h6>You can Manage all the informations like : </h6>
          <span class="col-md-2 col-sm-2 mr-1">residence</span><span class="col-md-2 col-sm-2 mr-1"> passport number</span><span class="col-md-2 col-sm-2 mr-1">name</span><span class="col-md-2 col-sm-2 mr-1"> phone number</span>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?do=reserve">GO To reserve Online</a>
        </section>

        
        <section class="section mt-4 mb-4 pt-2 pb-2 row" id="education-online">
          <h3>Manage informations page</h3>
          <h6>You can Manage all the informations like : </h6>
          <span class="col-md-2 col-sm-2 mr-1">residence</span><span class="col-md-2 col-sm-2 mr-1"> passport number</span><span class="col-md-2 col-sm-2 mr-1">name</span><span class="col-md-2 col-sm-2 mr-1"> phone number</span>
          <a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?do=education">GO To Education Online</a>
        </section>


        
    </div>

    <?php include 'footer.php';?>
