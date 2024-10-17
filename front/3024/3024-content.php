<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3024">
    <div class="container">
        <div class="row column">
            <div class="col-md-6">
                <div class="about-content">
                    <div class="sec-title-two">
                        <h1>About Us</h1> <span class="border"></span>
                    </div>
                    <ul>
                        <li>
                            <div class="img-holder">
                                <picture>
                                    <source type="image/webp" srcset="./img/1.png">
                                    <img src="./img/1.png" alt="Awesome Image">
                                </picture>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <picture>
                                    <source type="image/webp" srcset="./img/2.png">
                                    <img src="./img/2.png" alt="Awesome Image">
                                </picture>
                            </div>
                        </li>
                        <li>
                            <div class="img-holder">
                                <picture>
                                    <source type="image/webp" srcset="./img/3.png">
                                    <img src="./img/3.png" alt="Awesome Image">
                                </picture>
                            </div>
                        </li>
                    </ul>
                    <div class="text-holder">
                        <p>Our commitment to bring professionalism, good service &amp; trust to the Phone repair service
                            &amp; maintenance business. We take immense pride in sending some of the most of
                            professional
                            technicians to yours phone to fix things that aren't workings.</p>
                        <h3>Save time, Save money, With Quality Phone Repair Service, <span>Purchase - RepairPlus</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="choose-us-content">
                    <div class="sec-title-two">
                        <h1>Why Choose Us</h1> <span class="border"></span>
                    </div>
                    <ul>
                        <li>
                            <div class="iocn-holder"> <span class="fas fa-wrench"></span></div>
                            <div class="text-holder">
                                <h4>Free Diagnostics</h4>
                                <p>Mr.Fixit is a quick and easy way of checking the set up on your Mobile Phones,
                                    Desktop
                                    &amp; Laptop, Acessories and ect... We done its free of cost.</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder"> <span class="fas fa-tools"></span></div>
                            <div class="text-holder">
                                <h4>Quick Repair Process</h4>
                                <p>The repair process is fast and convenient &amp; our expert teams of Mr.Fixit repair,
                                    If
                                    you see a phone symbol in the top left corner of the screen.</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder"> <span class="fas fa-compass"></span></div>
                            <div class="text-holder">
                                <h4>24/7 Customer Support</h4>
                                <p>24x7 techsupport is one of the best services in the Mr.Fixit. 24x7 tech support
                                    providing
                                    quality services at anytime, anywhere in the world.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>