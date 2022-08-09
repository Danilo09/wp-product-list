[This project is developed with Wordpress + PHP]

# Introduction 

Project developed in order to bring a list of products in a data request.

This project is developed with wordpress to be able to use the dashboard and your functions, sass to have a good way to develop cascading stylesheets, javascript for some necessities and php to intregrate with database and do the hard work.

In the home page, ww'll have 4 sections of products:
  1.  Products coming from a GET url request.
  2.  Products created by POST with wordpress.
  3.  Products coming from Database.
  4.  Add products to Database.

# How to Create a POST with wordpress.

  - Add Name and information about the product. [image 1]
  - Add image to product. [image 2]
  
  <img width="1440" alt="Create post product" src="https://user-images.githubusercontent.com/11212886/183641064-633760f2-6ba2-4f62-a5f7-dc438a202c03.png">
  

[#Note] - To add images SVG, first we need to put in the first line this code: <svg xmlns="http://www.w3.org/2000/svg" id="lotto24" viewBox="0 0 64 64">
  
  <img width="1095" alt="Screen Shot 2022-08-09 at 14 02 05" src="https://user-images.githubusercontent.com/11212886/183642234-8606072e-aa24-46ab-81d2-9c2bf8ac42e2.png">
  
  
## How to install

  - First we need to download <a href="https://wordpress.org/download/" target="__blank">wordpress</a>.
  - After download, put this folder on htdocs (if you are using XAMPP) or www (if you are using WAMPP).
  - Duplicate wp-config-sample.php, rename to wp-config.php and put the informations about your application.
  - Then you can go to wp-content/themes and past this archive. [*note] To aplly the front-end, you'll have to change the folder name to "lotto".
  - [Tip 2] Past the folders [uploads] and [plugins] in wp-content/. So the folders composing this tree is [themes], [plugins], [uploads].

## Tips
  
  - To import the sql data, is good to replace all name related of your database name to other with your preferences.
  - 2 - I'll send the plugin and upload folders with the uploaded images and plugin editor. 
  



Enjoy the project! :D


