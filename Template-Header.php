

<head> 
    <script type="text/javascript">
    
    $(function(){
        // this will get the full URL at the address bar
        var url = window.location.href; 
      

        // passes on every "a" tag 
        $("ul.menu li").each(function() {
                // checks if its the same on the address bar
            if(url == (this.href)) { 
          $("li.menu-item.current-menu-item").removeClass(".current-menu-item");
                $(this).closest("li").addClass(".current-menu-item");
            }
        });
    });

    </script> 
</head>

<body>

<header class="site-header">
        <div class="container">
          <a href="index.php" id="branding">
            <img src="images/logo.png" width="350px" height="auto" alt="" class="logo">
          </a> <!-- #branding -->

          <div class="main-navigation">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
              <li class="menu-item"><a href="index.php">Home</a></li>
              <li class="menu-item"><a href="movie.php">Movies</a></li>
              <li class="menu-item"><a href="actor.php">Actors</a></li>
             <!-- .menu -->

              <li style="padding:10px;" class="menu-item"><form class="search_form" action="./search.php" method="post">
              <input type="text" placeholder="Search..." name="q" id="textfield">
              <button><i type="submit" class="fa fa-search" id="search"></i></button>
            </form> </li>
            </ul>
          </div> <!-- .main-navigation -->

          <div class="mobile-navigation"></div>
        </div>
      </header>

    <!-- Default snippet for navigation -->

</body>

        
    


