<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet"> -->
    
    <link rel="stylesheet" href="contact.css">
    
    <?php 
    
    
    if(isset($_POST['sent'])){
        // check name
        
        if(empty($_POST['user'])) $user_empty = "<p class='error' please enter your name</p>";
        
        // check email
       
        if(empty($_POST['email'])) $user_empty = "<p class='error' please enter your email</p>"; 
        
        // check message
       
        if(empty($_POST['message'])) $user_empty = "<p class='error' please enter your message</p>"; 
        
        if (!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['message'])){
        
        // send email
        header("location:contact.php?ok=1");
        }
}
    $pagename = 'contact';include 'head.php' ?>
    <title>contact</title>

<!-- </head>
<body>
    <header>
        <div id="d1" class="wrapper">
            <img src="header/logo.svg" alt="logo" id="logo">
            <div id="d2">
                <nav id="mainmenu">
                    <a href="#" class="links" id="currentpage">Home</a>
                    <span>|</span>
                    <a href="#" class="links" >Phones &amp; Accessories</a>
                    <span>|</span>
                    <a href="#" class="links" >Contact Us</a>
                </nav>
                <img src="header/menu-icon.svg" alt="menu" id="menu">
            </div>
        </div>
    </header> -->

    <?php include 'navi.php' ?>
    
    <!-- section1 start -->
    <section id="sec1">
        <div id="d3">
            <div class="wrapper" id="d6">
                <div id="left">
                    <h1>CONTACT US</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tenetur possimus fugiat ipsa iste iusto. Recusandae, repellendus totam delectus rerum corporis et ab commodi magni nemo. Omnis minus quis quaerat.</p>
                
                <div class="d7">
                    <div class="row">
                        <div class="rowleft">
                            <img src="contact/contact-pg/location-icon-purple.svg" alt="location" id="location">
                </div>
                <div class=" rowright">
                    <address class="text1">34/b,Lorem ipsum dolor sit, amet elit. Fuga, debitis eum sint magni repudiandae voluptatem? sit!</address>
                </div>
            </div>
            <div class="row">          
                <div class="rowleft">
                <img src="contact/contact-pg/call-icon-purple.svg" alt="call"> 
            </div>
                <div class="row right">
                <a class="text1" href="tel:+9412354125">+94215441542</a><br>
                <a class="text1" href="tel:+9412354125">+94215441542</a>
            </div>
        </div>
                <div class="row">
                  <div class="rowleft">
                <img src="contact/contact-pg/email-icon-purple.svg" alt="email" id="email">
            </div>
                <div class="rowright">
                <a class="text1" href="email-to:contact@abc.com">contact@abc.com</a> 
                </div>
            </div>
        </div>
    </div>
    <div id="right">
        <img src="contact/contact-pg/girl.png" alt="girl">
        </div>
    </div>

</section>

<!-- section2 start -->
    <section id="sec2">
        <div class="wrapper" id="message">
            <form id="left2" action="contact.php" method=post>
                
                <?php
                     if(isset($_GET['ok'])){
                        echo '<p id="okmsg">Email sent successfully</p>';
                    }
                ?>
           
          
                <h2>Send your message</h2>
                
                    <label class="row2">
                        <span class="formtext">Your Name</span>
                        <input class="in" type="text" name="user">
                    </label>
                    <?php
                       echo_empty ?? '';
                    //   if(isset($user_empty)) echo '<p>',
                    //  else echo '' ;
                      ?>
                    <label class="row2">
                        <span class="formtext">Email Address</span>
                        <input class="in" type="email" name="email">
                    </label>
                    <?php
                        echo $email_empty ??'' ;
                        ?>
                    <label class="row2">
                        <span class="formtext">Message</span>
                        <textarea class="in" name="message"></textarea>
                        <?php echo $_POST['message'] ?? ''; ?>
                    </label>
                    <?php
                        echo $message_empty ??'' ;
                        ?>
                    <input type="submit" value="SUBMIT" id="submit" name="sent">
                
            </div>
        </form>  
            <div id="right2">
             <h2>Our branches</h2>
              <p id="parab">Lorem ipsum dolor</p>              
                <div class="d7">
                    <div class="row2">
                        <div class="rowright">
                            <img src="contact/contact-pg/location-icon-pink.svg" alt="location" id="location">
                </div>
            
                <div class=" rowright">
                    <address class="text1">34/b,Lorem ipsum dolor </address>
                </div>
            </div>
            
            <div class="row2">          
                <div class="rowright">
                    <img src="contact/contact-pg/call-icon-pink.svg" alt="call"> 
            </div>
                    <div class="rowright">
                        <a class="text1" href="tel:+9412354125">+94215441542</a><br>
                        <a class="text1" href="tel:+9412354125">+94215441542</a>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- footer start -->
<!-- <footer>
    <div id="bottommenu" class="wrapper">
        <nav id="lastnav">
            <a href="#" class="hyperlink">Home</a>
            <span>|</span>
            <a href="#" class="hyperlink" >Phones &amp; Accessories</a>
            <span>|</span>
            <a href="#" class="hyperlink" >Contact Us</a>
        </nav>
        <p>All rights reserved &copy; webclass</p>
    </div>
</footer> -->

<?php include 'foot.php'; ?>

</body>
</html>
                