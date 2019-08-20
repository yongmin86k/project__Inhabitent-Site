# Inhabitent Wordpress Theme

A multi-page website with a blog for a camping supply company called Inhabitent Camping Supply Co. using WordPress as a content management system.



![Preview](themes/inhabitent/screenshot.jpg)

[![PHP](https://img.shields.io/badge/PHP-7.3.7-brightgreen.svg)](https://www.php.net/)
[![MySql](https://img.shields.io/badge/MySql-5.7.26-brightgreen.svg)](https://www.mysql.com/)
[![WordPress](https://img.shields.io/badge/WordPress-5.2.2-brightgreen.svg)](https://wordpress.org/)

[![gulp](https://img.shields.io/badge/gulp-4.0.2-brightgreen.svg)](https://github.com/gulpjs/gulp)
[![gulp-sass](https://img.shields.io/badge/gulp--sass-4.0.2-brightgreen.svg)](https://github.com/dlmanning/gulp-sass)
[![jQquery](https://img.shields.io/badge/jQuery-3.4.1-brightgreen.svg)](https://jquery.com/)


[![browser-sync](https://img.shields.io/badge/browser--sync-2.26.7-green.svg)](https://github.com/BrowserSync/browser-sync)
[![gulp-autoprefixer](https://img.shields.io/badge/gulp--autoprefixer-4.1.0-green.svg)](https://github.com/sindresorhus/gulp-autoprefixer)
[![gulp-cssnano](https://img.shields.io/badge/gulp--cssnano-2.1.3-green.svg)](https://github.com/ben-eb/gulp-cssnano)
[![gulp-eslint](https://img.shields.io/badge/gulp--eslint-6.0.0-green.svg)](https://github.com/adametry/gulp-eslint)
[![gulp-prettyerror](https://img.shields.io/badge/gulp--prettyerror-1.2.1-green.svg)](https://github.com/andidittrich/gulp-prettyerror)
[![gulp-rename](https://img.shields.io/badge/gulp--rename-1.4.0-green.svg)](https://github.com/hparra/gulp-rename)
[![gulp-terser](https://img.shields.io/badge/gulp--terser-1.2.0-green.svg)](https://github.com/duan602728596/gulp-terser)

[![Contact Form 7](https://img.shields.io/badge/Contact%20Form%207-5.1.4-green.svg)](https://wordpress.org/plugins/contact-form-7/)
[![Custom Field Suite](https://img.shields.io/badge/Custom%20Field%20Suite-2.5.16-green.svg)](https://wordpress.org/plugins/custom-field-suite/)
[![Debug Bar](https://img.shields.io/badge/Debug%20Bar-1.0.0-green.svg)](https://wordpress.org/plugins/debug-bar/)
[![Query Monitor](https://img.shields.io/badge/Query%20Monitor-3.3.7-green.svg)](https://wordpress.org/plugins/query-monitor/)
[![Show Current Template](https://img.shields.io/badge/Show%20Current%20Template-0.3.0-green.svg)](https://wordpress.org/plugins/show-current-template/)
[![Theme Check](https://img.shields.io/badge/Theme%20Check-20190801.1-green.svg)](https://wordpress.org/plugins/theme-check/)

[![Inhabitent Business Hours Widget](https://img.shields.io/badge/Inhabitent%20Business%20Hours%20Widget-1.0.0-important.svg)](https://github.com/yongmin86k/Inhabitent-Site-Project/)
[![Inhabitent Functionality](https://img.shields.io/badge/Inhabitent%20Functionality-1.0.0-important.svg)](https://github.com/yongmin86k/Inhabitent-Site-Project/)

[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://lbesson.mit-license.org/)
&nbsp;

---
&nbsp;
## Wordpress Theme Template hierarchy

Each of theme templates is used to display the best designs and layouts of the page.

&nbsp;

**1. Menu**

|[Home] `front-page.php`|[Shop] `archive-product.php`|[Journal] `home.php`|[About] `page-about.php`|[Find us] `page.php`|
---|---|---|---|---
| **header-front-page.php** |header.php |header.php |**header-full-width.php** |**header-full-width.php** |
| template-parts/content.php |footer.php |sidebar.php |footer.php |sidebar.php |
| footer.php | | footer.php | |footer.php |

&nbsp;

**2. Other pages**

|`single-product.php`|`taxonomy-product-type.php`|`single.php`|`single-adventure.php`|
---|---|---|---
|header.php|header.php|header.php|header-adventure.php|
|template-parts/content-buttons.php|footer.php|template-parts/content-single.php|template-parts/content-buttons.php|
|footer.php| |sidebar.php|footer.php|
| | |footer.php| |
&nbsp;

---
&nbsp;
## Features

**1. Custon Loops**
- 3 Types of custom loops are used : 
    - `get_terms( $query )` - is used in *front-page.php* to display SHOP STUFF and used in *archive-products.php* to display categories
    - `get_posts( $query )` - is used in *front-page.php* to display INHABITENT JOURNAL, LATEST ADVENTURES
    - `new WP_Query( $query )` - is used in *archive-product.php* to display products

&nbsp;

**2. Theme Plugins**
- **Business hours widget**
    
    Create custom widgets in the sidebar for **contact info** and **business hours** to change information easily.

    ![Preview](themes/inhabitent/_preview/preview_0.jpg)

- **Inhabitent functionality**

    Add custom posts menu in the admin menu.

    ![Preview](themes/inhabitent/_preview/preview_1.jpg)



&nbsp;

---
&nbsp;
## License
- Structural code is open-sourced under the [MIT license](/LICENSE.md). 
&nbsp;

- Learning materials content is copyright (c) 2019 RED Academy.

<3