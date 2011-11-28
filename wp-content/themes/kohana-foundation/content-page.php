<?php
echo Request::factory('wordpress/foundation/content/page')->execute()->send_headers()->body();
