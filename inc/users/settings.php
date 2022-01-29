<?php include 'header.php';?>
<?php

        //get id action
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $_SESSION['id'] = $_GET['id'];
            
        }elseif(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
        }
        
    echo '<div class="float-start bg-success col-md-2 mt-2 pt-4">
        <ul>
            <li><a href="?set=general&id=' . $id . '" class="pt-3">> General Informations</a></li>
            <li><a href="?set=cards&id=' . $id . '" class="pt-3">> Cadrs</a></li>
        </ul>
    </div>';

    echo '<div class="container float-end bg-success col-md-10 mt-2 pt-4 pb-4">';
        //get set action
        if(isset($_GET['set'])){
            $set = $_GET['set'];
        }else{
            $set = 'general';
        }



        echo '<h2>Welcome To ' . $set . ' Page</h2>';
        if($set == 'general'){

            //get the informations of the user table

            $stmt = $con->prepare("SELECT name, user_name, birthday_date, email, password, phone_number, adress FROM users WHERE id = ? ");
            $stmt->execute(array($id));
            $row = $stmt->fetch();
            $count = $stmt->rowCount();
       
            //get the informations of the user table in the variables

            $name = $row['name'];$username = $row['user_name'];$birthday = $row['birthday_date'];$email = $row['email'];
                    $password = $row['password'];$phonenumber = $row['phone_number'];$adress = $row['adress'];

            //get the informations of the user table in the form input

            echo '<form action="?set=update&id=' . $id . '" method="POST">
                <h4 class="pt-2 pb-2">Name</h4>
                <input type="text" name="name" placeholder="Name" autocomplete="off" value='. $name .'>
                <h4 class="pt-2 pb-2">User Name</h4>
                <input type="text" name="user-name" placeholder="User Name" autocomplete="off" value='. $username .'>
                <h4 class="pt-2 pb-2">Birthday Date</h4>
                <input type="text" name="birthday" placeholder="Birthday Date" autocomplete="off" value='. $birthday .'>
                <h4 class="pt-2 pb-2">Email</h4>
                <input type="text" name="email" placeholder="Email" autocomplete="off" value='. $email .'>
                <h4 class="pt-2 pb-2">Password</h4>
                <input type="number" name="password" placeholder="Password" autocomplete="off" value='. $password .'>
                <h4 class="pt-2 pb-2">Phone Number</h4>
                <input type="number" name="phone-number" placeholder="Phone Number" autocomplete="off" value='. $phonenumber .'>
                <h4 class="pt-2 pb-2">Adress</h4>
                <input type="text" name="adress" placeholder="Adress" autocomplete="off" value='. $adress .'><br/>
                <input type="submit" class="btn btn-primary btn-block float-end p-4 pt-2 pb-2" value="Save"> 
            </form>';
            
            //edit/update the informations of the user table

            /**/

            
        }elseif($set == 'update'){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // update the informations

                $stmt = $con->prepare("UPDATE users SET name = ?, user_name = ?, birthday_date = ?, email = ?, password = ?, phone_number = ?, adress = ?, WHERE id=" . $id);

                $stmt->execute(array($_POST['name'], $_POST['user-name'], $_POST['birthday'], $_POST['email'], $_POST['password'], $_POST['phone-number'], $_POST['adress']));
                $row = $stmt->fetch();
                $count = $stmt->rowCount();
                echo ' <h2 class="alert alert-success">' . $count . 'Record Updated</h2>';

            }else{
                echo '<h2 class="alert alert-danger">Sorry You Cant Browse This Page Directly</h2>';
            }

        }elseif($set == 'cards'){
            echo '<div class="col-md-8 col-sm-8 bg-success m-2 pt-4 pb-4"><h3>National Number</h3>
                    <span class="span-pay-style">122212122551589<span>
                 </div>';
                
            echo '<div class="col-md-12 col-sm-12 bg-success m-2 pt-4 pb-4"><h3>National Card</h3>
                    <span class="span-pay-style">0000254879<span>
                    <input type="submit" class="btn btn-primary btn-block btn-danger ml-1 col-md-1 col-sm-1 float-end" value="Get New">
                    <input type="submit" class="btn btn-primary btn-block  btn-info col-md-1 col-sm-1 float-end" value="Renevler">
                </div>';

            echo '<div class="col-md-12 col-sm-12 bg-success m-2 pt-4 pb-4"><h3>National Assurance</h3>
                 <span class="span-pay-style">0047896421<span>
                 </div>';

            echo '<div class="col-md-12 col-sm-12 bg-success m-2 pt-4 pb-4"><h3>Assurance Card</h3>
                 <span class="span-pay-style">0098554231<span>
                 <input type="submit" class="btn btn-primary btn-block ml-1 btn-danger col-md-1 col-sm-1 float-end" value="Get New">
                 <input type="submit" class="btn btn-primary btn-block  btn-info col-md-1 col-sm-1 float-end" value="Renevler">
                 </div>';
            
            echo '<div class="col-md-12 col-sm-12 bg-success m-2 pt-4 pb-4"><h3>Pay Card</h3>
                 <span class="span-pay-style">4785963215489856<span>
                 <input type="submit" class="btn btn-primary btn-block  ml-1 btn-danger col-md-1 col-sm-1 float-end" value="Get New">
                 <input type="submit" class="btn btn-primary btn-block btn-info col-md-1 col-sm-1 float-end" value="Renevler">
                 </div>';
        }
    echo '</div>';

?>
<?php include 'footer.php';?>