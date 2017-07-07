<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="description" content="Spotify Premium">
    <meta name="keywords" content="Spotify Premium">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Spotify Premium</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.unpacker.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.unpacker.org/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.min.css" rel="stylesheet">

</head>


<body>


<!-- Navigaton -->

    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" height="auto" width="132" class="logo" alt="Spotify">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" id="home" href="#section-cards">Premium</a>
                    </li>

                    <li>
                        <a class="page-scroll" id="video" href="#section-video">Video</a>
                    </li>

                    <li>
                        <a class="page-scroll" id="chat" href="#section-chat">Chat</a>
                    </li>

                    <li>
                        <a class="page-scroll" id="info" href="#section-info">Info</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Section-cards -->

    <div class="section-cards" id="section-cards">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
                    <h1 class="h1-cards text-center">GET YOUR <i class="fa fa-spotify fa-lg" aria-hidden="true"></i> SPOTIFY PREMIUM CODE NOW!</h1>
                    <p class="p-text-bott circular-book text-center">Choose from the gifts below to get a FREE Spotify Subscription!</p>

                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="thumbnail start-cards">
                                <img id="1-month" class="img-month img-responsive img-circle" src="img/1-month.png" alt="1 Month Code">
                                <img class="cards img-circle" src="img/orange-card.png" alt="...">

                                <div class="caption">
                                    <h3 class="price circular-book">€9.99</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="thumbnail start-cards">
                                <img class="img-month img-responsive img-circle" src="img/3-month.png" alt="3 Month Code">
                                <img class="cards" src="img/blue-card.png" alt="...">

                                <div class="caption">
                                    <h3 class="price circular-book">€29.97</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="thumbnail start-cards">
                                <img class="img-month img-responsive img-circle" src="img/6-month.png" alt="6 Month Code">
                                <img class="cards" src="img/pink-card.png" alt="...">

                                <div class="caption">
                                    <h3 class="price circular-book">€59.94</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <div class="thumbnail start-cards">
                                <img width="100" height="100" class="img-month img-responsive img-circle" src="img/12-month.png" alt="12 Month Code">
                                <img class="cards" src="img/grey-card.png" alt="...">

                                <div class="caption">
                                    <h3 class="price circular-book">€119.88</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slide-button -->

        <div class="button-down-holder">
            <div class="contaier">
                <br>
                <a class="scrol-btn" id="video-btn" href="#section-video" > <i class="fa fa-angle-double-down fa-lg" aria-hidden="true"></i></a>
            </div>
        </div>

    </div>

    <!-- Section-video -->

    <div class="section-video" id="section-video">
        <div class="container container-image-offset">
            <h1 class="h1-tutuorial text-center"><i class="fa fa-youtube-play fa-lg"></i> Video Tutorial</h1>
            <hr class="title-line-black">
            <br><br>
            <div class="row">
                <div class="col-md-8">
                    <a id="start" href="#modal-video" data-toggle="modal">
                        <div class="bw">
                            <img sizes="100vw" class="img-responsive" src="img/video-cover.jpg">
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <h3 class="h3-tutuorial">Heading video</h3>
                    <p class="p-tutorial circular-book">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.</p>

                    <h3 class="h3-tutuorial">Heading video</h3>
                    <p class="p-tutorial circular-book">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eveniet, asperiores? Veniam officiis autem incidunt ullam saepe laborum impedit iste quam, deleniti unde praesentium excepturi laudantium assumenda quisquam aperiam velit?</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section-chat -->

    <div class="section-chat" id="section-chat">
        <div class="container">
            <h1 class="h1-tutuorial text-center"><i class="fa fa-comment fa-lg"></i> Chat Section</h1>
            <hr class="title-line-black">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title chat-description"><i class="fa fa-spotify fa-lg" aria-hidden="true"></i> Say something...</h3>
                    </div>

                    <div class="panel-body panel-custom" id="scroll">

                    </div>

                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope fa-lg"></i></span>
                                    <textarea id="uComment" class="form-control"  placeholder="Enter your message here:" rows="2"></textarea>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <button id="go"  type="button"  class="btn btn-default btn-lg btn-block button-chat">Send <i class="fa fa-paper-plane-o fa-lg"></i></button>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>

    <!-- Section-info -->

    <div class="section-info" id="section-info">
        <div class="container">
            <h1 class="h1-tutuorial text-center"><i class="fa fa-info-circle fa-lg"></i> More Information</h1>
            <hr class="title-line-black">

            <br><br>

            <h3 class="h3-info">Heading video</h3>
            <p class="p-info circular-book">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.</p>

            <p class="p-info circular-book">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.</p>

            <h3 class="h3-info">Heading video</h3>
            <p class="p-info circular-book">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic eveniet, asperiores? Veniam officiis autem incidunt ullam saepe laborum impedit iste quam, deleniti unde praesentium excepturi laudantium assumenda quisquam aperiam velit?</p>

            <p class="p-info circular-book">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, cupiditate saepe excepturi! Possimus expedita officia illo dolores maiores vero sunt, eveniet magnam numquam accusantium, aperiam, molestias a ipsum placeat commodi.</p>

        </div>
    </div>

    <!-- footer -->

    <div class="footer">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <p class="text-center footer-text">© 2016 - <span class="footer-span">Site Name</span>. All rights reserved.</p>
                </div>

                <div class="col-sm-6">
                    <div class="social-holder">
                        <a class="social-btn" href="#"><i class="fa fa-facebook"></i></a>

                        <a class="social-btn" href="#"><i class="fa fa-twitter"></i></a>

                        <a class="social-btn" href="#"><i class="fa fa-google-plus"></i></a>

                        <a class="social-btn" href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal-video -->

    <div class="modal fadebs-example-modal-lg" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-video">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header-chat">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4  class="modal-title-chat"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></h4>
                </div>

                <div class="modal-body-video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <div id="player"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal-user-chat -->

    <div class="modal fadebs-example-modal-md" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="modal-chat">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header-chat">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4  class="modal-title-chat"><i class="fa fa-spotify fa-lg" aria-hidden="true"></i> Enter your Chat Username</h4>
                </div>

                <div class="modal-body-chat">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-lg"></i></span>
                                <input id="uName"  type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="col-md-6 col-md-offset-3">
                        <button id="send" type="button"  class="btn btn-default btn-lg btn-block button-chat-modal">Send <i class="fa fa-paper-plane-o fa-lg"></i></button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- modal-cards -->

    <div class="modal fadebs-example-modal-lg " id="modal-cards" tabindex="-1" role="dialog" aria-labelledby="modal-cards">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header-cards ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4  class="modal-title-chat"><i class="fa fa-spotify fa-lg" aria-hidden="true"></i> Select Your Cards</h4>
                </div>

                <div class="modal-body-cards ">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 copy">
                        </div>

                        <div class="col-xs-6 col-sm-6">
                            <p class="single-card hide-gen">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            </p>
                        </div>

                        <div id="progress">
                            <div class="loader1 hide"></div>
                        </div>

                        <div id="codes" class="text-center hide"></div>
                    </div>
                </div>


                <div class="modal-footer">
                    <div class="col-md-6 col-md-offset-3">
                        <button id="generate" type="button"  class="btn btn-default btn-lg btn-block button-chat-modal">Generate <i class="fa fa-cog fa-lg"></i></button>
                        <p class="single-card hide generating text-center" >Please wait... </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!-- modal-error -->

    <div class="modal fadebs-example-modal-lg" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="modal-cards">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header-cards">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4  class="modal-title-chat"><i class="fa fa-spotify fa-lg" aria-hidden="true"></i> </h4>
                </div>

                <div class="modal-body-cards">
                    <p class="error hide"></p>
                </div>

            </div>
        </div>
    </div>

    <!-- modal-offers -->

    <div class="modal fadebs-example-modal-lg " id="modal-offers" tabindex="-1" role="dialog" aria-labelledby="modal-cards">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header-cards ">
                    <h4  class="modal-title-chat"><i class="fa fa-spotify fa-lg" aria-hidden="true"></i> Your Card Is Ready!</h4>
                </div>

                <div class="modal-body-cards">
                    <p class="single-card text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <h3 class="single-card text-center">Code Generated:</h3>
                    <div id="code" class="text-center single-card"></div>
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <!-- change this onclick function with function from  your network. -->
                            <a onclick="alert('demo')" class="btn btn-default btn-lg btn-block button-chat-modal">Offer Button <i class="fa fa-cog fa-lg"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- JS -->

    <script>
        var tag = document.createElement('script');
          tag.src = "https://www.youtube.com/iframe_api";
          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          var player;
          function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
              height: '490',
              width: '740',
              //here you can change video url-id
              videoId: 'qWWSM3wCiKY',
              playerVars: { 'autoplay': 0, 'controls': 1 , 'iv_load_policy': 3, 'modestbranding': 1 , 'showinfo': 0 },
              events: {
                'onReady': onPlayerReady

              }
            });
          }
    </script>
     <script type="text/javascript">
            //here you can change your console messages just leave text between {}
        hack = [ "Connecting to the  server ...", "Searching for {card} card ...", "A valid {card} was found ...", "Registering Code with Database...", "Writing Code to file & Uploading...", "Waiting For User..." ];


    </script>
    <script src="https://cdn.unpacker.org/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.unpacker.org/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/youtube.min.js"></script>
    <script src="js/jquery.shuffleLetters.min.js"></script>
    <script src="js/script.min.js"></script>

</body>
</html>
