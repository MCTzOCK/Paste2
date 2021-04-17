# Paste 2
Paste 2 is a simple Paste Server (like Hastebin).

## Installation

### Requirements
- Web Server (Apache2/Nginx)
- PHP^6

### Download
```bash
# !! first cd to the directory you want to install Paste 2 to !!
git clone https://github.com/MCTzOCK/Paste2.git 
cp -r Paste2/src/* . && rm -rf Paste2
```

### Config Setup
The Config File is src/config.php

Sample Config:
```php
<?php
/**
 * @author MCTzOCK
 * @copyright Copyright (c) 2018-2021 MCTzOCK. This Project is licensed under the GNU Public License version 3
 * @version 2.1
 */

/* Change this to your url */
$baseUrl = "https://mctzock.de/p/";

/* Change this */
$maxLetterCount = 4096;

/* Change this to your paste directory depending on the base url */
$baseDirectory = "../p";
```

### End-Setup
You need to create the folder that you have set in the config:
```php
/* Change this to your paste directory depending on the base url */
$baseDirectory = "../p";
```

Everything is finished and you should be able to use the paste server. Enjoy :)
