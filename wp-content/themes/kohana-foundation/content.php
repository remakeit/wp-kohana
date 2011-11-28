<?php
echo Request::factory('wordpress/foundation/content')->execute()->send_headers()->body();
