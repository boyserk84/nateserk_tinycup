Nateserk TinyCup Wordpress Theme
===

TinyCup is a minimalist Wordpress theme developed and designed by Nate K.
It is derived from a starter theme called underscores `_s`.

* License GNU GPLv3 (http://choosealicense.com/licenses/gpl-3.0/)

Libraries Included
===
* JQuery
* Font-awesome
* Google Fonts
* Bootstrap CSS

Current Version
===
Version 1.0.1p5 Updated 12/23/2017
* Added the custom options for icon and button for modal-dialog shortcode.
* Added `Github` to social options.
* Simplify and consolidate customizer options.

### Details and previous changelogs can be found at `CHANGELOG.md` (https://github.com/boyserk84/nateserk_tinycup/blob/master/CHANGELOG.md).

End-Users Ready-to-use Customizable Features
===
* Logo as a title
* Show related posts by category or tags
* Social media links
* Copyright text
* Article Thumbnail (round, circle, frame)
* Home-Modal dialog (MOTD, Pop-up)
* Home-image integration
* Customizable link colors
* Misc-Option (Google Analytic Tracking Id Integration, how to show theme logo)
* Customize displaying number of items per row.

Requirement
===
* Wordpress 4.7

Getting Started
===

Where things are
* hooks/ - Actions to be triggered in various parts of TinyCup Wordpress theme (i.e. loading specific headers, showing related posts).
* inc/options - Customizable options UI for end-users to add and update their contents without touching codes.
* init.php - Initialization of the theme
* customizer.php - Register options for end-user's customizable UI.
* template-parts/ - PHP/HTML reusable templates for single.php, header.php, footer.php, and page.php.
* assets/ - All the external library, css, and js files, including the main one.

Developing Custom Options Guide
===
1.) Add options UI

2.) Add Hooks functionality

3.) Register your options

4.) Integrate and trigger your hook

How to install NateSerk TinyCup theme for Wordpress website?
===
* Run the following command:
```
sh zip_theme.sh
```

This will generate a zip file of this theme. It is located in `export` folder on your computer.

If you would like to rename the theme name in the generated zip theme file,
* Run the following command:
```
sh zip_theme.sh --rename YOUR_PREFERRED_THEME_NAME
```


* Log-in to your Wordpress website.

* Navigate to Appearance > Themes within your site’s WordPress dashboard.

* Click the ‘Add New‘ button at the top of the page.

* Then click the ‘Upload‘ button at the top of the page.

* Choose the .zip file of this theme from `export` folder on your computer and click ‘Install Now.

* Activate your theme when ready.


How to update a newer version of NateSerk TinyCup theme?
===
It is similar to install the theme. There are 2 options.

Option#1: Use a shell script.
===

* FTP or copy the theme's zip file to your Wordpress directory on the server at `wp-content/themes`.

* Run the following command:
```
sh update_theme.sh
```

This will make a backup of the current theme version and unzip the new theme's zip file.

Options#2 Update via Wordpress admin.
===

* SSH or FTP to your Wordpress directory on the server at `wp-content/themes`

* Make a backup of the current theme or run the following command:

```
sudo mv nateserk_tinycup nateserk_tinycup_BACKUP
```

This will make a backup of the current theme into `nateserk_tinycup_BACKUP` directory.

* Log-in to your Wordpress website and upload the newer version of the theme.
