<?php
/**
 * This is a Anax pagecontroller.
 *
 */

// Get environment & autoloader and the $app-object.
require __DIR__.'/config.php';

// Create services and inject into the app.
$di  = new \Anax\DI\CDIFactory();



$app = new \Anax\MVC\CApplicationBasic($di);

$app->theme->configure(ANAX_APP_PATH . 'config/theme_me.php');

// On production server, set pretty urls and use rewrite in .htaccess
$app->url->setUrlType(
    ($_SERVER['SERVER_NAME']=='localhost') ?
    \Anax\Url\CUrl::URL_APPEND : \Anax\Url\CUrl::URL_CLEAN
);


$app->router->add('', function () use ($app) {
    $app->theme->setTitle("Calendar test");

    $app->views->add('default/page', [
        'title' => "Testing calendar portal",
        'content' => "Page for testing calendar. Click below link for calendar.",
        'links' => [
            [
                'href' => $app->url->create('calendar'),
                'text' => "Calendar",
            ],
        ],
    ]);
});

// Route to calendar
$app->router->add('calendar', function () use ($app) {
    $app->theme->addStylesheet('css/calendar.css');
    $app->theme->setTitle("Calendar");

    $today = new DateTime();
    $date = $app->request->getGet('date', $today->format('Y-m-d'));
    $calendar = new \Fnlive\Calendar\CCalendar($date);

    $app->views->add('calendar/index', [
        'prevMonth' => $calendar->prevMonth(),
        'nextMonth' => $calendar->nextMonth(),
        'prevMonthDate' => $calendar->prevMonthDate(),
        'nextMonthDate' => $calendar->nextMonthDate(),
        'thisMonth' => $calendar->thisMonth(),
        'dates' => $calendar->datesInMonth(),
    ]);

});


$app->router->handle();

// Render the response using theme engine.
$app->theme->render();
