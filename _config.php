<?php
if (!class_exists('SS_Object')) class_alias('Object', 'SS_Object');
global $databaseConfig;
if (isset($databaseConfig['type'])) SearchUpdater::bind_manipulation_capture();

Deprecation::notification_version('1.0.0', 'fulltextsearch');
