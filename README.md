<p align="center"><span><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a><img src="https://www.metaltoad.com/sites/default/files/styles/large_personal_photo_870x500_/public/2020-05/react-js-blog-header.png?itok=VbfDeSgJ" width="400"></span></p>

## Portfolio website (Laravel, React)

<h4><a href="https://stefancoding.com/" target="_blank">DEMO</a> if you would like to see website in action.</h4>

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

<h4>/profile -> GET || <a href="https://stefancoding.com/api/profile" target="_blank">TEST URL</a></h4>
    - <b>profile->avatar</b> => get avatar picture<br>
    - <b>profile->logo</b> => get logo of web page<br>
    - <b>profile->site_switch</b> => <b>true</b> or <b>false</b> (For shut down the website if need maintrance) <br>
    - <b>profile->short_info</b> => Short info with HTML rendering. Use with any textarea. Also works with any className
                                         and HTML elemets. Use <span class="inline-code">dangerouslySetInnerHTML</span><br>

<h4>/projects -> GET || <a href="https://stefancoding.com/api/projects" target="_blank">TEST URL</a></h4>
    - <b>project->title</b> => Project title<br>
    - <b>project->description</b> => Project description<br>
    - <b>project->image</b> => Project image<br>
    - <b>project->tags</b> => Project tags<br>
    - <b>project->source_link</b> => Project source code link<br>
    - <b>project->demo_link</b> => Project demo link<br>
    - <b>project->short_by</b> => Show projects by DESC.<br>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
