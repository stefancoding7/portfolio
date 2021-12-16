<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Portfolio website (Laravel, React)
<p>Laravel portfolio site with powerful admin panel and detailed statistics. Easy to add and manage new projects via the admin panel.<p><br>
    <h3>Installation</h3>
<p>Create <b>.env</b> file. Than <b>Run</b> this commands.</b></p>  

```javascript
php artisan migrate
php artisan db:seed
```

<p>Will create default admin user (Username: <b>admin@admin.com</b>, Password: <b>password</b>)</p>
<br>


<p>Than run</p>

```javascript
php artisan serve
```
<br>
<p>(<b>For production only</b>) -> Go to <b>resource/js/config/config.js</b> and change <b>url</b> variable with your domain name. </p>

```javascript
let url = 'http://127.0.0.1:8000';

export default {
  
    imagesUrl: `${url}/storage/images/`,
    apiBaseUrl: `${url}/api/`,
  };
```

## REST API documentation

<h2>/profile</h2>
    - <b>profile->avatar</b> = get avatar picture<br>
    - <b>profile->logo</b> = get logo of web page<br>





## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
