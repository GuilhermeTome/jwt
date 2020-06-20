# Jwt class

![GitHub last commit](https://img.shields.io/github/last-commit/GuilhermeTome/readme-template) ![GitHub repository size](https://img.shields.io/github/repo-size/GuilhermeTome/readme-template?color=blue)

This project is just a simple template for readme files and have your github project very well documented and explained.

## Summary

- [Getting started](#getting-started)
- [Prerequisites](#prerequisites)
- [Installing](#installing)
- [How to use](#how-to-use)
- [Contributing](#contributing)
- [License](#license)

## Getting started

* In this place you can put a simple introduction to your project

### Prerequisites

- PHP >= 7.2
- Composer

### Installing

You can clone the project with this command:

- Clone repository:
```
git clone https://github.com/GuilhermeTome/jwt
```
- Install in your project:
```
composer require guilhermetome/jwt
```

## How to use

- Only clone project and use like a template to build very good README.md docs to your projects.

### Declare the jwt key

- In you application you need to create a const like this:

```
<?php

// the key of the application
define('JWT_SECRET', 'mysecret');
```

### Generate the jwt key

- @param array
- @return string
```
<?php

use GuilhermeTome\Jwt;

echo Jwt::encode([
    'user' => 'Guilherme',
    'email' => 'email@gmail.com',
    'pass' => 'MyPassword'
]);
```

### Decode the jwt key

- @param string
- @return array|false
```
<?php

use GuilhermeTome\Jwt;

echo Jwt::decode($key);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change. Please make sure to update tests as appropriate.

## License

This project is licensed under the MIT Licence - see the [MIT Licence](https://choosealicense.com/licenses/mit/) for more details

