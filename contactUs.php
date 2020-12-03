<?php include_once("header.php");?>
<link rel="stylesheet" href="web-assets/css/contact.css">
<div class="header__mid">
    <h1>Get In touch With Us</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
</div>
</div>

<div class="mid__section">
    <div class="contactFrom">
        <div class="name">
            <input type="text" name="" required value="" placeholder="First Name*" onkeypress="return /[a-z]/i.test(event.key)">
            <input type="text" name="" value="" placeholder="Last Name" onkeypress="return /[a-z]/i.test(event.key)">
        </div>
        <div class="phone">
            <input type="number" name="" value="" placeholder="Phone number" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
        </div>
        <div class="method">
            <p style="margin-bottom: 15px;">Select your preferred method of contact</p>
            <input type="radio" name="choice" value="" ><span>Phone</span></input>
            <input type="radio" name="choice" value=""><span>Email</span></input>
            <input type="radio" name="choice" value=""><span>Both</span></input>
        </div>
        <div class="message">
            <textarea name="name" rows="8" cols="80" placeholder="Enter your message"></textarea>
        </div>
        <div class="terms">
            <div class="checked checkbox">
                <input type="checkbox" id="checkbox" name="" value="">
                <label for="checkbox"><span>I agree to receive communications on latest updates, offers, promotions, etc. <br> By clicking "Enquire Now", you agree to out <a href="#">Terms of Conditions, </a><a href="#">Privacy Policy</a></span></label>
            </div>
            <div class="termss" style="display:none;">
                <p>I agree to receive communications on latest updates, offers, promotions, etc</p>
                <p>By clicking "Enquire Now", you agree to out <a href="#">Terms of Conditions,</a><a href="#">Privacy Policy</a></p>
            </div>

        </div>
        <div class="submit">

            <a href="#" class="btn">Enquire Now <span><img src="web-assets/images/icons/arrow.svg" alt=""></span> </a>
        </div>
    </div>

</div>
<div class="logos">
    <div class="left">
        <img src="web-assets/images/icons/map.svg" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
    </div>
    <div class="mid">
        <img src="web-assets/images/icons/mail.svg" alt="">
        <p>RFQ88345@gmail.com</p>
    </div>
    <div class="right">
        <img src="web-assets/images/icons/Page-1.svg" alt="">
        <p>+91 1234567891</p>
    </div>
</div>
<!--<img src="https://miro.medium.com/max/4064/1*qYUvh-EtES8dtgKiBRiLsA.png" alt="" class="map">-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497699.99740588595!2d77.35073556598017!3d12.953847716333065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1606984122944!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="width: 100%;border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php include_once("footer.php");?>
