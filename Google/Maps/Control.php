<?php

/*
 * Google_Maps_Control
 *
 * Copyright (c) 2008 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/projects/google_maps
 *
 * Revision: $Id: Maps.php 183 2008-09-26 14:49:55Z tuupola $
 *
 */
 
require_once __DIR__.'/Overload.php';
require_once __DIR__.'/Coordinate.php';
require_once __DIR__.'/Point.php';
require_once __DIR__.'/Marker.php';
require_once __DIR__.'/Path.php';

class Google_Maps_Control extends Google_Maps_Overload {
        
    public static function create($type, $params = array()) {
        $class_name = 'Google_Maps_Control_' . ucfirst($type);
        $file_name  = str_replace('_', DIRECTORY_SEPARATOR, $class_name).'.php';
        require_once $file_name;
        return new $class_name($params);
    }
    
}