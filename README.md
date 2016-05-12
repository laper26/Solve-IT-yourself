# Expert system website: "Solve IT yourself"

## Install
As the first step you need to set up a webserver, for example XAMPP is a good idea to test webapps on localhost.

Then you need to download our git-repository via the github-website, via git-console or via a git-tool.

Post our files to the filesystem of your webserver. You can also use a subdirectory.

Set up a MySQL-Server. For example XAMPP integrates phpMyAdmin. Create the MySQL-Database by importing the file "soy.sql".

Next you need to edit the file "lib/config.example.php" and insert your login-data. Save your file as "lib/config.php".

You're done! Next read Usage and test the application.

## Usage
Go to the root directory of our application on your browser. The website should pop up without errors. 

If you have more than one question-catalog, you can select your favotire one. Otherwies there's one pre-selected.

You see a question and you can click on the answer you like. This is a link to the following question or solution. 

Your problem should be solved then!
