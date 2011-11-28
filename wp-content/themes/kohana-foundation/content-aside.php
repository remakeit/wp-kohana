<?php
echo Request::factory('wordpress/foundation/content/aside')->execute()->send_headers()->body();
