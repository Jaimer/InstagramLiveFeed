# InstagramLiveFeed
Live feed of **PUBLIC** instagram posts where a #Hashtag is mentioned.

This script fetches public instagram posts mentioning a #hashtag then shows it on a slider with it's respective user profile pic and caption. You can configure it to fetch posts by an account or location also.

## Built Using:

- [**Instagram PHP Scrapper**](https://github.com/postaddictme/instagram-php-scraper)
- [**AnySlider**](https://github.com/jwilsson/AnySlider)
- [**Bootstrap**](https://getbootstrap.com)

## How To Use:

1. Clone or Download this
2. Set an Instagram account username and password in index.php
3. Set cache path. (Make it absolute if you run into permission errors)
4. Set the hashtag and the amount of posts the script will fetch each update.
5. Set page refresh interval in meta tag.
6. Design the feed as you wish. Bootstrap template already provided.

## Instagram Fetch Limit

The ammount of posts and refresh interval already set on the script is tested to allow for an uninterrupted session without reaching Instagram's limits. If you want other amount of time or posts, you'll need to test if this combination hits the limits. If this is the case you'll receive an 403 error from Instagram and you'll get blocked for several minutes.

## What a About an Account instead of a Hashtag?

You can change the media fetched by using another function of Instagram Scraper like:
- getAccountFollowers
- getMediasByUsername
- and more...
You can check examples on vendor/raiym/instagram-php-scraper/examples

