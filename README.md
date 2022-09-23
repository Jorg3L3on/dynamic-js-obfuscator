# dynamic-js-obfuscator
# Obfuscate JavaScript files dynamically in php
I made this example in pure php using the the library [assetic](https://github.com/assetic-php/assetic).
You will need the folowing tools:
| Tool | URL |
| ------ | ------ |
| Xampp | https://www.apachefriends.org/es/download.html|
| Composer | https://getcomposer.org/download/ |

Clone the repository and run: 

```sh
composer update
```
Edit the file PackerFilter.php on line 15 to add the encoding type
``` php
    protected $encoding = 62;
```
✨ And now the js files in the assets/js folder will be obfuscated ✨
