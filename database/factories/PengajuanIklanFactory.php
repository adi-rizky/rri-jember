<?php

namespace Database\Factories;
use App\Models\PengajuanIklan;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PengajuanIklan>
 */
class PengajuanIklanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = PengajuanIklan::class;
    public function definition()
    {
        $start = now()->subMonths(6); // mulai dari 6 bulan yang lalu
        $end = now(); // hingga sekarang

        return [
            // 'user_id' => \App\Models\User::factory(),
            'user_id' => $this->faker->numberBetween(1, 100),
            'nama_lengkap' => $this->faker->name,
            'nama_usaha' => $this->faker->company,
            'nomor_telepon' => $this->faker->phoneNumber,
            'paket_iklan' => $this->faker->word,
            'kategori_iklan' => $this->faker->word,
            'harga' => $this->faker->randomNumber(5),
            'unggah_materi' => $this->faker->optional()->imageUrl(),
            'bukti_pembayaran' => $this->faker->optional()->imageUrl(),
            'catatan_tambahan' => $this->faker->optional()->text,
            'status' => $this->faker->randomElement(['belum di proses', 'sedang di proses', 'sudah selesai']),
            'created_at' => $this->faker->dateTimeBetween($start, $end),
            'updated_at' => $this->faker->dateTimeBetween($start, $end),
        ];
    }
}
