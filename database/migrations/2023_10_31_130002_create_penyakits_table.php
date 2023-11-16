<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyakits', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 10)->unique();
            $table->string('nama', 50);
            $table->string('sumber', 50);
            $table->string('penjelasan', 500)->nullable();
            $table->string('pencegahan', 500)->nullable();
            $table->timestamps();
        });

        DB::table('penyakits')->insert([
            ['created_at' => now(), 'updated_at' => now(), 'id' => 1, 'kode' => 'P1', 'nama' => 'Rabies', 'sumber' => 'Virus', 'penjelasan' => 'Rabies adalah penyakit virus yang menyerang sistem saraf. Sumber utamanya adalah gigitan hewan terinfeksi, terutama anjing. Gejalanya melibatkan perubahan perilaku, kejang, dan kesulitan menelan. Rabies berpotensi fatal dan sangat berbahaya bagi manusia jika tidak segera diobati.', 'pencegahan' => 'Pencegahan dilakukan melalui vaksinasi rutin, sementara pengobatan jarang berhasil, namun vaksinasi segera setelah terpapar dapat mencegah perkembangan penyakit.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 2, 'kode' => 'P2', 'nama' => 'Hepatitis', 'sumber' => 'Virus', 'penjelasan' => 'Hepatitis pada anjing disebabkan oleh adenovirus tipe 1. Sumbernya termasuk urine dan cairan tubuh hewan yang terinfeksi. Gejalanya melibatkan muntah, diare, dan gangguan hati. Meskipun kurang berbahaya bagi manusia, hepatitis dapat menyebabkan penyakit serius pada anjing.', 'pencegahan' => 'Pencegahan utamanya adalah melalui vaksinasi, sedangkan pengobatan bersifat suportif dengan penggunaan antibiotik dan terapi cairan.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 3, 'kode' => 'P3', 'nama' => 'Distemper', 'sumber' => 'Virus', 'penjelasan' => 'Distemper adalah penyakit viral yang menyerang sistem pernapasan dan pencernaan anjing. Sumbernya adalah kontak langsung dengan sekresi dari hewan yang terinfeksi. Gejala mencakup demam, batuk, dan diare. Distemper dapat berakibat fatal dan memerlukan perhatian medis segera.', 'pencegahan' => 'Vaksinasi efektif sebagai cara utama pencegahan, dan pengobatan umumnya bersifat suportif dengan penggunaan antibiotik dan terapi simptomatik.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 4, 'kode' => 'P4', 'nama' => 'Canine Parvovirus', 'sumber' => 'Virus', 'penjelasan' =>'Canine Parvovirus menyebabkan penyakit serius pada saluran pencernaan anjing dan dapat menular melalui kotoran hewan yang terinfeksi. Gejala termasuk muntah, diare berdarah, dan dehidrasi. Parvovirus dapat berbahaya bagi anjing muda dan tidak diobati, dapat berakibat fatal.', 'pencegahan' => 'Pencegahan dapat dilakukan melalui vaksinasi dan menjaga kebersihan lingkungan, sedangkan pengobatan melibatkan perawatan suportif, termasuk hidrasi intravena dan pengendalian muntah.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 5, 'kode' => 'P5', 'nama' => 'Papilomatosis', 'sumber' => 'Virus', 'penjelasan' => 'Papilomatosis disebabkan oleh virus dan menyebabkan pertumbuhan benjolan di kulit atau mukosa anjing. Penularan terjadi melalui kontak langsung. Meskipun tidak berbahaya bagi manusia, papilomatosis dapat menyebabkan ketidaknyamanan dan memerlukan perawatan veterinari.', 'pencegahan' => 'Pencegahan dapat dicapai melalui vaksinasi, sementara pengobatan mungkin melibatkan pembedahan atau penghilangan lesi, dan dalam banyak kasus, lesi dapat menghilang dengan sendirinya.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 6, 'kode' => 'P6', 'nama' => 'Herpesvirus', 'sumber' => 'Virus', 'penjelasan' => 'Herpesvirus pada anjing dapat menyebabkan infeksi pernapasan dan sistem reproduksi. Penularan terjadi melalui kontak langsung dengan hewan terinfeksi. Gejala melibatkan demam, bersin, dan keguguran pada anjing betina. Virus ini tidak umumnya berbahaya bagi manusia.', 'pencegahan' => 'Pencegahan melibatkan manajemen stres dan vaksinasi, sedangkan pengobatan umumnya bersifat suportif, termasuk antibiotik untuk mengatasi infeksi sekunder.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 7, 'kode' => 'P7', 'nama' => 'Leptospirosis', 'sumber' => 'Bakteri', 'penjelasan' => 'Leptospirosis disebabkan oleh bakteri dan dapat menyebar melalui urine hewan terinfeksi. Gejalanya termasuk demam, muntah, dan gangguan ginjal. Leptospirosis dapat berbahaya bagi manusia melalui kontak dengan air atau tanah terkontaminasi.', 'pencegahan' => 'Pencegahan terutama dilakukan melalui vaksinasi dan menghindari air yang terkontaminasi, sementara pengobatan melibatkan penggunaan antibiotik seperti doxycycline.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 8, 'kode' => 'P8', 'nama' => 'Dirofilaria immitis', 'sumber' => 'Bakteri', 'penjelasan' => 'Dirofilaria immitis, atau cacing jantung, ditularkan melalui gigitan nyamuk. Gejalanya melibatkan batuk, kelelahan, dan gagal jantung. Meskipun tidak menular langsung antarmanusia, cacing jantung dapat berbahaya bagi kesehatan anjing.', 'pencegahan' => 'Pencegahan melibatkan penggunaan obat cacing dan vaksinasi, sedangkan pengobatan memerlukan terapi cacing dan pengelolaan simptomatik.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 9, 'kode' => 'P9', 'nama' => 'Scabies', 'sumber' => 'Kutu', 'penjelasan' => 'Scabies adalah infestasi kulit yang disebabkan oleh tungau. Penularannya melalui kontak langsung atau alat-alat yang terkontaminasi. Gejalanya termasuk gatal, kerontokan bulu, dan kulit meradang. Meskipun tidak umum menyerang manusia, beberapa jenis tungau dapat menyebabkan reaksi kulit pada manusia.', 'pencegahan' => 'Pencegahan dapat dicapai melalui praktik kebersihan dan pengobatan anti-parasit, sedangkan pengobatan umumnya mencakup penggunaan obat anti-kutu dan pengelolaan gatal.'],
            ['created_at' => now(), 'updated_at' => now(), 'id' => 10, 'kode' => 'P10', 'nama' => 'Pruritus', 'sumber' => 'Bakteri', 'penjelasan' => 'Pruritus adalah kondisi gatal pada kulit anjing yang dapat disebabkan oleh berbagai faktor, termasuk alergi dan infeksi. Gejala melibatkan gatal intens, menjilat atau menggigit diri, dan kulit merah. Pruritus tidak menular dan biasanya tidak berbahaya bagi manusia.', 'pencegahan' => 'Pencegahan terfokus pada perawatan kulit yang baik, sedangkan pengobatan melibatkan identifikasi dan penanganan penyebabnya, penggunaan anti-gatal, dan terapi khusus kulit.'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakits');
    }
};
