<?php

//mvc path for default libs or any other paths 
function mvc_get_template_dir($path = 'libs'){
	return get_template_directory_uri()."/$path";
}
