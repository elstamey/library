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

    /**
     * @var
     */
    protected $books;

    /**
     * Connect - to Google Books API
     *
     * @throws \Exception
     */
    protected function connect()
    {
        try {
            $this->books = new GoogleBooks();
        } catch (Exception $e) {
            throw new \Exception('Could not connect to Google Books API', 500);
        }

    }

    /**
     *
     * @throws \Exception
     */
    public function searchByIsbn($isbn)
    {
        $this->books = $this->connect();

        $count = 0;
        foreach ($books->volumes->byIsbn($isbn) as $vol) {
            echo $vol->title . "\n";
            $count++;
        }

        echo "Found " . $count . " books\n";
    }

    /**
     *
     * @throws \Exception
     */
    public function searchByKeyword($keyword)
    {
        $this->books = $this->connect();

        $count = 0;
        foreach ($books->volumes->search($keyword) as $vol) {
            echo $vol->title . "\n";
            $count++;
        }

        echo "Found " . $count . " books\n";
    }


}