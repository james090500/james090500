<?php
  Namespace james090500\Routes;

  use \james090500\Controllers\HomeController;
  use \james090500\Controllers\Tools\MinecraftServerQuery;

  class WebRoutes {

    public static function start($app) {
      //General Pages
      $app->get('/', [ HomeController::class, 'getHome' ]);

      $app->group('/tools', function($app) {
        $app->get('/minecraft-server-query', [ MinecraftServerQuery::class, 'getHome']);
        $app->post('/minecraft-server-query', [ MinecraftServerQuery::class, 'getServer']);
        $app->get('/minecraft-server-query/{server}[/{port}]', [ MinecraftServerQuery::class, 'getServer']);
        $app->get('/minecraft-server-query/{server}/{port}/motd', [ MinecraftServerQuery::class, 'getServerMotd']);
      });
    }
  }
