<?php

  Namespace james090500;

  use \james090500\Controllers\IController;
  use \james090500\System\Settings;
  use \james090500\Routes\WebRoutes;
  use \james090500\System\Database;
  use \Dotenv\Dotenv;
  use \Slim\Views\Twig;
  use \Slim\Views\TwigExtension;
  use \Slim\Views\TwigMiddleware;
  use \Slim\Factory\AppFactory;
  use \DI\Container;
  use \Psr\Http\Message\ServerRequestInterface as Request;
  use \Psr\Http\Message\ResponseInterface as Response;

  require '../../vendor/autoload.php';

  class james090500 {
    /**
     * Loads all the important essential variables
     * @return Void
     */
    private function loadEssentials() {
      //Start session, set time and autoloader
      session_start();
      date_default_timezone_set('UTC');
      spl_autoload_register('self::classAutoloader');

      //Load .env
      if(!file_exists('../.env')) {
        if(!copy('../.env.example', '../.env')) {
          die("Couldn't copy .env.example, probably a permission issue");
        }
      }

      $dotenv = Dotenv::createImmutable(__DIR__, '../.env');
      $dotenv->load();

      //Set Dev mode
      if(getenv('DEV_MODE')) {
        Settings::devMode();
      }
    }

    /**
     * This will require a class automatically
     * @param  Class $class The needed class
     */
    private static function classAutoloader($class) {
      if(strpos($class, "james090500") !== false) {
        $class = str_replace("james090500\\", "", $class);
        $class = str_replace("\\", "/", $class);
        $class = "../".$class.".php";
        require_once($class);
      }
    }

    /**
     * Starts the james090500 API Service
     * @return Void
     */
    public static function start() {
      //Load Essential variables
      self::loadEssentials();

      //Create Container
      $container = new Container();
      AppFactory::setContainer($container);

      //Create Cache
      if(!is_dir('../View/Cache')) {
        if(!mkdir('../View/Cache')) {
          die("Couldn't create Cache directory");
        }
      }

      //Set view in Container
      $container->set('view', function() {
          return new Twig('../View', [
            'displayErrorDetails' => getenv('DEV_MODE'),
            'debug' => getenv('DEV_MODE'),
            'cache' => '../View/Cache'
          ]);
      });

      //Set the database in container
      $container->set('database', function () {
        return Database::getDatabase();
      });

      //Create App
      $app = AppFactory::create();

      //Add some twig middleware
      $app->add(TwigMiddleware::createFromContainer($app));
      $app->add($app->addErrorMiddleware(true, true, true));

      //If member session exists sign in
      if(isset($_SESSION['MEMBER'])) {
        $view->getEnvironment()->addGlobal('user', $_SESSION['MEMBER']);
      }

      //Start an instance of controller and routing
      IController::createInstance($app);
      WebRoutes::start($app);

      //Start the app
      $app->run();
    }
  }

  /**
   * Starts Everything
   * @var james090500
   */
  james090500::start();
