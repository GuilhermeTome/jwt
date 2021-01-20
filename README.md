# Jwt class

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/GuilhermeTome/jwt/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/GuilhermeTome/jwt/?branch=master)
![GitHub last commit](https://img.shields.io/github/last-commit/GuilhermeTome/jwt)
![GitHub repository size](https://img.shields.io/github/repo-size/GuilhermeTome/jwt?color=blue)
[![Build Status](https://scrutinizer-ci.com/g/GuilhermeTome/jwt/badges/build.png?b=master)](https://scrutinizer-ci.com/g/GuilhermeTome/jwt/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/GuilhermeTome/jwt/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

This project is just a simple JWT class to add to your project and can be configured using contants.

## Summary

- [Prerequisites](#prerequisites)
- [Installing](#installing)
- [How to use](#how-to-use)
- [Contributing](#contributing)
- [License](#license)


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

- Only follow the docs.

### Declare the jwt key

- In you application you need to create a const like this:

```
<?php

// the key of the application
define('JWT_SECRET', 'mysecret');

// the hash of the jwt
define('JWT_HASH', 'sha256');

// the alg to put in header
define('JWT_ALG', 'HS256');
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

