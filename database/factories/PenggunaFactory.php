<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use App\Models\role;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected static ?string $password;

    public function definition(): array
    {

        return [
            'role_id' => role::inRandomOrder()->value('id') ?? 1,
            'username' => Str::lower($this->faker->unique()->lexify('???????????????')),
            'password' => static::$password ??= Hash::make('password'),
            'nama_pengguna' => $this->faker->name(),
            'jk' => $this->faker->randomElement(['L', 'P']),
            'telp' => '08' . mt_rand(100000000, 999999999),
        ];
    }
}
