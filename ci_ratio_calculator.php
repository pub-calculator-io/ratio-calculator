<?php
/*
Plugin Name: CI Ratio calculator
Plugin URI: https://www.calculator.io/ratio-calculator/
Description: The ratio calculator simplifies ratios by bringing ratios to the lowest terms. Finds missing values in proportions and compares two given ratios finding if they are equal.
Version: 1.0.0
Author: Ratio Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_ratio_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Ratio Calculator by www.calculator.io";

function display_calcio_ci_ratio_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Ratio Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_ratio_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_ratio_calculator', 'display_calcio_ci_ratio_calculator' );