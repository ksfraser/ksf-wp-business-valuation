<?php
/**
 * Business Valuation Manager — WordPress UI for Ksfraser\BusinessValuation.
 * @package Ksfraser\WP\BusinessValuation
 * Plugin Name: Business Valuation Manager
 * Description: WordPress UI for KSF Business Valuation calculations.
 * Version: 1.0.0
 * Author: Kevin Fraser
 */
namespace Ksfraser\WP\BusinessValuation;
function render_plan( int $debtor_no ): string {
    return sprintf( '<div class="ksf-business_valuation-plan" data-debtor="%d">Business Valuation plan loading…</div>', $debtor_no );
}
add_shortcode( 'ksf_business_valuation_plan', static function ( $atts ) {
    $atts = shortcode_atts( [ 'debtor' => 0 ], $atts, 'ksf_business_valuation_plan' );
    return render_plan( (int) $atts['debtor'] );
} );
