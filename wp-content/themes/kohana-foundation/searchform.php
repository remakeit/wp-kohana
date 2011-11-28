<?php
echo Request::factory('wordpress/foundation/searchform')->execute()->send_headers()->body();
