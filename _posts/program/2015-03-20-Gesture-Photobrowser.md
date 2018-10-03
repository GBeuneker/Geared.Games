---
layout: game
category: program
tag: school

# Featured image
images:
  - url: /assets/images/photobrowser-thumbnail.gif
    alt: Program Picture
    title: Photo Browser

  - url: /assets/images/photobrowser.jpg
    alt: Program Picture
    title: Photo Browser
---

A photobrowser that can be controlled through your webcam using gestures.
<!--content-->

## Description
We used the computer vision OpenCV framework to accomplish this effect. We perform background subtraction to get a foreground mask of the person standing in front of the camera. Then on this masked image we filter out anything that is not skin colored so we are left with just the hands and head. Finally blob detection together with the relative position of the blobs is used to determine the position of the hands and the head. Tracking these blobs gives us information about what gestures are used, which in turn make the computer do button prompts to control the photo browser.

## Role
Programming: Geert Beuneker.  

## Details
**Release Date:** {{page.date | date:'%B %d, %Y'}}  
**Framework:** OpenCV  
**Language:** C++  
**Link:** [Source Code](https://drive.google.com/open?id=0B-BSZRLf8PuDUUNHOExQS3JaRVU)  
**Demo Video:** [Youtube](https://www.youtube.com/watch?v=y5FuycQf7Ac&feature=youtu.be)
