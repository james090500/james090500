<?php

    Namespace james090500\Controllers\Tools;

    use \james090500\Controllers\Controller;
    use xPaw\MinecraftPing;
	use xPaw\MinecraftPingException;

    class MinecraftServerQuery extends Controller {

        /**
         * Shows the home page
         * @param  Request  $request  The request
         * @param  Response $response The response
         * @param  Array    $args     Args for the page if any
         * @return Twig               The view
         */
        public static function getHome($request, $response, $args) {
            return self::render($response, 'tools/minecraft-server-query');
        }

        /**
         * Shows server query
         * @param  Request  $request  The request
         * @param  Response $response The response
         * @param  Array    $args     Args for the page if any
         * @return Twig               The view
         */
        public static function getServer($request, $response, $args) {
            $server;
            $port;

            if($request->getMethod() == "POST") {
                $server = $request->getParsedBody()['server'];
                $port = explode(":", $server);
                $port = isset($port[1]) ? $port[1] : 25565;
                return $response->withRedirect("/tools/minecraft-server-query/$server/$port", 302);
            } else {
                $server = $args['server'];
                $port = isset($args['port']) ? $args['port'] : 25565;
            }

            $query = new MinecraftPing($server, $port);

            return self::render($response, 'tools/minecraft-server-query', [
                'query' => $query->Query()
            ]);
        }
        
        /**
         * Shows server motd
         * @param  Request  $request  The request
         * @param  Response $response The response
         * @param  Array    $args     Args for the page if any
         * @return Twig               The view
         */
        public static function getServerMotd($request, $response, $args) {
            $color = array();
            $color['black'] = "000000";
            $color['dark_blue'] = "0000AA";
            $color['dark_green'] = "00AA00";
            $color['dark_aqua'] = "00AAAA";
            $color['dark_red'] = "AA0000";
            $color['dark_purple'] = "AA00AA";
            $color['gold'] = "FFAA00";
            $color['gray'] = "AAAAAA";
            $color['dark_gray'] = "555555";
            $color['blue'] = "5555FF";
            $color['green'] = "55FF55";
            $color['aqua'] = "55FFFF";
            $color['red'] = "FF5555";
            $color['light_purple'] = "FF55FF";
            $color['yellow'] = "FFFF55";
            $color['white'] = "FFFFFF";
            $color['black'] = "000000";
            $color['black'] = "000000";

            $query = new MinecraftPing("play.capecraft.net", 25565);
            $query = $query->Query();
            foreach($query['description']['extra'] as $motd) {
                
            }
        }
    }