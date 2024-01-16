# Scify Exercise

Simple login functionality with user dashboard in Laravel Framework

# Prerequisite
Laravel >= 10.40.0, PHP >= 8.2.14,Node.js >= 20.11.0 NPM >= 10.4.2

# Run the project
<ul>
    <li>Download project</li>
    <li>Duplicate the .env.example to .env</li>
    <li>Use terminal to navigate to project's folder and run the following commands</li>
</ul>

```bash
$ composer install
$ php artisan key:generate
$ php artisan cache:clear
$ npm install
$ npm run build
$ php artisan serve
```
# Project's Pages
The project consists of two pages, the login page and the dashboard page. In dashboard page, a selected .csv file is displayed in table layout

<b>Login Page</b>

![Screenshot from 2024-01-15 15-20-37](https://github.com/vagg-peer/scify-exercise/assets/58305936/6c983f34-f109-4be1-8cea-54b9e294bbb6)

The login page accepts only one username which is "Antigoni". Providing the right username, user will be redirected in User's Activity page. If there is no issues with the file the user should see the following screen. In case of error the user will see error messages

<b>User's Activity Page</b>
![Screenshot from 2024-01-15 15-23-57](https://github.com/vagg-peer/scify-exercise/assets/58305936/19ea70de-39ae-47f3-a649-59774a8c8781)

# Improvments
<ul>
    <li>Use Laravel's built in authentication system. This means that, the user need username and password to login. Furthermore user's credential will be saved in the database with other information like IP, which improves security. </li>
    <li>Check if the file's type is .csv, because fgetcsv() parse pdfs without errors.</li>
    <li>Use cache for faster page loading</li>
    <li>Check if applications is created by Memor-i or diannoia, because the database may contain applications from other creators</li>
</ul>


