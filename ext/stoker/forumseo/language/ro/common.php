<?php
/**
 *
 * Forum SEO. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2025, Stoker, https://phpbb3bbcodes.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * @translator Georgian Iordache, https://www.phpbb.com/customise/db/author/iorg19/
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	'ACP_FORUM_SEO_DESC'				=> 'Meta descriere SEO',
	'ACP_FORUM_SEO_DESC_EXPLAIN'		=> 'Meta descriere opțională, optimizată SEO, pentru acest forum.<br>Dacă este setată, va fi folosită în viewforum în locul descrierii obișnuite a forumului.<br>(maximum 160 de caractere)',
	'ACP_FORUM_OG_ATTACHMENT'			=> 'Folosește ultima imagine atașată ca imagine Open Graph',
	'ACP_FORUM_OG_ATTACHMENT_EXPLAIN'	=> 'Dacă este activată, ultima imagine atașată la primul mesaj va fi folosită ca imagine Open Graph pentru previzualizările din rețelele sociale.<br>Dacă nu se găsește niciun atașament de tip imagine, se folosește imaginea Open Graph implicită.<br>Notă: pentru rezultate optime, imaginile ar trebui să aibă aproximativ 1200×630 de pixeli (raport 1,91:1). Alte dimensiuni pot fi decupate neplăcut de platformele sociale.',
	'ACP_FORUM_SHARE_BUTTONS'			=> 'Afișează butoane de distribuire pe rețelele sociale la mesaje',
	'ACP_FORUM_SHARE_BUTTONS_EXPLAIN'	=> 'Dacă este activată, se adaugă un buton de distribuire la fiecare mesaj din acest forum. Acesta deschide un meniu cu linkuri de distribuire către rețelele sociale și o opțiune de copiere a linkului.<br>Linkurile distribuite trimit către mesajul individual; cardul de previzualizare a linkului folosește datele Open Graph ale acestui subiect, exact ca la distribuirea subiectului în sine.',
	'INDEX_META_DESCRIPTION'			=> 'Meta descriere SEO',
	'INDEX_META_DESCRIPTION_EXPLAIN'	=> 'Meta descriere pentru pagina de index a forumului<br>(maximum 160 de caractere)',
	'TOPIC_META_DESC'					=> 'Meta descriere SEO',
	'TOPIC_META_DESC_EXPLAIN'			=> '(maximum 160 de caractere)',
	'FORUMSEO_DESC_COUNTER'				=> '%1$d / %2$d', // %1$d = current length, %2$d = max length
	'FORUMSEO_TITLE_PAGINATION'			=> 'Pagina %d', // %d = page number
	'FORUMSEO_REQUIRE_PHPBB'			=> 'Forum SEO necesită phpBB %1$s sau o versiune ulterioară. Versiunea instalată este %2$s.',
	'FORUMSEO_REQUIRE_PHP'				=> 'Forum SEO necesită PHP %1$s sau o versiune ulterioară. Versiunea instalată este %2$s.',

	// Post share buttons
	'FORUMSEO_SHARE'					=> 'Distribuie',
	'FORUMSEO_SHARE_THIS_POST'			=> 'Distribuie acest mesaj',
	'FORUMSEO_SHARE_COPY_LINK'			=> 'Copiază linkul',
	'FORUMSEO_SHARE_COPIED'				=> 'Copiat!',
	'FORUMSEO_SHARE_FACEBOOK'			=> 'Facebook',
	'FORUMSEO_SHARE_X'					=> 'X',
	'FORUMSEO_SHARE_BLUESKY'			=> 'Bluesky',
	'FORUMSEO_SHARE_LINKEDIN'			=> 'LinkedIn',
	'FORUMSEO_SHARE_REDDIT'				=> 'Reddit',
	'FORUMSEO_SHARE_PINTEREST'			=> 'Pinterest',
	'FORUMSEO_SHARE_TUMBLR'				=> 'Tumblr',
	'FORUMSEO_SHARE_WHATSAPP'			=> 'WhatsApp',
	'FORUMSEO_SHARE_EMAIL'				=> 'E-mail',
]);
