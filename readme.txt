1- in document .htaccess in line four is the directory where the system gonna show the views,
if the file cannot be found there, it gonna be redirect to the directory in line six.

2-on public/.htaccess;
line 1: we allow the write that by default it comes disabled
line 2 and 3 : Makes riqueres of directories and folders and rewrite them returning
to index.php on line 4. This settings is made because if someone try to access any folder
only be allowed if have some index.php file there, otherwise will not be allowed and 
gonna be redirected to the index.php in root directory.

3- The file composer.json came with an empty string in line 3, searching on internet
I found a solution that was to put a "cms" there, and it worked! this allowed me to create
the vendor folder with command (composer dump) in bash terminal.

4- The vendor folder won't be committed on github, you must to commit it only if the
structure is finished, but when you're working in a project that goes beyond of its
structure don't commit it.