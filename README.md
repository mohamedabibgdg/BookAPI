# BookAPI
Need to Install 

- Xampp
- Composer
- node

# To Start App

**php artisan serve**

After this need to database connection in file .env  and run 

**php artisan migrate:fresh --seed**

# API LINKS

**_Book Links_**
All Start with 

http://127.0.0.1:8000/api/ Or 
http://localhost:8000/api/
 ~~~~
 // Category
 get('category');
 post('category');
 get('category/{category}');
 post('category/update/{category}');
 post('category/delete/{category}');
 
 // Book
 get('book');
 post('book');
 get('book/{book}');
 post('book/update/{book}');
 post('book/delete/{book}');
 
 // Part
 get('part');
 post('part');
 get('part/{part}');
 post('part/update/{part}');
 post('part/delete/{part}');
~~~~
