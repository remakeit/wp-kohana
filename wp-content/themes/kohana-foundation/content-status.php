<?php
echo Request::factory('wordpress/foundation/content/status')->execute()->send_headers()->body();
