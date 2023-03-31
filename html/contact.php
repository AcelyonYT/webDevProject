<?php include("phpfunctions.inc") ?>
<?php
    HTMLStart("Road Kill Grill");
?>
    <link rel="stylesheet" href="../css/innergridStyle.css">
    <link rel="stylesheet" href="../css/contactStyle.css">
    <script src="../javascript/contact.js" defer ></script>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php 
    HTMLStartCont();
    PageNav();
    PageHeader("How can we help you!");
?>
    <main class="middle innergrid displayGrid">
        <div class="newsize leftside">
            Visit us at:<br>
            U.S Rt. 66<br>
            USA<br>
            Follow our socials<br>
            Stay connected<br>
            <!-- Add font awesome icons -->
            <a href="#" class="fa fa-facebook whiteText textCenter"></a>
            <a href="#" class="fa fa-twitter whiteText textCenter"></a>
            <a href="#" class="fa fa-snapchat whiteText textCenter"></a>
            <h1 class="menuHeader">Apply to work with us</h1>
            <h2>Open Positions That are Available to Apply!</h2>
            <ul>
                <li>Cashier</li>
                <li>Social Media Influencer</li>
                <li>Delivery Person</li>
                <li>Staff in Kitchen</li>
            <ul>   
            <h3>Contact Form</h3>
            <div class="container">
                <form>
                    <label for="fname">First Name</label>
                    <input class="full" type="text" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input class="full" type="text" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <input class="full" type="text" placeholder="Your country name..">
                    

                    <label for="subject">Subject</label>
                    <textarea class="full" placeholder="Write something.." style="height:200px"></textarea>
                    <input type="checkbox" />Send me monthly newsletter
                    <br><br>

                    <button class="whiteText" onclick="sendContact();">Submit</button>                    
                </form>
            </div>
        </div>
        <div class="rightside">
            <img class="picture" src="../images/contact.jpg" alt="helpCenterPicture">
        </div>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>