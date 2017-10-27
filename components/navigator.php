<nav class="navbar navbar-default navigation-clean-search">
  <div class="container">
    <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"
                                  style="color:rgb(254,238,238);font-family:Raleway, sans-serif;">Stuk in m'n Kraag</a>
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
          class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    </div>
    <div class="collapse navbar-collapse" id="navcol-1">
      <ul class="nav navbar-nav">
        <li role="presentation" style="font-family:Raleway, sans-serif;"><a href="../Slijterij/index.php"
                                                                            style="color:rgb(255,255,255);">Home </a>
        </li>
        <li role="presentation"><a href="../Slijterij/shop.php"
                                   style="color:rgb(252,252,252);font-family:Raleway, sans-serif;">Producten </a></li>
        <li role="presentation"><a href="../Slijterij/overons.php"
                                   style="color:rgb(252,254,255);font-family:Raleway, sans-serif;">Over Ons</a></li>
      </ul>
      <form class="navbar-form navbar-left" target="_self">
        <div class="form-group">
          <label class="control-label" for="search-field" style="background-color:#fffdfd;padding:7px;"><i
              class="glyphicon glyphicon-search"></i></label>
          <input class="form-control search-field" type="search" name="search" id="search-field"
                 style="padding:5px;background-color:#fcfbfb;">
        </div>
      </form>
      <?php
      if ( isset($_SESSION['user']) ) {
        var_dump($_SESSION['user']);

      } else {
        echo '<a class="btn btn-default navbar-btn navbar-right action-button" role="button" href="../Slijterij/register.php"
         style="background-color:rgb(2,2,3);font-family:Raleway, sans-serif;">Registreer </a>
      <a class="btn btn-default navbar-btn navbar-right action-button"
        role="button" href="../Slijterij/login.php"
        style="background-color:rgb(2,117,252);font-family:Raleway, sans-serif;">Login</a>';
      }

      ?>
    </div>
  </div>
</nav>

