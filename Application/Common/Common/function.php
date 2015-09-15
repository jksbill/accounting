<?php
	function show_tip ($status, $url, $tip) {
    	session('status', $status);
    	// var_dump(strpos('?', $url));die;

    	redirect($url . '?tip=' . $tip);
	}