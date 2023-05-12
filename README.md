# Solar-History-Library-PHP
Solar date library for php

# Installing 
run command :
```bash
composer require dark-calendar/solar-history-library-php
```

# use
Create new Object:
```php
$dateSolar = new DarkCalendar\SolarDate\SolarDateService();
```

Or use Facade:
```php
\DarkCalendar\SolarDate\SolarDate::class;
```

**In Facades, you can access class methods statically.**

# Methods
## date
```phpt
array|string date($format, string|int $timestamp = '', string|int $none = '', string $time_zone = 'Asia/Tehran', string $tr_num = 'fa')
```

