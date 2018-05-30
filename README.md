# Hjortron Theme
![Hjortron Preview](https://image.ibb.co/h6xEQy/hjortron.jpg)

## Hjortron - A theme with less margins and paddings
We felt the original Accelerant theme is using too much padding and margins so we decided to simply copy that theme and make some adjustments to it. We generally use less margins,paddings and a smaller font size. But we have also included a setting for you to select what kind of spacing you prefer.

To access this settings, simply go to `preferences->themes->hjortron theme->preferences` and you can choose from three different options.

To make sure the styling "comes to life" always run `php artisan asset:clear` afterwards. Do that after installation as well.

## How to install it

### Streams v1.4
`composer require "pixney/hjortron-theme":"~1.4"`

### Streams v1.3
`composer require "pixney/hjortron-theme":"~1.0"`

### Step 2
Select it as your admin theme in `settings`

### Step 3
Clear cache and assets `php artisan asset:clear && php artisan cache:clear`