<?php
$params = kwp_get_params();
$params = end($params);
echo Request::factory('wordpress/foundation/category/'.$params)->execute()->send_headers()->body();
