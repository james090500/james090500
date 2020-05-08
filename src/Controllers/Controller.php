<?php

  Namespace james090500\Controllers;

  abstract class Controller {

    private static $app;
    public static $db;

    /**
     * Create instance of the controller so it doesn't get remade every time it's extended
     * @param  App $app The Slim App
     * @return Void
     */
    public static function createInstance($app) {
      self::$app = $app;
      self::$db = $app->getContainer()->get('database');
    }

    /**
     * Gets the view from the Slim Container
     * @return Twig The Twig Template Engine
     */
    public static function getView() {
      return self::$app->getContainer()->get('view');
    }

    /**
     * Makes the render function a little less repative
     * @param  Response $response The Response
     * @param  String $page       The .twig in /Pages/
     * @param  array  $args       Optional args
     * @return Twig               The rendered response
     */
    public static function render($response, $page, $args = []) {
      return self::getView()->render($response, "Pages/$page.twig", $args);
    }
  }
