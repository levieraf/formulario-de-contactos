<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>

    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
		<?= stylesheet_tag('assets/bootstrap.css') ?>
		<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      .separadorItemColumna{
        float: left;
        padding-right: 25px;
      }
    </style>
    <?= stylesheet_tag('assets/bootstrap-responsive.css') ?>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?= javascript_include_tag("jquery-1.8.0.js") ?>
    <?= javascript_include_tag("layout.js") ?>
  </head>
  <body>
    <div class="container">
      <?php echo $sf_content ?> 
    <hr>
    <footer>
      <p></p>
    </footer>
    </div><!--/.container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?= javascript_include_tag("assets/jquery.js") ?>
	<?= javascript_include_tag("assets/bootstrap-transition.js") ?>
	<?= javascript_include_tag("assets/bootstrap-alert.js") ?>
	<?= javascript_include_tag("assets/bootstrap-modal.js") ?>
	<?= javascript_include_tag("assets/bootstrap-dropdown.js") ?>
	<?= javascript_include_tag("assets/bootstrap-scrollspy.js") ?>
	<?= javascript_include_tag("assets/bootstrap-tab.js") ?>
	<?= javascript_include_tag("assets/bootstrap-tooltip.js") ?>
	<?= javascript_include_tag("assets/bootstrap-popover.js") ?>
	<?= javascript_include_tag("assets/bootstrap-button.js") ?>
	<?= javascript_include_tag("assets/bootstrap-collapse.js") ?>
	<?= javascript_include_tag("assets/bootstrap-carousel.js") ?>
	<?= javascript_include_tag("assets/bootstrap-typeahead.js") ?>
  </body>
</html>
