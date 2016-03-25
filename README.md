# simple-html-dom
Add library Simple html dom to Laravel 5. 
More document: http://simplehtmldom.sourceforge.net/


## Installation

Add the following line to the `require` section of `composer.json`:

```json
{
    "require": {
        "cucxabeng/simple-html-dom": "dev-master"
    }
}
```

## Laravel 5 Setup (same as Laravel 4)

1. Add the service provider to `config/app.php`:

```php
'providers' => array(
    ...
	'cucxabeng\HtmlDom\HtmlDomServiceProvider',
    ...
```
2. Add alias to `config/app.php`:

```php
'aliases' => array(	
    ...
	'HtmlDom' => 'cucxabeng\HtmlDom\HtmlDom',
    ...
```

## Usage

```php
$dom = new \HtmlDom('http://www.example.com');
//or
$dom = new \HtmlDom('<p>Hello</p>');
```
