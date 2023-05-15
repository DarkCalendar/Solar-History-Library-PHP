# Solar-History-Library-PHP
![](https://banners.beyondco.de/Solar%20Date.png?theme=dark&packageManager=composer+require&packageName=dark-calendar/solar-history-library-php&pattern=architect&style=style_1&description=Solar+date+library+for+PHP&md=1&showWatermark=1&fontSize=100px&images=calendar)
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

