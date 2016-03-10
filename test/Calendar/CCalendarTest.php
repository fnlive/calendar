<?php

namespace Fnlive\Calendar;

use \DateTime;

/**
 * Contact Form, with storage and administration of submitted messages and visitors contact details.
 * Class for contactform model.
 */
class CCalendarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test
     *
     * @return void
     *
     */
    public function testCreateCalendar()
    {
        $el = new \Fnlive\Calendar\CCalendar("2016-03-08");
        $res = $el->thisMonth();
        $exp = "March 2016";
        $this->assertEquals($res, $exp, "Created calendar month missmatch.");
    }
    public function testToday()
    {
        $el = new \Fnlive\Calendar\CCalendar();

        $res = $el->today();
        // Expected format "onsdag 09 mars 2016";
        $today = new DateTime();
        $exp = utf8_encode(strftime("%A %d %B %Y", strtotime($today->format('Y-m-d'))));
        $this->assertEquals($res, $exp, "Today date missmatch.");
    }
    public function testPrevNextMonth()
    {
        $el = new \Fnlive\Calendar\CCalendar("2016-03-08");
        $res = $el->prevMonth();
        $exp = "February";
        $this->assertEquals($res, $exp, "Prev month missmatch.");

        $res = $el->nextMonth();
        $exp = "April";
        $this->assertEquals($res, $exp, "Next month missmatch.");

        $res = $el->prevMonthDate();
        $exp = "2016-02-01";
        $this->assertEquals($res, $exp, "Prev month date missmatch.");

        $res = $el->nextMonthDate();
        $exp = "2016-04-01";
        $this->assertEquals($res, $exp, "Next month date missmatch.");
    }
    public function testDatesInMonth()
    {
        // Get month which don't hold todays date.
        $el = new \Fnlive\Calendar\CCalendar("2015-03-08");
        $res = $el->datesInMonth();

        // Set subset of expected monthly dates
        $exp = [
            9 =>
            [
            "week"=>"10",
            "date"=>"04 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            10 =>
            [
            "week"=>"10",
            "date"=>"05 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            11 =>
            [
            "week"=>"10",
            "date"=>"06 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            12 =>
            [
            "week"=>"10",
            "date"=>"07 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            13 =>
            [
            "week"=>"10",
            "date"=>"08 Mar",
            "class-red"=>"red-day",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            14 =>
            [
            "week"=>"11",
            "date"=>"09 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            15 =>
            [
            "week"=>"11",
            "date"=>"10 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
            16 =>
            [
            "week"=>"11",
            "date"=>"11 Mar",
            "class-red"=>"",
            "class-today"=>"",
            "class-in-month"=>"class-inside-month",
            ],
        ];
        for ($i=9; $i < 17; $i++) {
            $this->assertEquals($res[$i], $exp[$i], "Date missmatch.");
        }
        // Assert two date outside of current month
        $exp =
        [ 38 =>
            [
                "week"=>"14",
                "date"=>"02 Apr",
                "class-red"=>"",
                "class-today"=>"",
                "class-in-month"=>"class-outside-month",
            ],
        ];
        $this->assertEquals($res[38], $exp[38], "Date missmatch.");
        $exp =
        [ 1 =>
            [
                "week"=>"9",
                "date"=>"24 Feb",
                "class-red"=>"",
                "class-today"=>"",
                "class-in-month"=>"class-outside-month",
            ],
        ];
        $this->assertEquals($res[1], $exp[1], "Date missmatch.");
        // echo "<br>" . __FILE__ . " : " . __LINE__ . "<br>";var_dump($res);

    }
}
