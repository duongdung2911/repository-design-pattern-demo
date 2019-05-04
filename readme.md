<p align="center"><img src="https://hocvienagile.com/wp-content/uploads/2018/12/CodeGymLogo.jpg"></p>

## Giới thiệu về project

Demo Repository Design Pattern.

Ứng dụng đơn giản được triển khai theo kiến trúc Repository - Service và sử dụng framework Laravel:

- Tầng controller: Xử lý request và response của HTTP
- Tầng service: Xử lý các logic nghiệp vụ
- Tầng repository: Xử lý các thao tác truy xuất CSDL

## Chạy project

- git clone https://github.com/duongdung2911/repository-design-pattern-demo.git

- `composer install`

- `php artisan key:generate`

- `sudo cp .env.example .env`

- Create new a database.

- Config .env

- `php artisan migrate`

- `php artisan serve`

- Run `localhost:8000`
