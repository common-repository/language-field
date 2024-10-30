=== Language Field ===
Contributors: theode
Tags: multilingual,language,languages,translation
Requires at least: 3.0
Tested up to: 5.6.1
Stable tag: 0.9
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

If you don't need a full multilingual plugin, but have single articles in a different language.

== Description ==

Did you ever struggle with more than one language on a WordPress blog?
In a world of globalization those struggles reach me very often.

This plugin has the ability to store language codes the in post meta data to have articles with different languages on the same page. This might be interesting for blogs who only need sometimes a different language.

One of those is the following case:
The boss is writing articles in english but its a german company and needs some articles in german too.
But the second language articles are unique and not only translations.

You maybe think that would be quite simple using WPML. But what are you doing if you need both languages on the start page?
For this special case, we wrote a plugin, which is able to show all languages on the home page and manipulates the query if some language is chosen.
It also makes a difference in terms of SEO as it changes the line

&lt;html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-EN"&gt;

according to your language.

For a real working experience you can use it in combination with the [no function language widget](http://wordpress.org/extend/plugins/no-function-language-widget/ "no function language widget").


== Installation ==

1. Upload 'language-field-plugin' folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to Settings -> Language Field and start adding your languages.

== Frequently asked questions ==

= Where can I read more? =
http://www.wp-plugin-dev.com/the-language-field-plugin/

= Where can I get support? =
Contact us at http://www.wp-plugin-dev.com/support-contact/

== Screenshots ==

1. The Language Metabox
2. Add Languages in backend

== Changelog ==

= 0.9 =  Bugfixes for future versions
= 0.7 =  Initial release