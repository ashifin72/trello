<?php
namespace Modules\AshDesks\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\AshDesks\Entities\Card::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name'=>$this->faker->name,
          'desk_list_id'=> rand(1, 10)
        ];
    }
}

