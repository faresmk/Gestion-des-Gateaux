<?php include('partials2/menu1.php');?>



<?php 
                     
                     if(isset($_POST['submit']))
                     {
                         $cake_name = $_POST['cake_name'];
                         $price = $_POST['price'];
                         $date = $_POST['date'];
                         $time2 = $_POST['time'];
                         $status = "Commandé";
                         $costumer_name = $_POST['full_name'];
                         $phone_num = $_POST['contact'];
                         $costumer_email = $_POST['email'];
                         $costumer_address = $_POST['address'];
                         $observe = $_POST['observ'];

                         $sql2 = "INSERT INTO tbl_order SET
                         cake_name = '$cake_name',
                         price = '$price',
                         date = '$date',
                         time = '$time2',
                         status = '$status',
                         costumer_name = '$costumer_name',
                         phone_num = '$phone_num',
                         costumer_email = '$costumer_email',
                         costumer_address = '$costumer_address',
                         observe = '$observe'
                         ";

                         $res2 = mysqli_query($conn, $sql2);
                         if($res2==true)
                         {
                             $_SESSION['order'] = "<div class='success text-center'>Food ordered successfullu.</div>";
                             header('location:'.SITEURL.'#order');
                         }
                         else 
                         {
                            $_SESSION['order'] = "<div class='error'>failed to order food.</div>";
                            header('location:'.SITEURL.'#order');
                         }

                     }
                    
                    
                    ?>






<?php 
                  
                  
                  if(isset($_GET['cake_id']))
                  {
                      $cake_id = $_GET['cake_id'];

                      $sql = "SELECT * FROM tbl_cake WHERE id=$cake_id";

                      $res = mysqli_query($conn, $sql);

                      $count = mysqli_num_rows($res);

                      if($count==1)
                      {
                          $row = mysqli_fetch_assoc($res);
                          $title = $row['title'];
                          $price = $row['price'];
                          $description = $row['description'];
                          $image_name = $row['image_name'];
                      }
                      else 
                      {
                          header('location:'.SITEURL);
                      }
                  }
                  else 
                  {
                      header('location:'.SITEURL);
                  }
                  

             
             ?>

<canvas id="bubble"></canvas>

<section class="ftco-section idonno img" id="order?cake_id=" 
            data-stellar-background-ratio="0.5" >
            <canvas id="bubble2"></canvas>
            <div class="container" style="height: 100%;">
                <div class="row d-flex">
                    <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                        <div class="heading-section ftco-animate mb-5 text-center">
                            <span class="subheading">Commandez</span>
                            <h2 class="mb-4">Votre Gâteau</h2>
                        </div>
                              
                      

                        <div id="error_message"></div>
 
                        <form action="" method="POST" onsubmit ="return validation()" >
                        <div class="menus d-flex ftco-animate">
                            <div class="menu-img img" ><?php 
                            

                            if($image_name=="")
                            {
                                echo "<div> image not available.</div>";
                            }
                            else 
                            {
                                ?>
                               <img class="menu-img" src="<?php echo SITEURL;?>cake_pics/<?php echo $image_name;?>">
                               <?php
                            }
                            
                            
                            
                            ?></div>
                            <div class="text">
                                <div class="d-flex">
                                    <div class="one-half">
                                        <h3 style="color: #804444;" ><?php echo $title ?></h3>
                                        <input type ="hidden" name ="cake_name" value="<?php echo $title; ?>">
                                    </div>
                                </div>
                                <p><span style="color: #804444; font-size: 15px; font-weight: 600;" ><?php echo $description ?></span></p>
                                    <div class="d-flex">
                                    <div class="one-forth" id="one-forth2" >
                                        <span class="price" style="color: #804444;" ><?php echo $price; ?></span>
                                        <input type ="hidden" name ="price" value="<?php echo $price; ?>">
                                    </div>
                                    </div>
                                
                            </div>
                        </div>
                            <div class="row">
                                <div class="row100">
                                    <div class="col">
                                        <div class="inputbox">
                                            <input type="text" name="full_name" required="required" id="name1" >
                                            <span class="text">Nom complet</span>
                                            <span class="Line"></span>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="inputbox">
                                            <input type="text" name="contact" required="required" id="num" > 
                                            <span class="text">Numéro de téléphone</span>
                                            <span class="Line"></span>
                                        </div>
                                    </div>
                                
                                </div>
                                </div>
                                <div class="row100">
                                    <div class="col">
                                        <div class="inputbox">
                                            <input type="text" name="email" required="required" id="mail">
                                            <span class="text">Email</span>
                                            <span class="Line"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="inputbox">
                                            <input type="text" name="address" required="required" id="address" > 
                                            <span class="text">Address</span>
                                            <span class="Line"></span>
                                        </div>
                                    </div>

                                </div>
                                
                            <div class="row100">
                                <div class="col">
                                    <div class="inputbox">
                                        <input type="text"  required="required" id="book_date" name = "date"  >
                                        <span class="text">Date</span>
                                        <span class="Line"></span>
                                    </div>
                                </div>
                            
                                <div class="col">
                                <div class="inputbox">
                                    <input type="text" required="required"  id="book_time" name ="time" >
                                    <span class="text">Time</span>
                                    <span class="Line"></span>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row100" onchange = "return add()">
                       <div class="col">
                            <span class="text1">Ajoutez un commentaire</span>
                            <label>
                            
                                <input type="checkbox" class="check1" name="featured" id="ck1" >
                                <span class="check"></span>
                                </label>
                            
                        </div>    
                        </div> 
                       <div class="row100">
                        <div class="col" id="rowarea1">
                             <div id="rowarea" class = "ffs" ></div>                                       
                        </div>            
                       </div>
                     
                                <div class="col-md-12 mt-3">
                                    <div class="form-group text-center" id="paypal-test">
                                        <input type="submit" name ="submit"  value="Order Your Cake" class="btn btn-primary py-3 px-5"  >
                                    </div>
                                </div>
                            </div>
                        </form>




                               





                    </div>
                </div>
            </div>
        </section>

        <script src="https://www.paypal.com/sdk/js?client-id=ARqlxrVT_I9tuqsVfnk64c2oo7XvZN_cQqYpwPYMbnQ-_fEwHXtYe4-nwjqnOSxmgGB_HAc59z8MUiFM&disable-funding=credit,card"></script>
    <script>paypal.Buttons({

            style:{
                color:'black',
                shape:'pill'
            },
            createOrder:function(data, actions){
                return actions.order.create({
                    purchase_units:[{
                        amount:{
                            value: '<?php echo $price;  ?>'
                        }
                    }]
                });
            },

            onApprove:function(data, actions)
            {
                return actions.order.capture().then(function (details) {
                    console.log(details)
                })
            }

    }).render('#paypal-test');</script>

<?php include('partials2/footer1.php');?>