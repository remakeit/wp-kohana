<?php
echo Request::factory('wordpress/foundation/loop/attachment')->execute()->send_headers()->body();
