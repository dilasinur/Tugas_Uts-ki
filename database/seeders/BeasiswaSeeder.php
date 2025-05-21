namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Beasiswa::create([
            'nama' => 'Beasiswa Unggulan',
            'jenis' => 'akademik',
            'kuota' => 50,
            'tanggal_mulai' => '2025-06-01',
            'tanggal_selesai' => '2025-06-30',
        ]);

        Beasiswa::create([
            'nama' => 'Beasiswa Non-Akademik',
            'jenis' => 'non-akademik',
            'kuota' => 30,
            'tanggal_mulai' => '2025-07-01',
            'tanggal_selesai' => '2025-07-31',
        ]);
    }
}
