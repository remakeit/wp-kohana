<?php
echo Request::factory('wordpress/foundation/sidebar/page')->execute()->send_headers()->body();
