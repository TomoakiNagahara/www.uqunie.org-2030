<?php
/**	op-skeleton-2030:/asset/config/admin.php
 *
 * @created    2020-07-13
 * @license    Apache-2.0
 * @package    op-skeleton-2030
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
$ip   = '';
$list = [
	'153.189.161.72', // antendo
];

//	Check if the IP address is in the list of allowed IPs.
if( isset($_SERVER['HTTP_CF_CONNECTING_IP']) ){
if( array_search( $_SERVER['HTTP_CF_CONNECTING_IP'], $list ) !== false ){
	$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
}
}

/**	Return array of admin settings.
 *
 * @return array
 */
return [

	//	Access from this IP address enables developer mode.
	OP::_ADMIN_IP_   => $ip,

	//	Error messages will be sent to this email address.
	OP::_ADMIN_MAIL_ => 'info@onepiece-framework.com',

	//	This email address will be used as the "From" address.
	OP::_ADMIN_FROM_ => 'noreply@onepiece-framework.com',

];
