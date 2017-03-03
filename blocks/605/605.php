<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/605.less', 'css/605.css');
        ?>
        <link href="css/605.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripts.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="template-605">
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <article class=" col-lg-5">
                            <h4 class=" m_title">FOOTER MENU</h4>
                            <nav>
                                <ul class="menu clearfix">
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                    <li ><a href="#">Curabitur iaculis</a></li>
                                </ul>
                            </nav>
                        </article>
                        <article class="col-lg-4">
                            <div >
                                <h4 class=" m_title">NEWSLETTER SIGNUP</h4>
                                <div >
                                    <div class="newsletter-signup">
                                        <p>By subscribing to our mailing list you will always be update with the latest news from us.</p>
                                        <form method="post" name="newsletter_form">
                                            <input type="text" name="name_nl120" value="" placeholder="your name">
                                            <input type="text" name="email_nl120" value="" placeholder="email@address" required="required">
                                            <input type="submit" name="submit_nl120" value="JOIN US">
                                        </form>
                                        <span id="result">* it really works! Mailchimp Integration.</span>
                                        <p><small>We never spam!</small></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class=" col-lg-3 contact-details">
                            <h4 class=" m_title">GET IN TOUCH</h4>
                            <div >
                                <div class=" contact-details">
                                    <p><strong>T (212) 555 55 00</strong>
                                        <br> Email: <a href="#">sales@yourwebsite.com</a></p>
                                    <p>Your Company LTD
                                        <br> Street nr 100, 4536534, Chicago, US</p>
                                    <a href="#" target="_blank" class=" contact-details"><span class="icon-map-marker icon-white"></span> <span> Open in Google Maps</span></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div >
                                <img src="images/twitter-footer." class="img-responsive" alt="" title="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="social-share">
                                <img src="images/social-footer." class="pull-right img-responsive" alt="" title="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="bottom fixclear">
                                <ul class="social-icons fixclear normal">
                                    <li class="title">GET SOCIAL</li>
                                    <li class="social-twitter"><a href="#" target="_blank" title="Follow us on Twitter">Twitter</a></li>
                                    <li class="social-dribbble"><a href="#" target="_blank" title="Follow us on Dribbble">Dribbble</a></li>
                                    <li class="social-facebook"><a href="#" target="_blank" title="Follow us on Facebook">Facebook</a></li>
                                    <li class="social-envato"><a href="#" target="_blank" title="Follow us on Envato">Envato</a></li>
                                </ul>
                                <div class="copyright">
                                    <a href="#"><img src="images/kallyas-footerlogo.svg" alt="Kallyas Template for Joomla"></a>
                                    <p>© 2014 <strong>KALLYAS Template</strong>. All Rights Reserved. Click <a href="#">here</a> to buy it.
                                        <br> Designed by <a href="#" target="_blank">HOGASH</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
