<?php
// Safety check to see if piPass.py has corrupted settings.
if (!file_exists('/opt/PiPass/config/pipass_dashboard.json'))
{
  echo "
    <!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='utf-8'>
        <meta name='theme-color' content='#ffd777'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='PiPass Dashboard for the Raspberry Pi'>
        <meta name='author' content='Matthew Hsu'>
        <meta name='keyword' content='Nintendo, 3DS, Homepass, Raspberry, Pi, PiPass'>

        <title>PiPass Dashboard</title>
        <link rel='icon' type='image/png' href='../../assets/img/favicon.png'>

        <!-- BOOTSTRAP CORE CSS -->
        <link href='../../assets/css/bootstrap.css' rel='stylesheet'>

        <!-- EXTERNAL CSS -->
        <link href='../../assets/font-awesome/css/font-awesome.css' rel='stylesheet'/>

        <!-- CUSTOM STYLES FOR THIS TEMPLATE -->
        <link href='../../assets/css/style.css' rel='stylesheet'>
        <link href='../../assets/css/style-responsive.css' rel='stylesheet'>
      </head>

      <body>

      <section id='container' >
          <!-- HEADER START -->
          <header class='header black-bg'>
            <!-- LOGO START -->
              <a class='logo'><b>PiPass Dashboard</b></a>
            <!-- LOGO END -->
          </header>
          <!-- HEADER END -->

          <!-- MAIN CONTENT START -->
          <section id='main-content' style='margin-left: 0px;'>
            <section class='wrapper site-min-height'>
              <h3><i class='fa fa-angle-right'></i> PiPass Update</h3>
              <div class='row mt'>
                <div class='col-lg-12'>
                  <div class='showback'>
                    <p>
                      PiPass is not configured correctly. Please re-check your settings in PiPass Settings and ensure PiPass has a valid dashboard path.
                    </p>
                    <p>
                      Redirecting back to PiPass Update in 5 seconds...
                    </p>
                  </div>
                </div>
              </div>
            </section>
          </section>
          <!-- MAIN CONTENT END -->

          <!--FOOTER START-->
          <footer class='site-footer'>
              <div class='text-center'>
                  <b>'It's a me, Mario!'</b>
                  <a href='update.php#' class='go-top'>
                      <i class='fa fa-angle-up'></i>
                  </a>
              </div>
          </footer>
          <!--FOOTER END-->
      </section>

      <!-- JS PLACED AT THE END OF THE DOCUMENT SO THE PAGES LOAD FASTER -->
      <script src='../../assets/js/jquery.js'></script>
      <script src='../../assets/js/bootstrap.min.js'></script>
      <script src='../../assets/js/jquery-ui-1.9.2.custom.min.js'></script>
      <script src='../../assets/js/jquery.ui.touch-punch.min.js'></script>
      <script class='include' type='text/javascript' src='../../assets/js/jquery.dcjqaccordion.2.7.js'></script>
      <script src='../../assets/js/jquery.scrollTo.min.js'></script>
      <script src='../../assets/js/jquery.nicescroll.js' type='text/javascript'></script>

      <!--COMMON SCRIPT FOR ALL PAGES-->
      <script src='../../assets/js/common-scripts.js'></script>

      </body>
    </html>
  ";

  header("refresh:5;url=../../update_pi_pass.html");

  exit(1);
}


// update
$_GET['command'] = 'upgrade';
require('ctl.php');


  echo "
    <!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='utf-8'>
        <meta name='theme-color' content='#ffd777'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta name='description' content='PiPass Dashboard for the Raspberry Pi'>
        <meta name='author' content='Matthew Hsu'>
        <meta name='keyword' content='Nintendo, 3DS, Homepass, Raspberry, Pi, PiPass'>

        <title>PiPass Dashboard</title>
        <link rel='icon' type='image/png' href='../../assets/img/favicon.png'>

        <!-- BOOTSTRAP CORE CSS -->
        <link href='../../assets/css/bootstrap.css' rel='stylesheet'>

        <!-- EXTERNAL CSS -->
        <link href='../../assets/font-awesome/css/font-awesome.css' rel='stylesheet'/>

        <!-- CUSTOM STYLES FOR THIS TEMPLATE -->
        <link href='../../assets/css/style.css' rel='stylesheet'>
        <link href='../../assets/css/style-responsive.css' rel='stylesheet'>
      </head>

      <body>

      <section id='container' >
          <!-- HEADER START -->
          <header class='header black-bg'>
            <!-- LOGO START -->
              <a class='logo'><b>PiPass Dashboard</b></a>
            <!-- LOGO END -->
          </header>
          <!-- HEADER END -->

          <!-- MAIN CONTENT START -->
          <section id='main-content' style='margin-left: 0px;'>
            <section class='wrapper site-min-height'>
              <h3><i class='fa fa-angle-right'></i> PiPass Update</h3>
              <div class='row mt'>
                <div class='col-lg-12'>
                  <div class='showback'>
                    <p>
                      PiPass has been upgraded successfully!
                    </p>
                    <p>
                      Redirecting back to PiPass Update in 3 seconds...
                    </p>
                  </div>
                </div>
              </div>
            </section>
          </section>
          <!-- MAIN CONTENT END -->

          <!--FOOTER START-->
          <footer class='site-footer'>
              <div class='text-center'>
                  <b>'It's a me, Mario!'</b>
                  <a href='update.php#' class='go-top'>
                      <i class='fa fa-angle-up'></i>
                  </a>
              </div>
          </footer>
          <!--FOOTER END-->
      </section>

      <!-- JS PLACED AT THE END OF THE DOCUMENT SO THE PAGES LOAD FASTER -->
      <script src='../../assets/js/jquery.js'></script>
      <script src='../../assets/js/bootstrap.min.js'></script>
      <script src='../../assets/js/jquery-ui-1.9.2.custom.min.js'></script>
      <script src='../../assets/js/jquery.ui.touch-punch.min.js'></script>
      <script class='include' type='text/javascript' src='../../assets/js/jquery.dcjqaccordion.2.7.js'></script>
      <script src='../../assets/js/jquery.scrollTo.min.js'></script>
      <script src='../../assets/js/jquery.nicescroll.js' type='text/javascript'></script>

      <!--COMMON SCRIPT FOR ALL PAGES-->
      <script src='../../assets/js/common-scripts.js'></script>

      </body>
    </html>
  ";

  header("refresh:3;url=../../update_pi_pass.html");

  exit(0);
}

echo "
  <!DOCTYPE html>
  <html lang='en'>
    <head>
      <meta charset='utf-8'>
      <meta name='theme-color' content='#ffd777'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <meta name='description' content='PiPass Dashboard for the Raspberry Pi'>
      <meta name='author' content='Matthew Hsu'>
      <meta name='keyword' content='Nintendo, 3DS, Homepass, Raspberry, Pi, PiPass'>

      <title>PiPass Dashboard</title>
      <link rel='icon' type='image/png' href='../../assets/img/favicon.png'>

      <!-- BOOTSTRAP CORE CSS -->
      <link href='../../assets/css/bootstrap.css' rel='stylesheet'>

      <!-- EXTERNAL CSS -->
      <link href='../../assets/font-awesome/css/font-awesome.css' rel='stylesheet'/>

      <!-- CUSTOM STYLES FOR THIS TEMPLATE -->
      <link href='../../assets/css/style.css' rel='stylesheet'>
      <link href='../../assets/css/style-responsive.css' rel='stylesheet'>
    </head>

    <body>

    <section id='container' >
        <!-- HEADER START -->
        <header class='header black-bg'>
          <!-- LOGO START -->
            <a class='logo'><b>PiPass Dashboard</b></a>
          <!-- LOGO END -->
        </header>
        <!-- HEADER END -->

        <!-- MAIN CONTENT START -->
        <section id='main-content' style='margin-left: 0px;'>
          <section class='wrapper site-min-height'>
            <h3><i class='fa fa-angle-right'></i> PiPass Update</h3>
            <div class='row mt'>
              <div class='col-lg-12'>
                <div class='showback'>
                  <p>
                    The PiPass Dashboard could not download updates. Please check your internet connection or try again later.
                  </p>
                  <p>
                    Redirecting back to PiPass Update in 5 seconds...
                  </p>
                </div>
              </div>
            </div>
          </section>
        </section>
        <!-- MAIN CONTENT END -->

        <!--FOOTER START-->
        <footer class='site-footer'>
            <div class='text-center'>
                <b>'It's a me, Mario!'</b>
                <a href='update.php#' class='go-top'>
                    <i class='fa fa-angle-up'></i>
                </a>
            </div>
        </footer>
        <!--FOOTER END-->
    </section>

    <!-- JS PLACED AT THE END OF THE DOCUMENT SO THE PAGES LOAD FASTER -->
    <script src='../../assets/js/jquery.js'></script>
    <script src='../../assets/js/bootstrap.min.js'></script>
    <script src='../../assets/js/jquery-ui-1.9.2.custom.min.js'></script>
    <script src='../../assets/js/jquery.ui.touch-punch.min.js'></script>
    <script class='include' type='text/javascript' src='../../assets/js/jquery.dcjqaccordion.2.7.js'></script>
    <script src='../../assets/js/jquery.scrollTo.min.js'></script>
    <script src='../../assets/js/jquery.nicescroll.js' type='text/javascript'></script>

    <!--COMMON SCRIPT FOR ALL PAGES-->
    <script src='../../assets/js/common-scripts.js'></script>

    </body>
  </html>
";

header("refresh:5;url=../../update_pi_pass.html");

exit(1);
?>
