<?php
echo Request::factory('wordpress/foundation/content/single')->execute()->send_headers()->body();
