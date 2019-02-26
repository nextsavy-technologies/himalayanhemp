<?php
//Template Name:Medicines_product
$currentPage = "medicines_product";
get_header();
?>

    <div class="container-fluid product-section">
            <div class="col-md-12 col-xs-12 col-sm-12 product-margin reduce-margin">
        <div class="col-md-4 col-xs-4 col-sm-4 ">
            <div class="margin-col">
                <div class="text main">MEdicines product code :&nbsp;#1</div>
                <div class="product-image-wrapper">
                    <img src="https://uploads-ssl.webflow.com/5ba2331e37b9fb3b69e9c65a/5ba9c2353815351d46faa2b2_paper-f.jpg" class="product-image">
                </div>
                <div class="text sub add-margin">11 x 17 Sheets
                    <br>Pack of 100</div>
                <a href="#" data-w-id="ab4e4537-a2e4-1be8-884e-655bcd256ace" id="openForm" class="button w-button">Get a Quote</a>
            </div>
        </div>

        <div class="col-md-8 col-xs-8 col-sm-8 menu-right">
                        <div class="text main">MEdicines Variant A</div>
                        <div class="text sub add-margin">We are cutting down trees and forests across the world to make paper from the pulp of the wood. It
                            takes a tree upto 20 years to mature and just a Few Minutes to be cut down.</div>
                        <div class="text sub add-margin">Hemp hurds can be used to make paper as “The Alternative Green Solution” to cutting down millions
                            of trees every year. It doesn't require any chemical processing and can be recycled up to 7 times,
                            which is 2 times more than the wooden pulp paper.</div>
                        <div class="text sub add-margin">Most importantly, it takes just one acre of hemp fields to produce enough paper which is equivalent
                            to 4 acres of forests, in just 3 months as compared to 240 months (20 years) for the trees to
                            mature. </div>
        </div>
</div>
<div class="col-md-12 col-xs-12 col-sm-12 product-margin">
        <div class="col-md-4 col-xs-4 col-sm-4">
            <div class="margin-col">
                <div class="text main">MEdicines product code :&nbsp;#2</div>
                <div class="product-image-wrapper">
                    <img src="https://uploads-ssl.webflow.com/5ba2331e37b9fb3b69e9c65a/5ba9c2353815351d46faa2b2_paper-f.jpg" class="product-image">
                </div>
                <div class="text sub add-margin">11 x 17 Sheets
                    <br>Pack of 100</div>
                <a href="#" data-w-id="ab4e4537-a2e4-1be8-884e-655bcd256ace" id="openForm" class="button w-button">Get a Quote</a>
            </div>
        </div>

        <div class="col-md-8 col-xs-8 col-sm-8 menu-right">
                        <div class="text main">MEdicines Variant A</div>
                        <div class="text sub add-margin">We are cutting down trees and forests across the world to make paper from the pulp of the wood. It
                            takes a tree upto 20 years to mature and just a Few Minutes to be cut down.</div>
                        <div class="text sub add-margin">Hemp hurds can be used to make paper as “The Alternative Green Solution” to cutting down millions
                            of trees every year. It doesn't require any chemical processing and can be recycled up to 7 times,
                            which is 2 times more than the wooden pulp paper.</div>
                        <div class="text sub add-margin">Most importantly, it takes just one acre of hemp fields to produce enough paper which is equivalent
                            to 4 acres of forests, in just 3 months as compared to 240 months (20 years) for the trees to
                            mature. </div>
        </div>        
    </div>    

    <script type="text/javascript">
        $(document).ready(function(){
            $("#openForm").click(function(){
                $("#myForm").animate({
                    width: "toggle"
                },800);
            });
            $("#closeForm").click(function(){
                $("#myForm").animate({
                    width: "toggle"
                },800);
            });            
        });
    </script>
    <div data-w-id="0baaf9d7-181d-2411-e52a-4611b06ad720" id="myForm" class="form-popup-wrapper" style="transform: translate3d(-700px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
            <a href="#" data-w-id="6626d729-4823-2ae4-5834-28913bc77669" class="link-button w-inline-block">
                <div class="text main" id="closeForm">Close / cancel</div>
            </a>
            <div class="form-text-wrapper">
                <div class="text sub">We aim to provide you with the best in Hemp based product innovation.</div>
                <div class="text sub">Please fill in the form below to notify us of your requirements and we'll get back to you asap.</div>
            </div>
            <div class="w-form">
                <form id="email-form" name="email-form" data-name="Email Form">
                    <label for="name" class="form-field-name">Name</label>
                    <input type="text" class="form-field w-input" maxlength="256" name="name" data-name="Name" id="name" required="">
                    <label for="email" class="form-field-name">Email Address</label>
                    <input type="email" class="form-field w-input" maxlength="256" name="email" data-name="Email" id="email" required="">
                    <label for="product-code" class="form-field-name">Product Code</label>
                    <input type="text" class="form-field w-input" maxlength="256" name="product-code" data-name="product-code" id="product-code"
                        required="">
                    <label for="quantity" class="form-field-name">Quantity</label>
                    <input type="text" class="form-field w-input" maxlength="256" name="quantity" data-name="quantity" id="quantity" required="">
                    <label for="message" class="form-field-name">Add a message</label>
                    <textarea id="message" name="message" maxlength="5000" data-name="message" class="form-field w-input"></textarea>
                    <input type="submit" value="Submit" data-wait="Please wait..." class="button w-button">
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>

</div>

</body>

</html>