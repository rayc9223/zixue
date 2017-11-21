<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

> Readme by rayc9223  
> 服務器環境: CentOS-6.8 | Nginx-1.11.1 | MySQL-5.7.20 | PHP-7.1.11  
> 項目框架: Laravel 5.5.0  


#### 安裝說明:
1. 使用命令提示字元克隆代碼:  

```
git clone https://gitee.com/rayc9223/zixue.git
```  

2. 進入項目檔案夾  

```
cd zixue
```

3. 將 .env.example 複製一份並重命名為 .env, 配置環境信息  

```
cp .env.example .env
```

4. 安裝 composer 依賴

```
composer update
```

5. 生成應用 Key

```
php artisan key:generate
```

6. 創建數據表

```
php artisan migrate
```

7. 啟用本地伺服器( Apache 或 Nginx, 這裡用 Laravel 內建的伺服功能)

```
php artisan serve
```

**前台**  
登錄: `127.0.0.1:8000/login`  
註冊: `127.0.0.1:8000/register`

**後台**  
登錄: `127.0.0.1:8000/admin/login`  
註冊: `127.0.0.1:8000/admin/register`


### Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).