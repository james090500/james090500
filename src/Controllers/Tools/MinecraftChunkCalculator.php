<?php

    Namespace james090500\Controllers\Tools;

    use \james090500\Controllers\IController;

    class MinecraftChunkCalculator extends IController {

        /**
         * Shows the chunk page
         * @param  Request  $request  The request
         * @param  Response $response The response
         * @param  Array    $args     Args for the page if any
         * @return Twig               The view
         */
        public static function getHome($request, $response, $args) {
            return self::render($response, 'tools/minecraft-chunk-calculator');
        }

    }