<?php
echo Request::factory('wordpress/foundation/content/quote')->execute()->send_headers()->body();
