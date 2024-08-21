<?php declare(strict_types=0);

use PHPUnit\Framework\TestCase;
use App\Model\ModelFilm;

final class filmTest extends TestCase {

    public function testFilmReturnArray()
    {
        $model = new ModelFilm();
        $films = $model->selectFilms();
        $this->assertIsArray($films);
    }

    public function testFilmNotNull()
    {
        $model = new ModelFilm();
        $films = $model->selectFilms();
        $this->assertNotNull($films);
    }

    public function testFilmCount()
    {
        $model = new ModelFilm();
        $films = $model->selectFilms();
        $this->assertCount(10, $films);
    }
}