<?php
    Namespace james090500\Utilities;

    class MinecraftMessageTranslator {

        public static function translateMessage($message) {
            $motd = array();
            
            $messages = preg_split('/(\xA7[a-zA-Z0-9])/u', $message, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

            $color = self::getColorByName("black");
            foreach($messages as $msg) {                
                if(strpos($msg, "§") !== false) {
                    $newColor = self::getColorByCode($msg);
                    if($newColor != null) {
                        $color = $newColor;
                    }
                } else {
                    $motd[] = [
                        'color' => $color,
                        'text' => $msg
                    ];
                }
            }

            return $motd;
        }

        private static function getText($msg) {
            return $msg;
        }

        private static function getColorByCode($colorCode) {
            $colorCode = str_replace("§", "", $colorCode);

            $color = array();
            $color['0'] = "#000000";
            $color['1'] = "#0000AA";
            $color['2'] = "#00AA00";
            $color['3'] = "#00AAAA";
            $color['4'] = "#AA0000";
            $color['5'] = "#AA00AA";
            $color['6'] = "#FFAA00";
            $color['7'] = "#AAAAAA";
            $color['8'] = "#555555";
            $color['9'] = "#5555FF";
            $color['a'] = "#55FF55";
            $color['b'] = "#55FFFF";
            $color['c'] = "#FF5555";
            $color['d'] = "#FF55FF";
            $color['e'] = "#FFFF55";
            $color['f'] = "#FFFFFF";
            
            if(!isset($color[$colorCode])) {
                return null;
            }

            return $color[$colorCode];
        }

        private static function getColorByName($colourName) {
            $color = array();
            $color['black'] = "#000000";
            $color['dark_blue'] = "#0000AA";
            $color['dark_green'] = "#00AA00";
            $color['dark_aqua'] = "#00AAAA";
            $color['dark_red'] = "#AA0000";
            $color['dark_purple'] = "#AA00AA";
            $color['gold'] = "#FFAA00";
            $color['gray'] = "#AAAAAA";
            $color['dark_gray'] = "#555555";
            $color['blue'] = "#5555FF";
            $color['green'] = "#55FF55";
            $color['aqua'] = "#55FFFF";
            $color['red'] = "#FF5555";
            $color['light_purple'] = "#FF55FF";
            $color['yellow'] = "#FFFF55";
            $color['white'] = "#FFFFFF";

            return $color[$colourName];
        }

    }