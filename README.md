# My Social Posts

A PHP package to load Instagram and Facebook page posts.

## Installation

Install via Composer:

```sh
composer require saurabhinfosys/my-social-posts


## Setup into your project

use MySocialPosts\Instagram;
use MySocialPosts\Facebook;

// Replace with your actual access tokens and page/user IDs
$instagramAccessToken = 'YOUR_INSTAGRAM_ACCESS_TOKEN';
$facebookAccessToken = 'YOUR_FACEBOOK_ACCESS_TOKEN';
$facebookPageId = 'YOUR_FACEBOOK_PAGE_ID';

// Instantiate the Instagram class and get posts
$instagram = new Instagram($instagramAccessToken);
$instagramPosts = $instagram->getPosts();
print_r($instagramPosts);
// Instantiate the Facebook class and get posts
$facebook = new Facebook($facebookAccessToken);
$facebookPosts = $facebook->getPosts($facebookPageId);
print_r($facebookPosts);


