<?php
echo Request::factory('wordpress/foundation/loop/single')->execute()->send_headers()->body();
