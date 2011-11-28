<?php
$params = kwp_get_params();
$params = end($params);
echo Request::factory('wordpress/foundation/tag/'.$params)->execute()->send_headers()->body();
