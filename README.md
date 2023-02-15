

# weather-forecast
A simple web application for checking weather forecast in different cities.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel Framework Version: 7.0

## Clone
```
> git clone https://github.com/jericobutial/weather-forecast.git //https
> git clone git@github.com:jericobutial/weather-forecast.git //ssh
````

## Install Dependencies and Packages
```
$ composer install
$ npm install
```

## Set DATABASE_NAME, GITHUB CLIENT ID and GITHUB CLIENT SECRET on .env File
```
DATABASE_NAME={your_db_name}

GITHUB_CLIENT_ID=f2539ad39f8baa033d58
GITHUB_CLIENT_SECRET=353f727a2fec902de0ccbc164d0478f219da06d3
```

## Run Migrations
```
$ php artisan migrate
```

Generate APP_KEY then run Php artisan and Npm
```
$ php artisan key:generate
$ php artisan serve
$ npm run watch
```
Use `http://127.0.0.1:8000` as project ip server to avoid login errors.

# Important!
Please go to this link to allow CORS for the api: https://cors-anywhere.herokuapp.com/corsdemo
