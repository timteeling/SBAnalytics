SBAnalytics
===========
by Carl Franzon  
forked by Tim Teeling

## Contents
- SBAnalytics.php - displays overall pageviews and visits from last 7 days
- toppages.php - displays top 30 pages from last 7 days (added by Tim Teeling)


## SBAnalytics.php

Google Analytics panel for Panic's iPad app "Status Board"

This is based on the G-api library, so you can use and change any of the dimensions or metrics as you please (just be consistent and change throughout the file.)

Usage:

Edit file to use your own credentials.

Upload to webserver.

In Status Board:

Create new Graph panel and enter your URL to the file. Note that the url uses parameters, and without them it won't work.

URL Format:
.../SBAnalytics.php?profile=XXXXXX&title=XXXXXXXX

Parameters:

The profile parameter should be the GA profile you want stats for. The best way to find your profile id is to go to GA and open the profile in Report mode. Check the url and find the numbers after the "p".

The profile title is the name of your site.

Example:

http://www.carlfranzon.com/wp-content/uploads/IMG_0408.png


## toppages.php

### Usage

1. Edit file to use your own credentials.
2. Upload to webserver.
3. In Status Board, Create new table panel and enter your URL to the file. Note that the url uses parameters, and without them it won't work.

#### URL Format:

.../toppages.php?profile=XXXXXX&title=XXXXXXXX

#### Parameters:

The profile parameter should be the GA profile you want stats for. The best way to find your profile id is to go to GA and open the profile in Report mode.

The profile title is the name of your site.

### To better find your profile ID in Google Analytics:
1. Login and go to your selected property
2. Click Admin at the top right in the toolbar
3. Select your profile name
4. Click the Profile Settings tab
5. Copy your Profile ID. It's purely a numerical value. It's *not* UA-XXXXXX-XX