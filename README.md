<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Our Application

Job Hiring Platform, It serves as a online hiring platform to make it easier for both employees and employers, using our application finding a job will be much easier than it was before, Employees are able to see Job Posts that has been approved by our administration department, Employers are able to see who applied for their jobs and what was the employees response in the comments, and further more. Have Fun Experiencing Our Application:

## How to install our application successfully

1. ```git clone <git@github.com>:Moataz1121/Job-Social-Network.git```

2. ```cd Job-Social-Network```

3. ```composer install```

4. ```cp .env.example .env, and past/replace the following```

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=linked
- DB_USERNAME=newuser
- DB_PASSWORD=password
- MAIL_MAILER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=465
- MAIL_USERNAME=Your Gmail Account
- MAIL_PASSWORD='(Your Google App Password)'
- MAIL_ENCRYPTION=ssl
- MAIL_FROM_ADDRESS="Your Gmail Account"
- MAIL_FROM_NAME="Your Google App Name"

5. ```php artisan key:generate```

6. ```php artisan migrate```

7. ```composer require laravel/ui```

8. ```php artisan ui bootstrap --auth```

9. ```npm install```

10. ```npm run dev```

## Contributors

- **[Abdelrahman Abdelhady](https://github.com/Abdelrahman120)**
- **[Moataz Ibrahiem](https://github.com/Moataz1121)**
- **[Ahmad Hamdy](https://github.com/ahmed-fawzy-hub)**
- **[Ahmad Fawzy](https://github.com/ahmed-fawzy-hub)**
- **[Mostafa Jaafar](https://github.com/MHJaafar9869)**


## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
