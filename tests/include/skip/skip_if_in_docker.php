<?php
require_once __DIR__ . '/../skipif.inc';
require_once __DIR__ . '/../config.php';

if (IS_IN_DOCKER ) {
    exit('skip because not support in docker');
}