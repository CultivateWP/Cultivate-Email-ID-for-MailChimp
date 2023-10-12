<?php
/**
 * Plugin Name: Cultivate Email ID for MailChimp
 * Plugin URI:  https://github.com/CultivateWP/Cultivate-Email-ID-for-MailChimp/
 * Description: Adds an email tracking ID to RSS feeds
 * Author:      CultivateWP
 * Author URI:  https://cultivatewp.com/
 * Version:     1.0.0
 * Text Domain: cultivate-email-id-for-mailchimp
 *
 * Cultivate Email ID for MailChimp is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Cultivate Email ID for MailChimp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Cultivate Email ID for MailChimp. If not, see <http://www.gnu.org/licenses/>.
 */

namespace CWP_Email_ID_MailChimp;

/**
 * RSS feed, add MailChimp email query string
 */
function add_email( $url ) {
	return add_query_arg( 'adt_ei', '*|EMAIL|*', $url );
}
add_filter( 'the_permalink_rss', __NAMESPACE__ . '\add_email' );