<?php
  Namespace james090500\Routes;

  use \james090500\Controllers\HomeController;

  class WebRoutes {

    public static function start($app) {
      //General Pages
      $app->get('/', [ HomeController::class, 'getHome' ]);
    }
  }
