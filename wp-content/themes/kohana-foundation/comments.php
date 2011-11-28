<?php
echo Request::factory('wordpress/foundation/comments')->execute()->send_headers()->body();
