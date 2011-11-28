<?php
$params = kwp_get_params();
$params = implode('/', $params);
echo Request::factory('wordpress/foundation/page/'.$params)->execute()->send_headers()->body();