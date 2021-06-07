<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>de.tail - freelance game development</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="https://de.tail.studio/favicon2.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style10.css" />
    <link rel="stylesheet" type="text/css" href="css/style_common.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 


    <!--begin imagesteps -->
    <script type="text/javascript" language="javascript">
        window.onload = function () {
            var rotator = document.getElementById("rotator");
            var images = rotator.getElementsByTagName("img");
            for (var i = 1; i < images.length; i++) {
                images[i].style.display = "none";
            }
            var counter = 1;
            setInterval(function () {
                for (var i = 0; i < images.length; i++) {
                    images[i].style.display = "none";
                }
                images[counter].style.display = "inline-block";
                counter++;
                if (counter == images.length) {
                    counter = 0;
                }
            }, 150);
        };
    </script>


</head>

<body id="about">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <!--a class="navbar-brand" href="#about"><span style="text-transform:lowercase;"><span style="color:#F05F40;font-size:24px;">[</span>de<span style="color:#F05F40;">.</span>tail<span style="color:#F05F40;font-size:24px;">]</span></span></a-->
                <a class="navbar-brand page-scroll" href="#about"><img src="img/detail_logo.png" height="22px"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testimonials">Testimonials</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#rates">Rates</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <!--h1 id="homeHeading" class="sr-iconz" style="visible:hidden;"-->
                <h1 id="homeHeading">
                    <div id="rotator">
                    <img src="img/detail_scribble_1.png" style="display:inline-block;" />
                    <img src="img/detail_scribble_2.png" style="display:none;" />
                    <img src="img/detail_scribble_3.png" style="display:none;" />
                    <img src="img/detail_scribble_4.png" style="display:none;" />
                    <img src="img/detail_scribble_5.png" style="display:none;" />
                    <img src="img/detail_scribble_6.png" style="display:none;" />
                    <img src="img/detail_scribble_7.png" style="display:none;" />
                    </div>
                </h1>
                <hr class="sr-iconz">
                <p class="sr-iconz text-faded">de<span style="color:#F05F40;">.</span>tail has been providing premium technical game development support & Lua scripts to Visionaire Studio: Adventure Game Engine users under the guise of AFRLme since 2012.</p>
                <!--span class="sr-iconz"><a href="#services" class="btn btn-primary btn-xl page-scroll">Find Out More</a></span-->
                <span>
                <a href="https://www.facebook.com/VisionaireStudio" target="_blank" class="social-icon"><img src="img/facebook_sml.png" class="sr-iconz" height="64px" /></a>&nbsp;&nbsp;&nbsp;
                <a href="https://twitter.com/visstudio_en" target="_blank" class="social-icon"><img src="img/twitter_sml.png" class="sr-iconz" height="64px" /></a>&nbsp;&nbsp;&nbsp;
                <a href="https://discord.gg/prQJMs9" target="_blank" class="social-icon"><img src="img/discord_sml.png" class="sr-iconz" height="64px" /></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.patreon.com/AFRLme" target="_blank" class="social-icon"><img src="img/patreon_sml.png" class="sr-iconz" height="64px" /></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.twitch.tv/afrlme" target="_blank" class="social-icon"><img src="img/twitch_sml.png" class="sr-iconz" height="64px" /></a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/channel/UCrhA2M8PYZS0tEWC0VIEJ6g" target="_blank" class="social-icon"><img src="img/youtube_sml.png" class="sr-iconz" height="64px" /></a>
                </span>
            </div>
        </div>
    </header>

    <section id="services" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Stuck? Need a helping hand? Or maybe you're just after a little advice?</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <!--i class="fa fa-cog slow-spin fa-4x fa-fw text-primary sr-icons"></i-->
                        <i class="fa fa-pencil-square-o fa-4x text-primary sr-icons"></i>
                        <h3>Development</h3>
                        <p class="text-faded" style="font-size:12px;">in-editor development</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-code text-primary sr-icons"></i>
                        <h3>Scripting</h3>
                        <p class="text-faded" style="font-size:12px;">extensibility through Lua</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bug text-primary sr-icons"></i>
                        <h3>Debugging</h3>
                        <p class="text-faded" style="font-size:12px;">in-editor debugging</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-skype text-primary sr-icons"></i>
                        <h3>General Support</h3>
                        <p class="text-faded" style="font-size:12px;">one-on-one & group chat support</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="sr-icons"><img src="img/teamviewer.png" height="55px" /></i>
                        <h3>Remote Support</h3>
                        <p class="text-faded" style="font-size:12px;">remote viewing & remote access support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding bg-secondary" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">

                <div class="col-lg-3 col-sm-4">
                    <a href="http://alld-game.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/alittlelessdesperation_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/alittlelessdesperation_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://theblackcube.fr/asa.html" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/asa_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/asa_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://saintandsimon.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/asongforviggo_thumb.gif" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/asongforviggo_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="https://insertdisk22.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/bornpunk_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/bornpunk_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://theblackcube.fr/catyph.html" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/catyph_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/catyph_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://celestialpalace.net" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/celestialpalace_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/celestialpalace_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://uof7.com/minotaur" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/minotaur_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/minotaur_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://nnlgame.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/ninenoirlives_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/ninenoirlives_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://paradigmadventure.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/paradigm_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/paradigm_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://stasisgame.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/stasis_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/stasis_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://tpaoe.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/tpaoe_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/tpaoe_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://badtalestudios.com" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/underthatrain_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/underthatrain_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-4">
                    <a href="http://www.mckracken.net/cms/between-timespace-english.html" target="_blank" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/zak2_thumb.png" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <img src="img/portfolio/thumbnails/zak2_logo.png" class="img-responsive logo" />
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!--section id="portfolio" class="bg-secondary">
        <div class="container">
            <div class="row text-center">
            <i>portfolio content carousel goes here...</i>
            </div>
        </div>
    </section-->

    <section id="testimonials" class="bg-primary">
        <div class="container">

          <div class="row">
            <div class='col-md-offset-2 col-md-8 text-center'>
            <h2 class="section-heading">Praise be the almighty, er...</h2>
            <hr class="primary">
            </div>
          </div>
          <div class="row sr-button" style="visible:hidden;">
            <!--div class='col-md-offset-2 col-md-8'--><div class='col-md-10'>
              <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                <!-- Bottom Carousel Indicators -->
                <!--ol class="carousel-indicators">
                  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#quote-carousel" data-slide-to="1"></li>
                  <li data-target="#quote-carousel" data-slide-to="2"></li>
                </ol-->
        
                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">
        
                <!-- Quote 1 -->
                <div class="item active">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center">
                        <img class="img-circle" src="img/testimonials/insertdisk22_tm.png"" style="width: 100px;height:100px;">
                      </div>
                      <div class="col-sm-9">
                        <p>I contracted Lee to code a UI element for my game that was giving me some trouble. His pricing was fair, he finished the job quickly, and the results were superb.</p>
                        <small>Falko, Insert Disk 22 [Born Punk]</small>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <!-- Quote 2 -->
                <div class="item">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center">
                        <img class="img-circle" src="img/testimonials/silvernode_tm.png"" style="width: 100px;height:100px;">
                      </div>
                      <div class="col-sm-9">
                        <p>A consummate professional and extremely knowledgeable, Lee takes the guesswork and frustration out of any issue. He has been a key success factor for our project and will continue to be in the future!</p>
                        <small>William Kruger, Silvernode Studios [Nine Noir Lives]</small>
                      </div>
                    </div>
                  </blockquote>
                </div>
        
              <!-- Carousel Buttons Next/Prev -->
              <!--a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
              <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></-->
            </div>                          
          </div>
        </div>
      </div>


     <!--/div-->
    </section>

    <section class="bg-secondary" id="rates">

       <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">One man army, <i>indie</i> studio or <b>GIANT</b> corporation?</h2>
                    <hr class="primary">
                    <p class="text-faded">It's all gravy to us! If I can be of service. Great! If I don't think I can achieve what you are asking, I'll let you know <b>outright</b> rather than wasting your time; or mine.</p>
                    <!--a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a-->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                <table style="width:100%; padding:20px; border-collapse:separate; border-spacing: 0px 4px;">

                <tbody>

                <tr height="260px" class="sr-icon">
                    <td style="width:32%; visibility:hidden;" class="bg-primary sr-iconzz_left rates_td"><strong><h2>INDIE</h2></strong><br/>
                    <div class="circle" style="font-size: 24px;">€26</div><br/>Take advantage of our discounted <span style="color:#F05F40;">indie</span> development rate & have a beer on us!</td><td></td>
                    <td style="width:32%; visibility:hidden;" class="bg-primary sr-iconzz rates_td"><strong><h2>COMMERCIAL</h2></strong><br/>
                    <div class="circle" style="font-size: 24px;">€52</div><br/>Our <span style="color:#F05F40;">commercial</span> development rate is perfectly affordable by all!</td><td></td>
                    <td style="width:32%; visibility:hidden;" class="bg-primary sr-iconzz_right rates_td"><strong><h2>Flexible</h2></strong><br/>
                    <div class="circle" style="font-size: 24px;"><i class="fa fa-sliders fa-1x"></i></div><br/>Don't like our <span style="color:#F05F40;">fixed</span> rates? We also offer <span style="color:#F05F40;">flexible</span> development rates!</td>
                </tr>
            
                </tbody>

                </table>

                <div class="col-lg-12 text-center"><p style="font-size: 12px;" class="sr"><i>All rates are in €uros. Development rates are hourly. Scripting rates are x cents per character (letter/number, etc).<br/><span style="font-size:12px;"><i>For more information please enquire via our Discord server.</i></span></i></p></div>

                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="footer bg-primary">


    <div id="contactwrap"">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!--p>Feel free to contact me at any time!</p-->
                    <p>&nbsp;</p>
                    <p></p>
                    <p>
                        <small>
                        de<span style="color:#F05F40;">.</span>tail<br/>
                        Roquetas de Mar<br/>
                        Almería<br/>
                        Spain<br/>
                        <!--span>
                            <a href="https://twitter.com/visstudio_en" target="_blank" class="social-icon"><img src="img/facebook_sml.png" class="sr-iconz" height="32px" /></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://twitter.com/visstudio_en" target="_blank" class="social-icon"><img src="img/twitter_sml.png" class="sr-iconz" height="32px" /></a>&nbsp;&nbsp;&nbsp;
                            <a href="https://discord.gg/4EMSRem" target="_blank" class="social-icon"><img src="img/discord_sml.png" class="sr-iconz" height="32px" /></a>
                        </span-->
                        </small>
                    </p>
                    <p>
                        <small>
                        <!--Twitter: <a href="https://twitter.com/visstudio_en" target="_blank">VisStudio_EN</a><br/-->
                        <!--a href="https://twitter.com/visstudio_en?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @visstudio_en</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script-->
                        <!--a class="twitter-timeline" data-lang="en" data-width="344" data-height="200" data-theme="light" data-link-color="#F05F40" href="https://twitter.com/VisStudio_En?ref_src=twsrc%5Etfw">Tweets by VisStudio_En</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script-->
                        <!--div width="200px"><a href="https://www.patreon.com/bePatron?u=3263567" data-patreon-widget-type="become-patron-button">Become a Patron!</a><script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script></div-->
                        </small>
                    </p>
            
                </div>
                
                <div class="col-lg-6">

<!--form role="form" id="contactForm" class="form-horizontal" action="php/form-process.php">
<fieldset>

<!-- Prepended text>
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">Name</span>
      <input id="name" name="name" class="form-control" placeholder="Please enter your name..." type="text" required>
    </div>
  </div>
</div>

<!-- Prepended text>
<div class="form-group">
  <div class="col-md-12">
    <div class="input-group">
      <span class="input-group-addon">Email</span>
      <input id="email" name="email" class="form-control" placeholder="Please enter your email address.." type="text" required>
    </div>
    
  </div>
</div>

<!-- Select Basic >
<div class="form-group">
  <div class="col-md-12">
    <select id="subject" name="subject" class="form-control" required>
      <option value="" selected disabled>Please select a subject...</option>
      <option value="General">General</option>
      <option value="Development">Development</option>
      <option value="Scripting">Scripting</option>
      <option value="Debugging">Debugging</option>
      <option value="Support">Support</option>
      <option value="Rates">Rates</option>
    </select>
  </div>
</div>

<!-- Textarea >
<div class="form-group">
  <div class="col-md-9" style="padding-right:2px;">                     
    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." required="yes"></textarea>
  </div>
  <div class="col-md-3">
    <button type="submit" id="form-submit" class="btn btn-primary" style="height:71px; width:100%; border-radius:3px !important;">Submit</button>&nbsp;<!--span id="submit-status"></span>
    <div id="msgSubmit" class="h3 text-center hidden"></div>
    <div class="clearfix"></div>
  </div>
</div>

<!-- Button >
<!--div class="form-group">
  <div class="col-md-12">
    <button type="submit" id="form-submit" class="btn btn-primary btn-xl">Submit</button>&nbsp;<span id="submit-status"></span>
    <div id="msgSubmit" class="h3 text-center hidden"></div>
    <div class="clearfix"></div>
  </div>
</div>

</fieldset>
</form-->



<!--script type="text/javascript" src="//cdn.jsdelivr.net/discord-widget/latest/discord-widget.min.js"></script>
<script type="text/javascript">
discordWidget.init({
  serverId: '221787321987497984',
  title: 'Want to get in touch with us? Join our Discord server!',
  join: true,
  alphabetical: true,
  theme: 'dark',
  hideChannels: true,
  showAllUsers: true,
  allUsersDefaultState: true,
  showNick: true
});
discordWidget.render();
</script>

<div class="discord-widget"></div-->
<a href="https://discord.gg/prQJMs9" target="_blank" class="social-icon2"><img src="img/detail_discord.png"></a>

            </div><! --/row -->
        </div><!-- /container -->
    </div>
    </section>


    <!-- back to top button -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-2x back-to-top" role="button" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/back_to_top.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.js"></script>
    <!--script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script-->
    <script src="js/rates.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
    <script type="text/javascript" src="js/form-scripts.js"></script>
</body>

</html>
