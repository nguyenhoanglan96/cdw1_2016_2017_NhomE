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
        $less->compileFile('less/type-e-633.less', 'css/type-e-633.css');
        ?>
        <link href="css/type-e-633.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-e-633 ">
            <footer>
                <div class="container content_wrap">
                    <div class="row">
                        <div class="columns_wrap">
                            <div  class="col-md-4">                        
                                    <div class="logo">
                                        <a href="#"><img src="images/footer-icon.png">
                                            <h2>Albertino</h2>
                                            <h6>science research</h6>
                                        </a>
                                    </div>
                                    <p >We are a science international healthcare company. We do researches and develop a wide range of innovative products.</p>
                               
                            </div>
                            <div class="col-md-4 Contact ">
                                 <h5>Contact Us</h5>
                                    <div class="margin-bottom">
                                        <h4>8500 Lorem Ipsum Street</h4>
                                        <h4>Chicago, IL 55030</h4>
                                        <h4>info@yoursite.com</h4>
                                    </div>
                                    <div class="margin-bottom">
                                        <h4>Tel: (800) 456-7890</h4>
                                        <h4>Fax: (800) 456-7891</h4>
                                    </div>
                                        <ul>
                                            <li><a href="#">Email us</a></li>
                                            <li><a href="#">More SCIENCE LAB contacts</a></li>
                                            <li><a href="#">Investor Relations</a></li>
                                        </ul>
                            </div>
                            <div class="col-md-4 Contact">
                                    <h5>Follow Us</h5>
                                    <div class="sc_socials_item">
                                        <a href="#" ><img src="images/icon-t.png"></a>
                                         <a href="#" ><img src="images/icon-f.png"></a>
                                         <a href="#" ><img src="images/icon-g.png"></a>
                                         <a href="#"  ><img src="images/icon-w.png"></a>
                                    </div> 
                                    <h5>Menu</h5>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Research</a></li>
                                        <li><a href="#">Publications</a></li>
                                        <li><a href="#">News</a></li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                    
                        <div class="border" style="margin-left: 20px;">
                       <div class="copyright_text">
                           Ancora © 2016 All Rights Reserved
                           <a href="#">Terms of Use</a>
                            and 
                           <a href="#">Privacy Policy</a>
                       </div>
                    </div>
                   
                </div>  
            </footer>
        </div><!--End-Footer-->
    </body>
</html>