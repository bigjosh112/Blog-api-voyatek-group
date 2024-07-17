# Voyatek-Group

This is a Blog api for Voyatek Group, Laravel based RESTful Api Project.

# Technologies used
-   Php
-   Laravel
-   Restful API





# How to use

## 1. Clone Project into your local machine

```
https://github.com/bigjosh112/Blog-api-voyatek-group
```
### Go into the directory
```
cd Blog-api-voyatek-group
```

### install all packages
```
composer install
```

## 3. Start project
```
 php artisan serve
```
## 3. The Blog Apis 


| Blog APIs                                                      | Method |  |
|-----------------------------------------------------------|--------|--|
| http://127.0.0.1:8000/api/blogs                      | POST  - create blog |  |
| http://127.0.0.1:8000/api/blogs/1                   | POST  -update blog |  |
| http://127.0.0.1:8000/api/blogs     | GET    - get all blogs|  |
| http://127.0.0.1:8000/api/blogs/5        | GET - get a blog   |  |
| http://127.0.0.1:8000/api/blogs/1                | Delete a blog    |  |

## 4. The Post Apis 


| Post APIs                                                      | Method |  |
|-----------------------------------------------------------|--------|--|
| http://127.0.0.1:8000/api/blogs/7/posts                     | POST  - create posts |  |
| http://127.0.0.1:8000/api/blogs/7/posts/29                  | POST  - update post |  |
| http://127.0.0.1:8000/api/blogs/7/posts     | GET    - Get All posts under a blog|  |
| http://127.0.0.1:8000/api/blogs/7/posts/29      | GET - Get a post under a blog   |  |
| http://127.0.0.1:8000/api/blogs/7/posts/28               | Delete a post under a blog   |  |
| http://127.0.0.1:8000/api/blogs/7/posts/28/like              | Post - Like a post   |  |
| http://127.0.0.1:8000/api/blogs/7/posts/28/comment              |Post - Comment on a post  |  |

## Postman documentation
> click here to see the Postman documentation [here](https://documenter.getpostman.com/view/26996251/2sA3kRKQ4T).

## Developer
| Name                   | Email                      | 
|------------------------|----------------------------|
| Akinola Oladayo Joshua | oladayoakinola56@gmail.com |
| Phone Number           | +2347059721857             |
| Position               | Backend developer          |



