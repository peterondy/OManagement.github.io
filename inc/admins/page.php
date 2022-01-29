<?php include 'header.php';?>

<?php

        $do = '';
        if(isset($_GET['do'])){
            $do = $_GET['do'];
        }else{
            echo '<div class="container mt-5">';
                echo '<h2 class="text-center alert alert-danger">This Page Not Found</h2>';
            echo '</div>';
        }

    if ($do == 'show')  {          //show page
            
            
        echo '<div class="container">';



        echo '<section class="section mt-4 mb-4 pt-2 pb-2 row" id="settings">';
        echo '<h3>Settings</h3>';
        echo '<h6>You can manage | Edit | delete | and faire all informations like : Name, Adress, National Card, Passport, Residence, Phone number and more ...</h6>';
        echo '<a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="settings.php?id=?">GO To Settings Page</a>';
        echo '</section>';



        echo '<section class="section mt-4 mb-4 pt-2 pb-2 row" id="pay-online">';
        echo '<h3>Pay Online</h3>';
        echo '<h6>You can pay online all things you should like : Internet, Electric, Gaz, Kira1, Reserve Car, Bus, Plane, Hotel... Online, And you can shop online for any website recerved OPay</h6>';
        echo '<a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?do=pay&id=?">GO To Pay Online Page</a>';
        echo '</section>';

            
        echo '<section class="section mt-4 mb-4 pt-2 pb-2 row" id="reserve">';
        echo '<h3>Reserve Online</h3>';
        echo '<h6>You can reserve online all metodes of transport like : Car, Bus, Metro, Train, Plane, Bycicle, And you can also reserved Hotel, House, Maw3id, you can do this online with OPay payment method</h6>';
        echo '<a class="btn go col-md-2 col-sm-2 bg-c-yellow" style="color: #449fa9 !important;" href="page.php?do=reserve&id=?">GO To Reserve Online Page</a>';
        echo '</section>';

            
        echo '</div>';


    }elseif ($do == 'pay'){            //pay page
    
        echo '<div class="container">';


        echo '<section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">';
        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Earings</h3>';
        echo '<span class="span-pay-style">500$<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-light m-2 pt-4 pb-4"><h3>Last Pay</h3>';
        echo '<span class="span-pay-style">50$<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-danger m-2 pt-4 pb-4"><h3>Daraib</h3>';
        echo '<span class="span-pay-style">50$<span>';        
        echo '</div>';
        echo '</section>';

        //last pays table

        echo '<section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">';
        echo '<h2>Last Pays</h2>';
        echo '<table class="table" style="font-size: 1.25rem">';        
            echo '<tr class="bg-dark" style="color: #fff">';
                echo '<td>#</td>';
                echo '<td>Date</td>';
                echo '<td>Adress To Send</td>';
                echo '<td>Number Of Transaction</td>';
                echo '<td>Number Before Transaction</td>';
                echo '<td>Number After Transaction</td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td>1</td>';
                echo '<td>25.10.2021</td>';
                echo '<td>Amazon</td>';
                echo '<td>200$</td>';
                echo '<td>1200$</td>';
                echo '<td>1000$';
            echo '</tr>';
                echo '<tr>';
                echo '<td>2</td>';
                echo '<td>5.11.2021</td>';
                echo '<td>Amazon</td>';
                echo '<td>100$</td>';
                echo '<td>1000$</td>';
                echo '<td>900$';
            echo '</tr>';
        echo '</table>';
        echo '</section>';

        echo '</div>';


    }elseif ($do == 'reserve'){            //reserve page
    
        echo '<div class="container">';


        echo '<section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">';
        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Hotel</h3>';
        echo '<span class="span-pay-style">hotal icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve House</h3>';
        echo '<span class="span-pay-style">house icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Tramwai</h3>';
        echo '<span class="span-pay-style">Tramwai icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bus</h3>';
        echo '<span class="span-pay-style">Bus icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Train</h3>';
        echo '<span class="span-pay-style">Train icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Plane</h3>';
        echo '<span class="span-pay-style">Plane icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Taxi</h3>';
        echo '<span class="span-pay-style">Taxi icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bycicle</h3>';
        echo '<span class="span-pay-style">Bycicle icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Cars</h3>';
        echo '<span class="span-pay-style">Cars icon<span>';        
        echo '</div>';


        echo '</section>';

        

        echo '</div>';


    }elseif ($do == 'education'){            //reserve page
    
        echo '<div class="container">';


        echo '<section class="mt-4 mb-4 pt-2 pb-2 row text-center justify-content-center" style="border: none !important;">';
        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Hotel</h3>';
        echo '<span class="span-pay-style">hotal icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve House</h3>';
        echo '<span class="span-pay-style">house icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Tramwai</h3>';
        echo '<span class="span-pay-style">Tramwai icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bus</h3>';
        echo '<span class="span-pay-style">Bus icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Train</h3>';
        echo '<span class="span-pay-style">Train icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Plane</h3>';
        echo '<span class="span-pay-style">Plane icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Taxi</h3>';
        echo '<span class="span-pay-style">Taxi icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Bycicle</h3>';
        echo '<span class="span-pay-style">Bycicle icon<span>';        
        echo '</div>';

        echo '<div class="col-md-3 col-sm-3 bg-success m-2 pt-4 pb-4"><h3>Reserve Cars</h3>';
        echo '<span class="span-pay-style">Cars icon<span>';        
        echo '</div>';


        echo '</section>';

        

        echo '</div>';


    }





?>
<?php include 'footer.php';?>