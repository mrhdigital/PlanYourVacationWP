=== Affinity ===

Contributors: automattic
Requires at least: 4.3
Tested up to: 4.6.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Affinity is a classic one-page theme designed with weddings and family announcements in mind. 


== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New affinity.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.


== Setting Up Your Front Page ==

When you first activate Affinity, your homepage displays posts in a traditional blog format. To set up your homepage, follow these steps:

1) Create a page.
2) Go to the Customizer’s Static Front Page panel and set “Front page displays” to “A static page.”
3) Select the page created in Step One as “Front page,” and choose another page as “Posts page” to display your blog posts.

Good news! This theme doesn’t need a front-page template — set a static page as your front page, and you’re good to go. On its own, the page displays a single panel with a full-screen featured image, your site logo, description, and navigation, and your page content.

To get your site set up, you’ll want to add some more panels.

== Adding Panels == 

Each “panel” is a standard page. To add additional panels to your Front Page, follow these steps:

1) Create or edit a page.
2) Navigate to Customize → Theme Options. From the drop-down, select the page you’d like to appear in the panel.

== Panel setup in the Customizer ==

To set the background image of your panel, assign a Featured Image to the page.

Click on the diamond-shaped links to navigate through the front-page panels, or adjust the opacity of the Featured Images from Customize → Theme Options → General.


== Featured Images ==

Affinity supports prominent Featured Images on the blog, and single posts and pages.


== Theme Options ==

In addition to the Front Page, you can customize the theme’s behavior under Customize → Theme Options → General.

-- Header Image Opacity --

Change the opacity of the header image for better contrast with the text.

-- Scrolling Featured Images --

Uncheck “Allow Featured Images to scroll in the background on large screens” to change the scrolling behavior of the header and front page Featured Images on large screens.

Note: The scrolling behavior is not visible in the Customizer for performance reasons, but you’ll see it on the front page of your site.


== Widgets ==

Affinity boasts a one-column or two-column layout. Add widgets to the Sidebar area for a traditional two-column blog, or leave it blank for a sleek one-column style. The theme also includes three optional widget areas in the footer

Configure these widget areas from Customize → Widgets.


== Page Templates ==

Affinity comes with two Page Templates for dressing up your content:

-- Full-Width Template --

The Full-Width template gives you more space for your content. It’s the perfect way to showcase a large gallery of images or a video.

-- Guestbook Template --

Designed with weddings in mind, the Guestbook template highlights your visitors’ comments.

When using this template on a page, it’s good to double-check that comments are enabled. To do this, edit the page and click on More Options. Under the Discussion header, check Allow Comments and publish.


== Social Links ==

Affinity supports a Jetpack Social Links (jetpack.me/) menu, which appears in the footer. Linking to any of the following sites will automatically display its icon in your menu:

CodePen					Digg
Dribbble				Dropbox
Facebook				Flickr
github 					Google+
Instagram				LinkedIn
Email (mailto: links)	Pinterest
Pocket					Polldaddy
Reddit					RSS Feed (urls with /feed/)
StumbleUpon				Tumblr
Twitter					Vimeo
WordPress				YouTube


== Post Intro ==

Affinity has a small but nifty intro feature. Also known as a “deck” or “kicker,” the intro area is displayed between the headline and body copy on posts.

Your intro provides important information and acts as a link between the title and the rest of your post. A carefully crafted deck grabs readers’ attention, giving them an idea of what to expect in the full post.

Add your intro in the Excerpt field of each post, which you’ll find in the More Options area of the Post Editor sidebar.


== Additional Support ==

Affinity also supports the following features:

* Site Logo
* Custom Menus
* Custom Header
* Custom Backgrounds


== Quick Specs (all measurements in pixels) ==

* The main column width is 560 for blog posts and 716 for pages.
* The main sidebar width is 218.
* Featured Images are displayed at 720 wide and flexible height on the blog, and at full-screen width with flexible height on single posts and pages.
* The site logo appears at a maximum width of 800 and height of 300.
* The custom header appears at full-screen width with flexible height.


== Credits/Licenses ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* Genericons font by Automattic, http://genericons.com/ (Font: SIL OFL 1.1, CSS: MIT License)
* Images in screenshot and demo site from http://unsplash.com/, CC0 license (https://unsplash.com/license)
* Default Header Images:
-- Typewriter by Sergey Zolkin from https://unsplash.com/photos/E0Spm6XXn2Y, CC0 license (https://unsplash.com/license)
-- Tulips by Ales Krivec from https://unsplash.com/photos/hLxqYJspAkE, CC0 license (https://unsplash.com/license)
-- Autumn by Sebastian Unrau from https://unsplash.com/photos/CoD2Q92UaEg, CC0 license (https://unsplash.com/license)
-- Car by Scott Webb from https://unsplash.com/photos/ivIPed6YAYQ, CC0 license (https://unsplash.com/license)
-- Camera by Anthony Delanoix from https://unsplash.com/photos/YZzkUW3Tn_g, CC0 license (https://unsplash.com/license)

== Changelog ==

= 25 August 2017 =
* Replace line of smarter featured image code that was not compatible with PHP 5.3.x, for backwards compatibility.

= 24 July 2017 =
* Fix for #4744, where excerpts were displayed twice on home/category/archive pages if Customizer settings were set to 'Post Excerpt' instead of 'Full Post'

= 6 June 2017 =
* Add style for the social icons widget.

= 3 May 2017 =
* Add support for Content Options, with Smarter FEatured Images, off by default.
* Add support for Content Options, with Smarter Featured Images, off by default.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 2 February 2017 =
* Add forgotten context and gettext function around comma separators for translators.

= 25 January 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 19 January 2017 =
* Make sure labels in Widget Title have the same color.

= 10 November 2016 =
* Add Headstart translation (strand ID 9902).

= 2 November 2016 =
* Fix textarea padding
* If Contact From label is too long make sure it says above.

= 28 October 2016 =
* Add additional checks for header image.

= 6 October 2016 =
* Since HEADER_TEXTCOLOR has been deprecated use default-text-color

= 4 October 2016 =
* Add the new `fixed-menu` feature tag to the stylesheet.

= 2 September 2016 =
* Update version number to be in line with WordPress.com download.
* Add `-webkit-` prefix to `tranform` CSS property.

= 8 August 2016 =
* Update a Headstart attachment URL to a smaller image.

= 11 July 2016 =
* add one page tag to style.css

= 27 June 2016 =
* Add check to make sure screen size is larger than a tablet before adding inline min-height to header.

= 21 June 2016 =
* Correct annotation's page template setting.

= 14 June 2016 =
* Change window shorthand to $( window) to avoid conflicts that were causing the Likes/Reblogs buttons not to load on pages where a video was embedded.

= 30 May 2016 =
* Update version number in prep for WP.org submission

= 24 May 2016 =
* Removed unnecessary comments in customizer panels JS; fix bug where custom header was assigned an unnecessary minimum height upon resize on small screens. Now this will only happen when the header is able to stick to the top of the screen.

= 19 May 2016 =
* Correct menus in Headstart annotation.

= 18 May 2016 =
* Add Headstart annotations.

= 25 April 2016 =
* Account for fixed header height in Customizer when scrolling to panels on the front page.

= 22 April 2016 =
* Correct text domain in content-page.php

= 21 April 2016 =
* Adjust front page navigation to be more accurate and not hide the edit links on scroll
* Style ordered lists more like unordered lists in widgets
* Use paragraph tag for site description rather than heading; adjust font size for gallery captions to match other captions

= 20 April 2016 =
* Use a P tag for the site title when not on the front page blog, for improved SEO
* Add word-wrap rule to text widgets since they're narrow; move site branding from header.php into a separate component to clean that template up a bit.
* Adjust RTL styles for main navigation; ensure aligned images/captions/blockquotes appear correctly after resize in RTL
* Fix alignment of submit button on password-protected posts form
* Set specific font on diamond icons or they display ugly in Android/iPad OS; add support for core custom logos with a fallback for Jetpack site logos
* Fix issue where last menu item with submenus indicator appears underneath the main item
* Only allow background images to stay fixed on screens larger than 1024px wide to account for a bug with fixed positioning and background-size cover on iPads
* Add padding to gallery items; fix featured image borders on small featured images; remove outline from audio player buttons
* Add newlines to ends of all PHP files
* Use positioning rather than visibility to show/hide submenus to avoid odd lag on mouse out
* Remove opacity transitions on main menu to avoid flashing when using main navigation
* Fix @package declarations in several files
* Delete unused widgets intended for 404 page
* Add support for random default header image instead of static default
* Make sure we declare a default custom header image
* Allow long unbreaking author names to overflow with an ellipsis
* Make Customizer values for opacity more human readable with percentages instead of decimals; update sanitize overlay function, too.

= 19 April 2016 =
* Adjust font size for site description and add bottom margin to site description on small screens.
* Update Readme with contents from Showcase
* Add description of the theme to readme and style.css
* Adding screenshot.png
* Disable Customizer postMessage transport for background attachment of featured images; the Customizer stutters when they're fixed position.
* Revert previous fix, it didn't actually fix anything. Add overflow rule to site header on large screens instead.
* Ensure site description doesn't overflow in IE due to translate transform bug.
* Fix overflow issue on small screens when toggle menu is open

= 18 April 2016 =
* More spacing issues with main navigation and site header elements when no custom header is present
* Fix bottom padding on header when no custom header is present on large screens
* Minor adjustment to spacing on mobile devices when no custom header is present
* Fix display issues on mobile when no custom header image is available
* Tweaks for main navigation in mobile view
* Tweaks to unlinked post title color

= 15 April 2016 =
* Fix no-featured-image entry titles on the front page
* Make sure aligned left and right blockquotes and images and captions work for RTL sites
* Very minor tweaks to submenu styles
* Clean up Javascript by consolidating individual functions and only calling them when necessary;
* Style front page posts that don't have featured images
* Add a min-height to panels on the front page so if no featured image is set it doesn't look terrible
* Add small top and bottom margin to social links
* Make sure z-index on the header area is low enough that direct manipulation icons are click-able when in the Customizer
* Don't hide the site title on Aside posts
* Add cute border detail to featured images on blog index and archives
* Avoid use of scrollTop to get scroll position, since it's not compatible across browsers; window.pageYOffset works for all!
* Register some default custom header images
* Fixes scrolling behavior in Firefox, targeting HTML tag in addition to BODY tag.
* Refactor submenus to use borders/pseudo-elements instead of outlines for compatibility with Firefox; put front page jQuery into a function hooked to document.ready
* Make sure we're loading Google fonts over https or they won't work; tweaks to panel navigation to make the target links and post titles easier to click on

= 14 April 2016 =
* Fix bug where background images did not show up on some browsers due to malformed CSS; rename panel navigator to panel navigation to better fit with other navigation elements naming conventions
* Tweaks to page links styles
* Style page links
* Add hover styles for post titles
* Add styles to .button for links
* Standardize padding on mobile devices in the header; add beginnings of a readme
* Minor adjustments to content widths/margins; set correct default color for custom headers
* Styles for milestone widget in footer area
* Better styles for Milestone widget
* Adjust mobile styles to ensure multiple columns are visible for longer
* Allow left- and right-aligned images to appear in the margins on pages; update colors in inc/wpcom.php

= 13 April 2016 =
* Adjust Guestbook site width when a sidebar is active; adjust margins on smaller headings
* Color adjustments for blockquotes, decks, and comment meta
* Un-styling the main navigation for larger screens
* Styling for mobile menu
* Adjustments to colors and font weights for headings; not sure I like the thicker headings. Need to let it sit for a while.
* Darken the main link color slightly for better contrast
* Adjustments to link colors for post navigation
* More specific styles for contact forms on the front page only
* More color adjustments; Ensure contact forms don't reach the full width of the column
* Desaturate some of these browns, they were bothering me. :) Add jQuery to prettify Jetpack Contact Forms when using certain fields

= 12 April 2016 =
* Adding tags to style.css
* Let's link the site description to the home page; I kept clicking on it and expecting it to take me home.
* Minor styles for Author widget on WP.com
* Make sure fixed position background images fully cover the available background area so there's no repetition regardless of screen size
* Ensure submenus are accessible on touch devices
* Better styles for WP.com widgets
* Add POT file from GlotPress

= 11 April 2016 =
* Allow site description to appear on archives and search results
* Remove widgets from 404 page template
* Adjustments to content width when no sidebar is active; account for no-sidebar scenario in the JS for aligned images/blockquotes; style milestone widget and cites within blockquotes-This line, and those below, will be ignored--
* Begin adding WordPress.com-specific styles, plus minor style tweaks for headings and horizontal rules
* Begin adding support for a Guestbook page template, and add styling to the template
* Begin adding a Guestbook page template
* Add submenu indicators to main navigation for better UX
* Allow theme to present as a one-column theme if no sidebar is active.

= 1 April 2016 =
* Let's make the default header opacity consistent, and higher than 0.1 for a nicer presentation on initial activation
* Initial commit to /pub
