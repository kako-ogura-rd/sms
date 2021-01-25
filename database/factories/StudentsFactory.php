<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $min = 18;
        $max = 100;
        $age = mt_rand($min,$max);
        $major_type = $this->faker->randomElement([
            'computer science',
            'information technology',
            'physics',
            'business',
            'art',
            'dance',
            'design',
            'digital arts',
            'drama',
            'music',
            'film studies',
            'applied math',
            'agriculture science',
            'chemistry',
            'geology',
            'genetics',
            'animal science',
            'biology',
            'psychology',
            'physiology'
            ]);
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'age' => $age,
            'major' => $major_type,
            'subject',
            'subject_type',
            'credit'
        ];
    }
}
