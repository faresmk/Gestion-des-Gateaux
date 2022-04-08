
<?php include('partials2/menu1.php');?>

   
         
        
<?php 
            
                
            if(isset($_POST['submit']))
            {
                $cake_name2 = $_POST['cake_name'];
                $price2 = $_POST['price'];
                $date2 = $_POST['date'];
                $time2 = $_POST['time'];
                $status2 = "Ordered";
                $costumer_name2 = $_POST['full_name'];
                $phone_num = $_POST['contact'];
                $costumer_email2 = $_POST['email'];
                $costumer_address2 = $_POST['address'];
                $observe2 = $_POST['observ'];
                $sql2 ="INSERT INTO tbl_order SET 
                cake_name = '$cake_name2',
                price = '$price2',
                date = '$date2',
                time = '$time2',
                status = '$status2',
                costumer_name = '$costumer_name2',
                phone_num = '$phone_num2',
                costumer_email = '$costumer_email2',
                costumer_address = '$costumer_address2',
                observe = '$observe2'
                ";
                $res2 = mysqli_query($conn, $sql2);
                if($res2==true)
                {
                    $_SESSION['order1'] = "<div class='success text-center'>Food ordered successfullu.</div>";
                    header('location:'.SITEURL);
                }
                else
                {
                    $_SESSION['order1'] = "<div class='error'>failed to order food.</div>";
                    header('location:'.SITEURL);
                }
            }


        ?>




    <!-- navigation starts -->
    <header style="  transition: 0.6s;"id="mainnav" >
        <a href="index.php" class="logo"><span>Spolaya</span></a>
        <!--<nav>-->
        <ul>
            <li>
                <a href="#" style="text-decoration: none;"><span>Accueil</span></a>
            </li>
            <li>
                <a href="#about" style="text-decoration: none;"><span>À Propos</span></a>
            </li>
            <li>
                <a href="#gallery" style="text-decoration: none;"><span>Galerie</span></a>
            </li>
            <li>
                <a href="#menu" style="text-decoration: none;"><span>Menu</span></a>
            </li>
            <li>
                <a href="#order" style="text-decoration: none;"><span>Commander Un Gâteau</span></a>
            </li>
        </ul>
 <!--</nav>--> 
        <div class="hamb">
            <a ><i class="fa fa-bars"></i></a>
          </div> 

          
          
         
</header>
<div class ="pm"></div>
<?php
                     
                     if(isset($_SESSION['order']))
                     {
                         echo $_SESSION['order'];
                         unset($_SESSION['order']);
                     }
                     if(isset($_SESSION['order1']))
                     {
                         echo $_SESSION['order1'];
                         unset($_SESSION['order1']);
                     }


                    ?>


<canvas id="bubble"></canvas>
    <!-- navigation ends -->
    <!-- slider  section start -->
    <section class="home-slider owl-carousel js-fullheight">
    
        <div class="slider-item js-fullheight" style="background-image: url(pics/mink-mingle-gADqtdKfMsg-unsplash-ConvertImage\ 2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Gâteau d'anniversaire</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(pics/david-holifield-J-46sdLKbRY-unsplash.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Gâteau de mariage</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(pics/pexels-rodolfo-quirós-1727415.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Dessert spécial Beleniss</h1>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image: url(pics/pexels-rodolfo-quirós-1727415.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text js-fullheight justify-content-center align-items-center"
                    data-scrollax-parent="true">

                    <div class="col-md-12 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Beleniss</span>
                        <h1 class="mb-4">Pâtisseries spéciales Beleniss</h1>
                    </div>

                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-wrap-about" id="about">
        <!--<div class="intro">-->
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro_content">
                            <div class="intro_subtitle page_subtitle">À Propos De Nous</div>
                            <div class="intro_title">
                                <h2>Beautiful Story</h2>
                            </div>
                            <div class="intro_text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, voluptatum, earum
                                    corrupti molestiae id, alias quaerat qui expedita voluptatibus sed magnam aperiam
                                    quos! Illum quo nobis repellat possimus alias reiciendis quas pariatur, labore
                                    maxime blanditiis. Nam perferendis veritatis necessitatibus? Animi distinctio at et
                                    assumenda doloremque possimus unde doloribus aliquid nobis.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6 intro_col" style="z-index: 1;" >
                                <div class="intro_image"><img src="pics/intro_1.jpg" alt="intro"></div>
                            </div>
                            <div class="col-xl-4 col-md-6 intro_col"style="z-index: 1;">
                                <div class="intro_image"><img src="pics/intro_2.jpg" alt="intro"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     <!--</div>--> 
        <div class="set" id="set1">
        </div>
        <div class="set set2" id="set2">
        </div>
        <div class="set set3" id="set3">
        </div>
    </section>
    <section class="fuuck-youu" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title normal-title">
                        <div class="row justify-content-center mb-5 pb-2">
                            <div class="col-md-12 text-center heading-section ftco-animate">
                                <span class="subheading">Galerie</span>
                                <h2 class="mb-4">Nos Gâteaux Populaire</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
   <section class="fk-you">
            <div class="row" id="gellry1">
            </div>
            </section> 
        <section class="ftco-section testimony-section img" id="menu"> 
            <div class="overlay"></div>
            <div class="container-fluid px-4">
                    <div class="row justify-content-center mb-5 pb-2">
                        <div class="col-md-7 text-center heading-section ftco-animate">
                            <span class="subheading">Spécialités</span>
                            <h2 class="mb-3">Notre menu</h2>
                        </div>
                    </div>
                 
                    
                    <div class="row" id="row2">
                        <?php
                        
                             $sql = "SELECT * FROM tbl_category WHERE active='on'";

                             $res = mysqli_query($conn, $sql);

                             $count = mysqli_num_rows($res);

                             if($count>0)
                             {    
                                 while($row=mysqli_fetch_assoc($res))
                                 {
                                     $id = $row['id'];
                                     $title = $row['title'];
                                     ?>

                                  <div class="col-md-6 col-lg-4 menu-wrap">
                                    <div class="heading-menu text-center ftco-animate">
                                     <h3><?php echo $title;?></h3>
                                   </div>
                                   <div class="pls" id="pls1"><?php

                                   $sql1 = "SELECT * FROM tbl_cake WHERE active='on'";
                                   $res1 = mysqli_query($conn, $sql1);
                                   

                                   $count1 = mysqli_num_rows($res1);
                                   
                                   if($count1>0  )
                                   {    
                                        
                                          
                                          while($row1=mysqli_fetch_assoc($res1))
                                          {
                                               $id1 = $row1['id'];
                                               $title1 = $row1['title'];
                                               $description1 = $row1['description'];
                                               $price1 = $row1['price'];
                                               $image_name1 = $row1['image_name'];
                                               $category_id1 = $row1['category_id'];
                                               
                                               if( $category_id1 == $id)
                                               {
                                                ?>
                                               
                                            
                               
                                                <div class="menus d-flex ftco-animate">
                                               <div class="menu-img img" ><?php 
                                               
                                                     if($image_name1=="")
                                                     {
                                                         echo"none";
                                                     }
                                                     else
                                                     {
                                                       ?>
                                                       <img class="menu-img" src="<?php echo SITEURL;?>cake_pics/<?php echo $image_name1;?>">
                                                      <?php
                                                     }
                                               
                                               ?></div>
                                                  <div class="text">
                                                   <div class="d-flex">
                                                  <div class="one-half">
                                                  <h3><?php echo $title1 ?></h3>
                                               </div>
                                              </div>
                                               <p><span><?php echo $description1 ?></span></p>
                                                <div class="d-flex">
                                                <div class ="but text-center">     
                                                <a href="<?php echo SITEURL;?>order.php?cake_id=<?php echo $id1;?>" class="addadmin" style="text-decoration: none;"><span class="addadmin2">Comander</span></a>
                                               </div>
                                              <div class="one-forth">
                                               <span class="price"><?php echo $price1 ?>€</span>
                                                  </div>
                                                  </div>
               
                                                   </div>
                                                      </div>
       
                                                      <?php
                                               }
                                              
                                          }

                                   }
                                   else
                                   {
                                       echo "<div class='error'>no cake is added</div>";
                                   }
                                   
                                   
                                   ?></div>
                                  </div>

                                     <?php
                                     
                                 }
                             }
                             else
                             {
                                 echo "<div class='error'>Category not Added.</div>";
                             }

                        ?>
                    </div>
            </section>  

            <section class="ftco-section idonno img" id="order" 
            data-stellar-background-ratio="0.5" >
            <div class="container" style="height: 100%;">
                <div class="row d-flex">
                    <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                        <div class="heading-section ftco-animate mb-5 text-center">
                            <span class="subheading">Commandez</span>
                            <h2 class="mb-4">Votre Gâteau</h2>
                        </div>
                        <div id="error_message"></div>
                        <form action="" method="POST" onsubmit="return validation()">
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
                                            <span class="text">Adresse</span>
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
                        <div class="row100">
                        <div class="col">
                        <div class="inputbox" id = "inputbox" >
                         <textarea  required  id = "move" name = "observ" ></textarea>
                          <span class="text">Décrivez Votre Gâteau</span>
                         <span class="Line"></span>
                          </div>
                            
                        </div>  
                    </div>
                            
                               <div class="row100">
                                    <div class="col" id="rowarea1">
                                        <div id="rowarea" class = "ffs" >
                                       </div>
                                    </div>
                               </div>
                                <div class="col-md-12 mt-3">
                                    <div class="form-group text-center">
                                        <input type="submit" name ="submit" value="Commandez votre gâteau" class="btn btn-primary py-3 px-5">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

      
        
        <?php include('partials2/footer1.php');?>