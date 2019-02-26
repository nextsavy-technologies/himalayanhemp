<!DOCTYPE html>
<html lang="en">

<head>
    <title>himalayanhemp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#openForm").click(function(){
                $("#myForm").animate({
                    width: "toggle"
                },500);
            });
            $("#closeForm").click(function(){
                $("#myForm").animate({
                    width: "toggle"
                },500);
            });            
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".openMenu").click(function(){
                $(".hide-menu").toggleClass("show-menu");
            });         
        });
    </script>    

</head>

<body>

    <div class="container-fluid top-navigation">
        <div class="col-md-4 col-xs-11 col-sm-11 logo-left">
            <a href="homepage" class="link-wrapper w-inline-block w--current">
                <img src="https://uploads-ssl.webflow.com/5ba2331e37b9fb3b69e9c65a/5ba7748f5ced0c6514e5a6b9_hho-logo.png" width="216" srcset="https://uploads-ssl.webflow.com/5ba2331e37b9fb3b69e9c65a/5ba7748f5ced0c6514e5a6b9_hho-logo-p-500.png 500w, https://uploads-ssl.webflow.com/5ba2331e37b9fb3b69e9c65a/5ba7748f5ced0c6514e5a6b9_hho-logo.png 1206w"
                    sizes="(max-width: 479px) 45vw, (max-width: 767px) 28vw, (max-width: 991px) 24vw, 216px">               
                </a>
            <!-- <a class="link-wrapper w-inline-block w-current">
                <button id="open" name="open">+</button>
                <button id="close" name="close">x</button>
            </a> -->
        </div>
        <div class="col-md-8 col-xs-1 col-sm-1 menu-right openMenu">
        <div data-w-id="f36043e0-9ab7-cf52-b2df-1d5a3a68926a" class="nav-icon-wrapper w-hidden-main hidden-md hidden-lg">
                    <div class="nav-icon-line rotate"></div>
                    <div class="nav-icon-line"></div>
                </div>                 
            <div class="main-menu hide-menu">
                <div class="nav-col">
                    <div class="text main">Products</div>
                    <a href="paper_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='paper_product'){echo 'active';}?>">Paper</div>
                    </a>
                    <a href="foods_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='foods_product'){echo 'active';}?>">Foods</div>
                    </a>
                    <a href="textiles_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='textiles_product'){echo 'active';}?>">Textiles</div>
                    </a>
                    <a href="medicines_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='medicines_product'){echo 'active';}?>">Medicines</div>
                    </a>
                    <a href="biofuel_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='biofuel_product'){echo 'active';}?>">Biofuel</div>
                    </a>
                    <a href="graphene_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='graphene_product'){echo 'active';}?>">Graphene</div>
                    </a>
                    <a href="fibreboard_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='fibreboard_product'){echo 'active';}?>">Fibreboard</div>
                    </a>
                    <a href="bioplastic_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='bioplastic_product'){echo 'active';}?>">BioPlastics</div>
                    </a>
                    <a href="biocement_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='biocement_product'){echo 'active';}?>">BioCement</div>
                    </a>
                    <a href="hempbiomass_product" class="text-link">
                        <div class="text sub <?php if($currentPage =='hempbiomass_product'){echo 'active';}?>">Hemp BioMass</div>
                    </a>
                </div>
                <div class="second-half">
                    <div class="nav-col">
                        <div class="text main">Projects</div>
                        <a href="project1" class="text-link">
                            <div class="text sub <?php if($currentPage =='project1'){echo 'active';}?>">Project1</div>
                        </a>
                        <a href="project2" class="text-link">
                            <div class="text sub <?php if($currentPage =='project2'){echo 'active';}?>">Project2</div>
                        </a>
                    </div>
                    <div class="nav-col">
                        <div class="text main">Propaganda</div>
                        <a href="blogs" class="text-link">
                            <div class="text sub <?php if($currentPage =='blogs'){echo 'active';}?>">Blog</div>
                        </a>
                        <a href="downloads" class="text-link">
                            <div class="text sub <?php if($currentPage =='downloads'){echo 'active';}?>">Downloads</div>
                        </a>
                    </div>
                    <div class="nav-col" style="padding-bottom: 15px;">
                        <div class="text main">Social</div>
                        <a href="/hemp-paper" class="text-link">
                            <div class="text sub">Twitter</div>
                        </a>
                        <a href="/old-home" class="text-link">
                            <div class="text sub">Facebook</div>
                        </a>
                        <a href="#" class="text-link">
                            <div class="text sub">Youtube</div>
                        </a>
                        <a href="#" class="text-link">
                            <div class="text sub">Instagram</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
