<?php
    include 'header.php';
?>

        <div class="contact">
            <h1>Contact us...</h1>
            <p>We are ready to answer all your questions, so don't hesitate . . .</p>
            <p>Send us request, and we will respond as soon as possible!</p>
            <form class="contactForm" action="include/mail.inc.php" method="POST">
                <label>Name:</label><br>
                <input type="text" name="name" placeholder="Name" style=width:300px required><br>

                <label>E-mail:</label><br>
                <input type="text" name="email" placeholder="xxxxxx@xxxxx.xxx" style=width:300px required><br>

                <label>Phone number:</label><br>
                <input type="text" name="phone" placeholder="+381 6x xxxxxxx", " style=width:300px required><br>
        <!-- Patern za Kanadu pattern="[+09]{4}[0-9]{3}[0-9]{4}" pattern="[+09]{3-4}[0-9]{6-7}-->
        <!-- Patern za Srbiju pattern="[+09]{3-4}[0-9]{6-7}"-->

                <label>Subject:</label><br>
                <input type="text" name="subject" placeholder="Subject" style=width:300px required><br><br>

                <label>Message:</label><br>
                <textarea name="message" id="1" cols="30" rows="10" placeholder="Message..." style=width:300px required></textarea><br>
                <button type="submit" name="submit" style="width: 100px; height: 25px;">Send message</button>
            </form>
            <br>
        </div>
        <div class="contact-info">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=hard%20hammer%20roofing%20kelowna&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </div>
        </div>
        </div>
    </div>
    <?php
    include 'footer.php';
   ?>