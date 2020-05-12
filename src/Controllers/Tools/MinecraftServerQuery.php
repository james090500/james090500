<?php

    Namespace james090500\Controllers\Tools;

    use \james090500\Controllers\IController;
    use \james090500\Utilities\MinecraftMessageTranslator;
    use xPaw\MinecraftPing;
    use xPaw\MinecraftPingException;
    use xPaw\MinecraftQuery;
	use xPaw\MinecraftQueryException;
    use Intervention\Image\ImageManagerStatic as Image;
    use Intervention\Image\Gd\Font;

    class MinecraftServerQuery extends IController {

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

            $serverQuery = self::contactServer($server, $port);            
            if($serverQuery != null) {
                if(!isset($serverQuery['favicon'])) {
                    $serverQuery['favicon'] = "/assets/img/tools/pack.png";
                }

                return self::render($response, 'tools/minecraft-server-query', [
                    'server' => $server,
                    'port' => $port,
                    'query' => $serverQuery
                ]);
            } else {
                return self::render($response, 'tools/minecraft-server-query', [
                    'error' => true,
                    'server' => $server,
                    'port' => $port
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
            $query = self::contactServer($args['server'], $args['port']);
            if($query == null) {
                return $response->write(0)->withHeader('Content-Type', 'image/jpg');
            }

            $background = Image::make('../Public/assets/img/tools/minecraft-server-query.jpg');
            $favicon = isset($query['favicon']) ? Image::make($query['favicon']) : Image::make('../Public/assets/img/tools/pack.png');            
            $favicon->resize(96, 96);
            $background->insert($favicon, 'top-left', 6, 6);

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
                $font->size(29);
                $font->color($msg['color']);
                $font->valign('middle');

                $font->applyToImage($background, 111 + $offset, $yPos);
                $offset += $font->getBoxSize()['width'];

                if(strpos($msg['text'], "\n") !== false || $offset >= 945) {
                    $yPos = 85;
                    $offset = new Font(substr($msg['text'], strpos($msg['text'], "\n")));
                    $offset = $offset->file(MinecraftMessageTranslator::getFont($msg))->size(29)->getBoxSize()['width'];
                }
            }

            return $response->write($background->encode('jpg'))->withHeader('Content-Type', 'image/jpg');
        }

        /**
         * 
         * 
         */
        private static function contactServer($server, $port) {
            try {
                $query = new MinecraftPing($server, $port);
                $serverQuery = $query->Query();
                $query->Close();                

                return $serverQuery;               
            } catch(MinecraftPingException $e) {
                try {
                    $query = new MinecraftQuery();
                    $query->Connect($server, $port);

                    $serverQuery = [                        
                        'version' => [
                            'name' => $query->getInfo()['Version']
                        ],
                        'players' => [
                            'online' => $query->getInfo()['Players'],
                            'max' => $query->getInfo()['MaxPlayers']
                        ],
                        'description' => $query->getInfo()['HostName']
                    ];

                    return $serverQuery;
                } catch(MinecraftQueryException $e) {
                    return null;
                }
            }
        }
    }