<?php
/**
 * Class BookFinderService
 *
 * @package App
 * @author  Emily Stamey
 */

namespace Library;

use Scriptotek\GoogleBooks\GoogleBooks;



class BookFinderService
{
    public static function connect() {

        $books = new GoogleBooks();

        $count = 0;

        $books->volumes->search()
        foreach ($books->volumes->search('Pax') as $vol) {
            echo $vol->title . "\n";
            $count++;
        }

        echo "Found " . $count . " books\n";
    }

    public function


}