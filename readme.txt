=== Ubuntu gzopen() / gzopen64() Fix ===
Contributors: twykr
Tags: linux, ubuntu, 14.04, LTS, gzopen, gzopen64, fix, patch
Requires at least: 4.0
Tested up to: 5.1
Stable tag: 1.0.2
License: GPLv2

== Description ==
Fixes support for "gzopen()" calls on Ubuntu 14.04 LTS


== FINAL UPDATE: April 2019 ==
This plugin is now deprecated and will no longer be maintained, since Ubuntu 14.04 LTS is no longer supported (without paying Canonical for extra support - in that case, you're on your own).  I will leave this plugin in the repository for now, just in case someone still wants to use it - but will be removing it later this year sometime, to keep things clean.
==============================


== UPDATE :: April 2016 == 
This plugin is no longer required for users of Ubuntu 16.04 LTS or higher.  The PHP developers have incorporated a patch fix at the PHP-level (https://bugs.launchpad.net/php/+bug/1315888).  I plan to keep this plugin available and maintained until Ubuntu 14.04 LTS reaches it's End of Life (April 2019), or until a patch fix has been personally confirmed for Ubuntu 14.04.
==========================

Some of the latest versions of Ubuntu (most notably 14.04 LTS) have implemented a 64-bit version of the gzopen() function, to better handle large files. Unfortunately, the Ubuntu developers have also renamed the file with no backwards-compatibility to "gzopen64()".  This means that all of the gzopen() calls in Wordpress (and related plugins) fail, such as used in Updraft Plus.

This plugin is meant to fix that, with a simple translator function call to pass gzopen() calls to gzopen64(), and lets you solve the issue without having to add this adjustment to your theme files constantly.

Should only take effect when the standard gzopen() function is not available.


== Installation ==

1. Upload folder `ubuntu-gzopen64-fix` in Wordpress plugin directory `/wp-content/plugins/`.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Move on with your life!

== Changelog ==

= 1.0 =
* Intial release
