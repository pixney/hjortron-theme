# Hjortron Theme
![Hjortron Preview](https://cdn.pbrd.co/images/GTbkT7H.jpg)

## How to install it

### Step 1 

#### Streams v1.4
`composer require "pixney/hjortron-theme":"~2.0"`

#### Streams v1.3
`composer require "pixney/hjortron-theme":"~1.0"`

### Step 2
Select it as your admin theme in `settings`

### Step 3
Clear cache and assets `php artisan asset:clear && php artisan cache:clear`

## Roadmap
* Stop using assetics

## Changelog

### 2017-11-14 Repeater field type padding issue fix. 

### 2017-11-12 - Added Layout setting 
Added a preference setting in `preferences->themes->hjortron theme->preferences` where you are able to choose between three different layout modes. On a per user level choose what layout mode suits you the best.

### 2017-11-11 First release 
* Styling improvements for files field type
* Change to grid styling
* Improved responsiveness for Iphone 4
* Change to menu behavior. All menu items are per default visible, but you are able to hide the menu to the very left by clicking the menu button.

