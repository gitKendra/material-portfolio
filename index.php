<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#ffc107">
    <title>Kendra Krzywicki | Portfolio</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!-- <link href="min/plugin-min.css" type="text/css" rel="stylesheet"> -->
    <!-- <link href="min/custom-min.css" type="text/css" rel="stylesheet" > -->
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<!--Navigation-->
<!-- <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">Kendra Krzywicki</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#intro">About</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#team">Technologies</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#intro">About</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#team">Technologies</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div> -->

<div class="navbar-fixed">
    <nav id="nav_f" class="default_color">
        <div class="nav-wrapper">
        <a href="#!" id="logo-container" class="brand-logo">Kendra Krzywicki</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#intro">About</a></li>
            <li><a href="#work">Work</a></li>
            <li><a href="#team">Technologies</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a class="sidenav-close" href="#intro">About</a></li>
        <li><a class="sidenav-close" href="#work">Work</a></li>
        <li><a class="sidenav-close" href="#team">Technologies</a></li>
        <li><a class="sidenav-close" href="#contact">Contact</a></li>
    </ul>

</div>       

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>I Love</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">< ... ></b>
                <b>Coding</b>
                <b>Problem-solving</b>
                <b>Developing</b>
                <b>Gaming</b>
                <b>Learning</b>
                <b>< ... /></b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> I am a <span class="span_h2">full stack </span>web developer proficient in frontend and backend technologies.
            </div>

            <div  class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="material-icons">flash_on</i>
                    <h5 class="promo-caption">Quick Study</h5>
                    <p class="light center">I am a quick study at learning and implementing new technologies.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="material-icons">group</i>
                    <h5 class="promo-caption">User Experience Focused</h5>
                    <p class="light center">I like to approach web design as a user to make easy-to-use, clean, and efficient applications.</p>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="center promo promo-example">
                    <i class="material-icons">favorite</i>
                    <h5 class="promo-caption">Problem Solver</h5>
                    <p class="light center">My love for coding comes from my passion for problem solving.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Work-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Projects </h2>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" style="padding: 30px;" src="img/project-digifriend.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">DigiFriend <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="https://digifriend.herokuapp.com/" target="_blank">View live app</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">DigiFriend <i class="mdi-navigation-close right"></i></span>
                        <p>A tool for Twitch streamers to increase interactivity with their viewers via the use of a live overlay that responds to viewer messages in chat.</p>
                        <p><a href="https://github.com/gitKendra/reactdigifriend" target="_blank">View code on Github</a></p>
                    </div>
                </div>
            </div> 
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project-showmyshows.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Show My Shows <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="https://lit-retreat-72472.herokuapp.com/" target="_blank">View live app</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Show My Shows <i class="mdi-navigation-close right"></i></span>
                        <p>Full stack app created using a MERN stack. Tracks your favorite TV shows as well as ones you want to watch. Companion app to Show Me Shows.</p>
                        <p><a href="https://github.com/gitKendra/ShowMyShows" target="_blank">View code on Github</a></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project-showmeshows.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Show Me Shows <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="https://willreed111185.github.io/GroupProjectOne/" target="_blank">View live app</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Show Me Shows <i class="mdi-navigation-close right"></i></span>
                        <p>An app to help users discover new tv shows based on genre or similar shows to a selected show.</p>
                        <p><a href="https://github.com/willreed111185/GroupProjectOne" target="_blank">View code on Github</a></p>
                    </div>
                </div>
            </div>         
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project-burger.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Eat Da Burger <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="https://eat-da-burger-retro.herokuapp.com/" target="_blank">View live app</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Eat Da Burger <i class="mdi-navigation-close right"></i></span>
                        <p>A web responsive SPA using MySQL, Node, Express, Handlebars and a homemade ORM following the MVC design pattern. Users can enter a custom burger they would like to eat. App displays burgers they can devour and burgers that have already been devoured.</p>
                        <p><a href="https://github.com/gitKendra/burger" target="_blank">View code on Github</a></p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project-hangman.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Hangman Game <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="https://gitkendra.github.io/Hangman-Game/" target="_blank">View live app</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Hangman Game <i class="mdi-navigation-close right"></i></span>
                        <p>Classic hangman game that features dynamically updated HTML powered by JavaScript using responsive web design for use on multiple devices and screen sizes.</p>
                        <p><a href="https://github.com/gitKendra/Hangman-Game" target="_blank">View code on Github</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/parallax2.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Technologies </h2>
        <div class="row">
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/html5-circle.svg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">HTML5 <br/>
                    </div>
                </div>
            </div>
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/css3-circle.svg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">CSS3 <br/>
                    </div>
                </div>
            </div>
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/js-circle.svg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">JavaScript <br/>
                    </div>
                </div>
            </div>
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/bootstrap-circle.svg" style="padding: 16px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Bootstrap <br/>
                    </div>
                </div>
            </div>
            
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/jQuery-circle.svg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">jQuery <br/>
                    </div>
                </div>
            </div>
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/github-circle-1.svg" style="padding: 10px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">GitHub <br/>
                    </div>
                </div>
            </div>       
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/react-circle.svg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">React <br/>
                    </div>
                </div>
            </div>
            <div class="col s2 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/firebase-circle.svg" style="padding: 15px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Firebase <br/>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12 pull-right">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://github.com/gitkendra" target="_blank">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/kendra-krzywicki/" target="_blank">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</footer>


    <!--  Scripts-->
    <!-- <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script> -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>

    </body>
</html>
