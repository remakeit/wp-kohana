<?php
echo Request::factory('wordpress/foundation/content/intro')->execute()->send_headers()->body();
