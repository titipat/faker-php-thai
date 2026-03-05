# Faker PHP Thai

Faker PHP provider for Thai language

## Installation

```
composer require titipat/faker-php-thai
```

## Usage

```php
$faker = \Faker\Factory::create('th_TH');
$faker->addProvider(new \Titipat\Faker\Provider\th_TH\Text($faker));

echo $faker->text();
```

## Available formatters

### Titipat\Faker\Provider\th_TH\Text

```php
text($maxNbChars = 200); // ดังจะเห็นได้จากศาลเทพเจ้าขนาดใหญ่ที่มีผู้คนจำนวนมากเข้าไปสักการะกราบไหว้ กล่าวโดยสรุป คติความเชื่อเรื่องเทวดาหรือเทพเจ้าในสังคมไทยนี้มีมาแต่ครั้งก่อนสถาปนาอาณาจักรสุโขทัย
```
