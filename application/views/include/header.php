<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>CodeIgniter Bootstrap</title>

   <link href="<?= $this->config->base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?= $this->config->base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?= $this->config->base_url('assets/css/custom.css') ?>" rel="stylesheet">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/1.3.1/lodash.min.js"></script>
   <script src="<?= $this->config->base_url('assets/js/bootstrap.min.js') ?>"></script>
   <script src="<?= $this->config->base_url('assets/js/custom.js') ?>"></script>
    <style type="text/css">
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="<?= $this->config->base_url() ?>"><?= $this->config->config['site_title'] ?></a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    Logged in as <a href="#" class="navbar-link">Username</a>
                </p>
                <ul class="nav">
                    <li class="active"><a href="#">Авторы</a></li>
                    <li><a href="#about">Книги</a></li>
                    <li><a href="#contact">Рубрики</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>