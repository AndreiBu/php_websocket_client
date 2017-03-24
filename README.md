PHP WebSocket Client  
==========


## Installation

```
composer require andreibu/php_websocket_client
```

## Laravel 5

### Setup

Add ServiceProvider to the providers array in `config/app.php`.

```

   'providers' => [
    ...
	AndreiBu\php_websocket_client\WSServiceProvider::class,
	
	],
	
   'aliases' => [
    ...
    
	'PHP_WS' => AndreiBu\php_websocket_client\Facades\PHP_WS::class,
	],
	
```


### Configuration


```php
    host
    port=
    path=

```

### Usage

##### send

```php

```






## Contribute

https://github.com/AndreiBu/php_websocket_client/pulls
