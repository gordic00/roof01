<?php
    include 'header.php';
?>

        <div class="contact">
            <h1>Contact us</h1>
            <form class="contactForm" action="include/mail.inc.php" method="POST">
                <label>Name:</label><br>
                <input type="text" name="name" placeholder="Name" style=width:300px required><br>

                <label>E-mail:</label><br>
                <input type="text" name="email" placeholder="xxxxxx@xxxxx.xxx" style=width:300px required><br>

                <label>Phone number:</label><br>
                <input type="tel" name="phone" placeholder="+381 6x xxxxxxx" pattern="[+09]{3-4}[0-9]{6-7}" style=width:300px required><br>
        <!-- Patern za Kanadu pattern="[+09]{4}[0-9]{3}[0-9]{4}"-->
        <!-- Patern za Srbiju pattern="[+09]{3-4}[0-9]{6-7}"-->

                <label>Subject:</label><br>
                <input type="text" name="subject" placeholder="Subject" style=width:300px required><br><br>

                <label>Message:</label><br>
                <textarea name="message" id="1" cols="30" rows="10" placeholder="Message..." style=width:300px required></textarea><br>
                <button type="submit" name="submit" style="width: 100px; height: 25px;">Send message</button>
            </form>
            <br>

        </div>
    </div>
    <?php
    include 'footer.php';
   ?>