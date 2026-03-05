# Faker PHP Thai

Faker PHP provider for Thai language

## Installation

```
composer require titipat/faker-php-thai
```

## Usage

### Standalone

```php
$faker = \Faker\Factory::create('th_TH');
$faker->addProvider(new \Titipat\Faker\Provider\th_TH\Text($faker));

echo $faker->text();
```

### Laravel

```php
// Your service provider, e.g. App\Providers\AppServiceProvider

use Faker\Generator;

public function boot(): void
{
    $this->app->extend(Generator::class, function (Generator $faker) {
        $faker->addProvider(new \Titipat\Faker\Provider\th_TH\Text($faker));
        return $faker;
    });

    $this->app->bind(
        Generator::class . ":" . config("app.faker_locale", "th_TH"),
        Generator::class,
    );
}
```

```php
echo fake()->text();
```


```blade
<div>{{ fake()->text() }}</div>
```

## Available formatters

### Titipat\Faker\Provider\th_TH\Text

```php
text($maxNbChars = 200); // ดังจะเห็นได้จากศาลเทพเจ้าขนาดใหญ่ที่มีผู้คนจำนวนมากเข้าไปสักการะกราบไหว้ กล่าวโดยสรุป คติความเชื่อเรื่องเทวดาหรือเทพเจ้าในสังคมไทยนี้มีมาแต่ครั้งก่อนสถาปนาอาณาจักรสุโขทัย
```
