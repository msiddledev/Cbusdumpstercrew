<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
/* 
| ------------------------------------------------------------------- 
|  Stripe API Configuration 
| ------------------------------------------------------------------- 
| 
| You will get the API keys from Developers panel of the Stripe account 
| Login to Stripe account (https://dashboard.stripe.com/) 
| and navigate to the Developers >> API keys page 
| 
|  stripe_api_key            string   Your Stripe API Secret key. 
|  stripe_publishable_key    string   Your Stripe API Publishable key. 
|  stripe_currency           string   Currency code. 
*/ 
$config['stripe_api_key']         = 'sk_test_51J1ZVCG8H6QQUdBiWxR1JXWABKMbm94U8H6QLtNfOzZ3mXU1nmvz7Tnmbj9KpCDxlLk1mKsqbWQmPIyGoBKRJS2H00q3bq4upx'; 
$config['stripe_publishable_key'] = 'pk_test_51J1ZVCG8H6QQUdBiKIvYB8Zl397GM4ISVfkVKTpeCVwbqKp5zpyS0B6DZsmrKhM2YaWixwk0FyTwczvq4WxpluWF00h4h6GclX'; 
$config['stripe_currency']        = 'usd';