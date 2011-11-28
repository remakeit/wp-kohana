<?php
echo Request::factory('wordpress/foundation/content/featured')->execute()->send_headers()->body();
