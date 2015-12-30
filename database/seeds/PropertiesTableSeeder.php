<?php

use Illuminate\Database\Seeder;
use App\Property;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class PropertiesTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker\Factory::create();

		for ($i=0; $i < 3; $i++) {
			$property = [
				'streetAddress' => $faker->streetAddress,
				'city' => $faker->city,
				'state' => $faker->state,
				'zipcode' => $faker->postcode,
			];

			$property['slug'] =  static::slugify($property['streetAddress'] . ' ' . $property['city'] . ' ' . $property['state'] . ' ' . $property['zipcode']);

			Property::create($property);
		}
	}

	static public function slugify($text)
	{
		// replace non letter or digits by -
		$text = preg_replace('~[^\\pL\d]+~u', '-', $text);

		// trim
		$text = trim($text, '-');

		// transliterate
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		// lowercase
		$text = strtolower($text);

		// remove unwanted characters
		$text = preg_replace('~[^-\w]+~', '', $text);

		if (empty($text))
		{
			return 'n-a';
		}

		return $text;
	}
}
