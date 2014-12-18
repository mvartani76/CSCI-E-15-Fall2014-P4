## Financial Valuation Web Application
### DWA Project 4 - Mike Vartanian

## Live URL:
<http://p4.mikevartanian.me/>

## Description
I do quite a bit of valuation of projects and companies in one of my roles in the M&A group at the company I work for.
The current method of doing this involves very complicated Excel spreadsheets and group collaboration is done through email with very little tracking of changes.

The goal for this project is to emulate what is done using these spreadsheets and potentially augment the functionality using a web application. The scope of this project, however, will be to set up a basic framework for this site due to time constraints and limits of what I actually know how to do at this time... :)


## Demo

As a remote student, my demo is located in jing at the following location: http://screencast.com/t/cVWNHi5w63R

## Details for Teaching Team

Initial diagram description...

![](https://github.com/mvartani76/CSCI-E-15-Fall2014-P4/blob/master/p4_database_diagram.jpg)

As I started implementing the code, I didn't follow the diagram exactly and a few of the tables were not used such as permissions and proformas... I also added more tables after creating the diagram but the diagram helped a lot when trying to visualize the relationships..

Initial layout of user-dashboard...

![](https://github.com/mvartani76/CSCI-E-15-Fall2014-P4/blob/master/p4_dashboard.jpg)

Again, this also changed from the original idea as the code was implemented... The dashboard screen needs some graphs to indicate usage or other statistics to look at but this will be implemented at a later date...

I did some simple validation but there is much more intricate validation that needs to be done specific to this web application. The first validation that I can see that I forgot was making sure that the end year was greater than the start year when creating/editing a project.

Although there was some warnings against doing it, I performed the migrations and seeding on the production version to make it easier for the staff to use/test...

I created 5 users with the following email logins..

user1@user1.com
user2@user2.com
...
user5@user5.com

with respective passwords...

user1password
user2password
...
user5password

### Interesting Observations / Code Modifications

The debugbars were actually adding the glyphicons from font-awesome.css so I needed to copy the /fonts/ directory over from one of the packages to the production server to get the glyphicons to work...

Noticed some differences between @foreach and foreach which were kinda strange but by looking at the source code, I was able to get around the errors...

In most cases, I tried to use blade templating but these templates could not always implement the html as desired so I manually used php in these cases...

I was able to dynamically update the morris charts using php which was kinda neat...

## Outside Code
Used the following GitHub code for login form inspiration...
https://gist.github.com/bMinaise/7329874

Used the following github code for creating bar charts...
http://morrisjs.github.io/morris.js/
This is provided under BSD license

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
