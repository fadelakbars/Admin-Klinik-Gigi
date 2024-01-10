<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'tgl_lahir' => $this->faker->date,
            'umur' => $this->faker->numberBetween(1, 100),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'no_tlp' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'tgl_kunjungan' => $this->faker->date,
            'diagnosa' => $this->faker->text,
            'terapi' => $this->faker->text,
            'keterangan' => $this->faker->text,
            'biaya' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
