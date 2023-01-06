# Futaba-eki
Futaba-eki is an imageboard engine forked from Fikaba meant to look visually the same to the original futaba script.

[See here for info on migrating from Futallaby](https://github.com/knarka/fikaba/blob/master/docs/migrate.md)

The name 双葉駅 (commonly romanized as futaba-eki) is a reference to futaba station. The name itself was chosen due to futallaby's history with 1chan.net.

(the rest of this README is still straight from fikaba)

## Features
* Valid HTML5
* Fairly advanced admin/moderator/janitor panel
* [JSON API](https://github.com/knarka/fikaba/blob/master/docs/api.md)
* Tripcodes, capcodes
* Highly configurable
* Post references
* Oekaki
* [...and more](https://github.com/knarka/fikaba/blob/master/docs/features.md)

## Installation
This guide assumes you have a webserver with PHP (7.0 at least) already installed. Fikaba has only been tested on Apache, but should work on any server.

1. Clone the files from this repository into a folder on your webserver and set the permissions of that folder to 777
2. Edit/move config.example.php to config.php and edit it
3. If you want to use oekaki, execute `git submodule update --init --recursive`.
4. Navigate to imgboard.php in your browser
5. Log in to the default admin account (password REPLACEME) and create a new account. The default one will be automatically removed
6. Pour yourself some puerh and admire your professional adminship

## License
See the file LICENSE.
