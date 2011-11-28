<?php
echo Request::factory('wordpress/foundation/content/gallery')->execute()->send_headers()->body();
