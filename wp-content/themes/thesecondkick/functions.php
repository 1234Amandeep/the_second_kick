<?php

// enqueing styles && scripts
function thesecondkick_enquing_styles()
{
	wp_enqueue_style("tailwindcss", get_template_directory_uri(). "/src/output.css", array(), "3.4.4", "all");
}
add_action("wp_enqueue_scripts", "thesecondkick_enquing_styles");