<?php require("../phpfunctions.inc") ?>
<?php
    $StyleArray = ["../css/aboutStyle.css"];
    $JSArray = [];
    HTMLStart("Road Kill Grill", $StyleArray, $JSArray);
    PageNav();
    PageHeader("About");
?>
    <!-- Main -->
    <main class="middle">
        <img class="picture" src="../images/building.jpg"> 
        <p class="newsize25"> Road Kill Grill is a family owned business that prides itself on 
            the use of natural ingredients sourced locally. With an ever-changing 
            menu and wide variety of ingredients we hope that we can serve up a 
            unique experience every time you and your family come to visit!</p>
        <p class="newsize25"> Orginally opened in 1978 by brothers John and Bill Smith, we pride
            ourselves on preserving their dream of never comprimising on the 
            quality of our food. The resturant started on this oath and will die with it.</p>
        <p class="newsize25">Our promise is what has allowed our company to begin expanding very shortly 
            after opening. By 1983 Road Kill Grill had expanded to 5 different locations, 
            and today we host over 58. Mainly located on the East Coast we soon hope to expand 
            westward and make it known nation wide how amazing Road Kill Grill is! 
            If you would be interested in helping fulfill this dream by opening up a 
            franchise please head over to our contact page today! 
        </p>
    </main>
<?php
    Sidebar1();
    Sidebar2();
    PageFooter();
    HTMLEnd();
?>