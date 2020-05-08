<?php

  Namespace james090500\System;

  class Settings {
    /**
     * Sets the error variables for logging
     * @return Void
     */
    public static function devMode() {
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
    }

    /**
     * Gets the clients real IP
     * @return String Returns the clients real IP
     */
    public static function getClientIP() {
      if(isset($_SERVER['CF-Connecting-IP'])) {
        return $_SERVER['CF-Connecting-IP'];
      } else {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
    }
}
