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
                    <h2 style="margin-top: -50px;">RSVP To Our Wedding</h2>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Who's Attending?</label>
                            <div class="col-sm-8 col-md-offset-1">
                                <input class="form-control" placeholder="First &amp; Last Name(s)"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Staying Overnight?</label>
                            <div class="col-sm-8">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="Checkbox1" value="Yes">Yes</input>
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="Checkbox2" value="No">No</input>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Where?</label>
                            <div class="col-sm-8 col-sm-offset-1">
                                <input class="form-control" placeholder="Name &amp; Location"></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Pick 3 Songs You'd LIke To Hear</label>
                            <div class="col-sm-8 col-md-offset-1">
                                <input class="form-control" placeholder="Song 1"></input>
                                <br />
                                <input class="form-control" placeholder="Song 2"></input>
                                <br />
                                <input class="form-control" placeholder="Song 3"></input>
                            </div>
                        </div>
                    </form>
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
