<?php

function redirect_to( $location = NULL ) {
            echo "reached";
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}
        
?>