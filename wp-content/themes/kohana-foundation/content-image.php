<?php
echo Request::factory('wordpress/foundation/content/image')->execute()->send_headers()->body();
