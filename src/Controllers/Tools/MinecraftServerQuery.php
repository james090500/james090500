<?php

    Namespace james090500\Controllers\Tools;

    use \james090500\Controllers\Controller;
    use \james090500\Utilities\MinecraftMessageTranslator;
    use xPaw\MinecraftPing;
    use xPaw\MinecraftPingException;
    use Intervention\Image\ImageManagerStatic as Image;
    use Intervention\Image\Gd\Font;

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
                $values = explode(":", $request->getParsedBody()['server']);
                $server = $values[0];
                $port = isset($values[1]) ? $values[1] : 25565;
                return $response->withRedirect("/tools/minecraft-server-query/$server/$port", 302);
            } else {
                $server = $args['server'];
                $port = isset($args['port']) ? $args['port'] : 25565;
            }

            try {
                $query = new MinecraftPing($server, $port);
                $serverQuery = $query->Query();
                $query->Close();
                
                if(!isset($serverQuery['favicon'])) {
                    $serverQuery['favicon'] = "/assets/img/tools/pack.png";
                }

                return self::render($response, 'tools/minecraft-server-query', [
                    'server' => $server,
                    'port' => $port,
                    'query' => $serverQuery
                ]);
            } catch(MinecraftPingException $e) {
                return self::render($response, 'tools/minecraft-server-query', [
                    'error' => true
                ]);
            }
        }
        
        /**
         * Shows server motd
         * @param  Request  $request  The request
         * @param  Response $response The response
         * @param  Array    $args     Args for the page if any
         * @return Twig               The view
         */
        public static function getServerMotd($request, $response, $args) {
            $query = new MinecraftPing($args['server'], 25565);
            $query = $query->Query();

            $background = Image::make('../Public/assets/img/tools/minecraft-server-query.jpg');
            if(isset($query['favicon'])) {
                $favicon = Image::make($query['favicon'])->resize(96, 96);
                $background->insert($favicon, 'top-left', 6, 6);
            }

            //Server Name
            $background->text($args['server'], 111, 9, function($font) {
                $font->file('../Public/assets/fonts/1_Minecraft-Regular.otf');
                $font->size(30);
                $font->color("#FFFFFF");
                $font->valign('top');                
            });

            //Server Players
            $offset = (strlen($query['players']['max']) - 1) * 18 + 5;
            $background->text($query['players']['online'], 830 - $offset, 9, function($font) {
                $font->file('../Public/assets/fonts/1_Minecraft-Regular.otf');
                $font->size(30);
                $font->color("#AAAAAA");
                $font->valign('top');
                $font->align('right');
            });
            
            //The Slash between the players            
            $offset = (strlen($query['players']['max']) - 1) * 18 + 2;
            $background->text("/", 848 - $offset, 9, function($font) {
                $font->file('../Public/assets/fonts/1_Minecraft-Regular.otf');
                $font->size(30);
                $font->color("#555555");
                $font->valign('top');
                $font->align('right');
            });
            
            //Server Max Players
            $background->text($query['players']['max'], 866, 9, function($font) {
                $font->file('../Public/assets/fonts/1_Minecraft-Regular.otf');
                $font->size(30);
                $font->color("#AAAAAA");
                $font->valign('top');
                $font->align('right');
            });

            //Server MOTD

            $motd = MinecraftMessageTranslator::translateMotd($query['description']);
            $offset = 0;
            $yPos = 55;
            foreach($motd as $msg) {
                $font = new Font(str_replace("\n", "", $msg['text']));
                $font->file(MinecraftMessageTranslator::getFont($msg));
                $font->size(30);
                $font->color($msg['color']);
                $font->valign('middle');

                $font->applyToImage($background, 100 + $offset, $yPos);
                $offset += $font->getBoxSize()['width'];

                if(isset($msg['special'])) {
                    error_log($msg['text'] . " " . $offset . " " . $yPos);
                }

                if(strpos($msg['text'], "\n") !== false) {
                    $yPos = 85;
                    $offset = new Font(substr($msg['text'], strpos($msg['text'], "\n")));
                    $offset = $offset->file(MinecraftMessageTranslator::getFont($msg))->size(30)->getBoxSize()['width'];
                }
            }

            return $response->write($background->encode('jpg'))->withHeader('Content-Type', 'image/jpg');
        }
    }