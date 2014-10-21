<?php include_once('site/header.php'); ?>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"></h3>
              <ul class="nav masthead-nav">
                <li><a href="index.php">Wedding</a></li>
                <li><a href="bridal.php">Bridal Party</a></li>
                <li><a href="lodging.php">Location</a></li>
                <li><a href="attire.php">Attire</a></li>
                <li><a href="registry.php">Registry</a></li>
                <li class="active"><a href="rsvp.php">RSVP</a></li>
                <li><a href="mailto:adam@adamjolicoeur.com?subject=Adam and Mo's Wedding">Contact Us</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
                <div class="col-sm-12">
                    <div class="row">
                      <div class="col-md-8">
                        <h1>RSVP</h1>
                        <h2>Log In using the information provided to RSVP</h2>
                        <p>If you have any questions, can't log in, or would prefer to RSVP through email or phone, do not hesitate to contact us!</p>
                      </div>
                      <div class="col-md-4">
                        <img src="img/AdamMo.jpg" alt="#" class="img-circle img-headshot">
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                          <form class="form-horizontal" role="form">
                              <div class="form-group">
                                  <div class="col-sm-6 col-sm-offset-3">
                                      <input type="text" class="form-control" id="mori" placeholder="Name">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-6 col-sm-offset-3">
                                      <input type="password" class="form-control" id="password" placeholder="Password">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-sm-offset-3 col-sm-6">
                                      <a href="rsvp-form.php"><button type="button" class="btn btn-primary btn-lg">Sign In</button></a>
                                  </div>
                              </div>
                          </form>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div><!--/span-->
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>© Adam J. Jolicoeur 2014</p>
            </div>
          </div>

        </div>

      </div>

    </div>

<?php include_once('site/footer.php'); ?>
