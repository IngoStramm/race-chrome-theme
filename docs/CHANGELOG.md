## Changelog ##

#### v2.2.8 - 01/09/2015 ####
- Added metabox in terms page #318 #319 
- Added Post Status class #310 
- Improved indentation text-domain #343 
- Added file .ftppass in FTP-deploy and rsync #339
- Removed default favicon if has custom #338
- Fixed variable name #338 
- Fixed images list when deleted plupload gallery #334 
- Improved `race_chrome_get_url` return #332 
- Added WC condition #331 
- Added Bootstrap styled in comments form #327
- Improved comments form #324 
- Fixed parameter name in `race_chrome_get_term_meta` #323 
- Fixed indentation in `header.php` #322
- Fixed bug file upload #321 
- Fixed .gitignore #315
- Added placeholder post without thumb #313 
- Fixed tags WC #309 
- Fixed indentation in `class-metabox.php` #308 
- Improved function `race_chrome_breadcrumbs()` #307

#### v2.2.7 - 26/06/2015 ####
* Updated dependencies package.json.
* Added option disable emoji's since version 4.2.2 WordPress.
* Updated Boostrap to version 3.3.5.
* Added sidebar() in image.php.
* Attached a footer to the bottom of the viewport when the content is shorter than it.
* Improved semantic theme.
* Added skip navigation for better accessibility.
* Improved SASS and fixed style WordPress.
* Moved files markdown to diretory docs/
* Moved file .jshintrc to diretory assets/js/
* Tested with WordPress 4.4.2.

#### v2.2.6 - 26/06/2014 ####

* Improved the race_chrome_breadcrumbs() to works better with custom post type and taxonomies.
* Added support to "multiple" attribute in select in all core classes.
* Improved the Odin_Metabox to work with one or more post types.
* Fixed the `title` and `separator` elements in core classes.
* Updated the Bootstrap to 2.2

#### v2.2.5 - 13/05/2014 ####

* Tested with WordPress 3.9.
* Added Odin_User_Meta class.
* Added ability to attach files using Odin_Contact_Form.
* Improved the image upload field.
* Improved the image plupload field.
* Improved the breadcrumbs.
* Improved the race_chrome_pagination().

#### v2.2.3 - 31/01/2014 ####

* Updated the Bootstrap to version 3.1.0.

#### v2.2.2 - 28/12/2013 ####

* Modified the bootstrap sass mirror to the official version.
* Updated the Grunt dependencies.

#### v2.2.1 - 12/12/2013 ####

* Updated the Bootstrap to version 3.0.3.
* Fixed WordPress logo to version 3.8.
* Added new Race Chrome logo.

#### v2.2.0 - 12/12/2013 ####

* Improved the templates in favor the Twenty Fourteen standards.
* Tested with WordPress 3.8.
* Improved the functions to be able to be a parent theme.
* Updated the FitVidsJS.
* Removed bxSlider lib.
* Remove jQuery Validation in favor to [PowerComment plugin](http://wordpress.org/plugins/powercomment/).

#### v2.1.5 - 17/11/2013 ####

* Fixed the `process` method in `Odin_Thumbnail_Resizer`
* Fixed the thumbnail creation in `race_chrome_related_posts_custom_thumbnails()` function.
* Improved the `race_chrome_related_posts()` function.

#### v2.1.4 - 15/11/2013 ####

* Fixed new PHP code standards.
* Fixed new JavaScript code standards.
* Added `Odin_Thumbnail_Resizer` class.
* Removed old `thumbnail.php` file.
* Created a new `race_chrome_thumbnail()` function with `Odin_Thumbnail_Resizer` class.

#### v2.1.3 - 10/11/2013 ####

* Updated the Boostrap to version 3.0.2.

#### v2.1.2 - 31/10/2013 ####

* Updated the Bootstrap to version 3.0.1.
* Updated the Bootstrap Menu Walker.
* Fixed the admin logo for MP6.
* Added attributes to edit the rows and cols for textarea in all core classes.

#### v2.1.1 - 18/10/2013 ####

* Improved the gmap shortcode.
* Added `$class` param to `race_chrome_thumbnail` function.
* Fixed the bxSlider enqueue script.
* Added dinamic attributes cols and rows for textarea in `Odin_Metabox` class.
* Improved the variables in `Odin_Post_Form` class.
* Added support to mp6 admin theme.
* Updated the Bootstrap menu walker.
* Removed the `force` param in grunt compass task.
* Updated the grunt packages.
* Fixed the Race Chrome URL in `footer.php`.
* Fixed the Custom login styles logo in `inc/assets/css/custom-admin.css`.

#### v2.1.0 - 29/09/2013 ####

* Added `Odin_Shortcodes` class.
* Added $name in `race_chrome_save_metabox_*` filter in `Odin_Metabox` class.
* Addded `race_chrome_front_end_form_redirect_*` in `Odin_Front_End_Form` class.
* Added `separator` field type in `Odin_Metabox` class.
* Added `race_chrome_metabox_container_before_*` filter in `Odin_Metabox` class.
* Added `race_chrome_metabox_wrap_before_*` filter in `Odin_Metabox` class.
* Added `race_chrome_metabox_field_title_*` filter in `Odin_Metabox` class.
* Added `race_chrome_metabox_field_before_*` filter in `Odin_Metabox` class.
* Added `race_chrome_metabox_field_after_*` filter in `Odin_Metabox` class.
* Added `race_chrome_metabox_wrap_after_*` filter in `Odin_Metabox` class.
* Added `race_chrome_metabox_container_after_*` filter in `Odin_Metabox` class.
* Fixed select field in `Odin_Metabox` class and `Odin_Theme_Options` class.
* Added id in fieldset in `Odin_Front_End_Form` class.

#### v2.0.0 - 16/09/2013 ####

* Changed attrs to attributes in `Odin_Metabox` fields options.
* Changed name to label in `Odin_Metabox` fields options.
* Refactored the `Odin_Theme_Options` class.
* Added `Odin_Front_End_Form` abstract class.
* Added `Odin_Contact_Form` class.
* Added `Odin_Post_Form` class.
* Removed `hgroup`s.
* Fixed select mutiple fields in `Odin_Metabox` and `Odin_Theme_Options`.

#### v1.9.0 - 30/08/2013 ####

* Updated sass-bootstrap.
* Created grunt compress task.
* Fixed Bootstrap support to WooCommerce and Jigoshop.
* Improved the templates inline documentation.
* Created a editor-style.css file.
* Improved the scss files.
* Added param attr to insert attributes in metabox fields.
* Removed attachment.php.
* Added audio.php.
* Added image.php.
* Added video.php.
* Added styles to force video shortcode to be responsive.
* Fixed the $icon-font-path.

#### v1.8.1 - 23/08/2013 ####

* Fixed image max size.
* Fixed word-wrap for .hentry.
* Fixed galleries styles.
* Fixed wp-caption styles.

#### v1.8.0 - 21/08/2013 ####

* Added .editorconfig file.
* Improved the Gruntfile.js.
* Improved the .gitignore.
* Added .jshintrc.
* Added Bootstrap 3.0.
* Removed Colorbox, Socialite.js, LazyLoad and PhotoSwipe from Race Chrome's core.

#### v1.7.2 - 02/08/2013 ####

* Improved the Core JavaScript.

#### v1.7.1 - 01/08/2013 ####

* Fixed `Odin_Bootstrap_Nav_Walker` class to improved compatibility with WordPress 3.6.

#### v1.7.0 - 27/07/2013 ####

* Fixed the main navigation.
* Updated the `Odin_Bootstrap_Nav_Walker` class.
* Updated the Bootstrap files.
* Fixed the Gruntfile.js.
* Improved the code.

#### v1.6.0 - 22/06/2013 ####

* Fixed the translation.
* Removed $sex in `Odin_Metabox` class and `Odin_Post_Type` class.

#### v1.5.1 - 20/06/2013 ####

* Fixed the translation.
* Fixed Image Uplupload in `Odin_Theme_Options` class.
* Updated the Bootstrap to version v2.3.2.

#### v1.5.0 - 13/06/2013 ####

* Added Image Uplupload field in `Odin_Theme_Options` class.
* Added Input field type in `Odin_Theme_Options` class and `Odin_Metabox` class.
* Optimized the `Odin_Theme_Options` class and `Odin_Metabox` class.
* Modified the default language to en_US.
* Added pt_BR translation.

#### v1.4.0 - 26/05/2013 ####

* Added Image Uplupload field in `Odin_Metabox` class.
* Optimized the loading of scripts in `class-metabox.php`.
* Fixed the plurals in `class-post-type.php` and `class-taxonomy.php`.
* Moved the `race_chrome_autoset_featured()` function to `functions.php`.
* Fixed code standards.

#### v1.3.0 - 17/05/2013 ####

* Added Bootstrap.
* Removed old SASS files.
* Added Grunt task to updated and install the Bootstrap.
* Refixed the Photoswipe.

#### v1.2.6 - 17/05/2013 ####

* Reordered the functions.php to load scripts always last.
* Fixed the Photoswipe.

#### v1.2.5 - 16/05/2013 ####

* Fixed the Photoswipe feature.

#### v1.2.4 - 15/05/2013 ####

* Updated aq_resize to version 1.1.7.

#### v1.2.3 - 14/05/2013 ####

* Fixed core admin.js.

#### v1.2.2 - 14/04/2013 ####

* Improved file structure in SASS folder.
* Added wp_trim_words() in race_chrome_excerpt() function.

#### v1.2.1 - 14/04/2013 ####

* Added `options` argument in editor of Metabox class and Theme Options class.

#### v1.2.0 - 02/04/2013 ####

* Added FitVids.

#### v1.1.0 - 27/03/2013 ####

* Added Odin_Options_Helper class.
* Added Grunt FTP.
* Added Grunt rsync.

#### v1.0.0 - 24/03/2013 ####

* First Release.
