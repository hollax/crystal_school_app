<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" type="text/css"/>
</head>
<body>

    <div class="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                   <?php echo $action_view ?>

                </div>
                <div class="col-md-4">
                    <h1>Side Links</h1>
                    <ul class="list-unstyled">
                        <li><a href=" <?php echo site_url('welcome/login') ?>">Login</a></li>
                        <li><a href=" <?php echo site_url('welcome/register') ?>">Register</a></li>
                    </ul>
                </div>

            </div>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
