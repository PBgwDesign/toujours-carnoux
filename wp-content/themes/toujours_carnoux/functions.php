<?php
// Theme's setup & depedencies
require 'functions/hook-theme-setup.php';
require 'functions/hook-enqueue-scripts.php';
require 'functions/hook-enqueue-styles.php';
require 'functions/class-bootstrap5-nav-walker.php';
require 'functions/class-vertical-page-walker.php';
require 'functions/function_rename_post_label.php';

// Theme's ACF, custom post types & other setup
require 'functions/hook-custom-post-type.php';
require 'functions/hook-custom-taxonomy.php';
require 'functions/hook-tinymce-shortcodes.php';
require 'functions/hook-load-acf-buttons-menu-fields.php';
require 'functions/hook-theme-colors.php';
require 'functions/hook-custom-wysiwyg-tools.php';

// Custom functions
require 'functions/function_get_blog_category_list.php';
require 'functions/function-bootstrap5-pagination.php';
require 'functions/function-bootstrap5-yoast-breadcrumb.php';
require 'functions/function-custom-excerpt.php';
require 'functions/function-encode-email.php';
require 'functions/function-get-image-alt.php';
require 'functions/function-get-primary-category.php';
require "functions/function-get-summary.php";
require 'functions/function-phone-format.php';
require 'functions/function-reading-time.php';