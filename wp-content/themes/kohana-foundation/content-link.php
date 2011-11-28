<?php
echo Request::factory('wordpress/foundation/content/link')->execute()->send_headers()->body();
