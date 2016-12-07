<?php
	$connection = mysqli_connect("localhost", "root", "", "turismo");
	if (!$connection) {
        return http_response_code(500);
	}
