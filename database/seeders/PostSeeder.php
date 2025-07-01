<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get first user to associate with posts
        $user = User::first();
        if (!$user) {
            // Create a user if none exists
            $user = User::factory()->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
            ]);
        }

        // Get all categories and tags
        $categories = Category::all();
        $tags = Tag::all();

        $posts = [
            [
                'title' => 'Cara Membuat Aplikasi Mobile dengan Flutter',
                'slug' => 'cara-membuat-aplikasi-mobile-dengan-flutter',
                'excerpt' => 'Panduan lengkap untuk pemula dalam membuat aplikasi mobile cross-platform menggunakan Flutter.',
                'content' => 'Flutter adalah framework open-source yang dikembangkan oleh Google untuk membangun aplikasi mobile, web, dan desktop dari satu codebase. Artikel ini akan membahas langkah-langkah dasar dalam memulai pengembangan aplikasi mobile dengan Flutter.

                Pertama, Anda perlu menginstal Flutter SDK dan mengatur environment development Anda. Kemudian, kita akan membahas konsep dasar seperti widget, state management, dan navigasi. Flutter menggunakan bahasa pemrograman Dart yang relatif mudah dipelajari jika Anda sudah familiar dengan bahasa pemrograman berorientasi objek lainnya.

                Widget adalah blok pembangun utama dalam Flutter. Semua UI dalam Flutter terdiri dari kombinasi berbagai widget. Ada dua jenis widget utama: StatelessWidget dan StatefulWidget, tergantung pada apakah UI Anda perlu menyimpan state atau tidak.

                Dengan mengikuti tutorial ini, Anda akan dapat membuat aplikasi mobile pertama Anda yang berjalan baik di platform Android maupun iOS.',
                'published' => true,
                'published_at' => now(),
                'categories' => [1], // Teknologi
                'tags' => [1, 4], // Tutorial, Tips
            ],
            [
                'title' => '5 Makanan Sehat untuk Meningkatkan Daya Tahan Tubuh',
                'slug' => '5-makanan-sehat-untuk-meningkatkan-daya-tahan-tubuh',
                'excerpt' => 'Daftar makanan yang dapat membantu meningkatkan sistem imun tubuh Anda.',
                'content' => 'Menjaga daya tahan tubuh sangat penting, terutama di masa pandemi seperti sekarang. Salah satu cara untuk meningkatkan sistem imun adalah dengan mengonsumsi makanan yang tepat.

                Berikut adalah 5 makanan yang terbukti secara ilmiah dapat membantu meningkatkan daya tahan tubuh:

                1. Jeruk dan buah-buahan kaya vitamin C lainnya. Vitamin C membantu meningkatkan produksi sel darah putih, yang merupakan kunci untuk melawan infeksi.

                2. Bayam dan sayuran hijau lainnya. Kaya akan antioksidan dan beta karoten, yang dapat meningkatkan kemampuan sistem kekebalan untuk melawan infeksi.

                3. Yogurt. Probiotik dalam yogurt dapat membantu menjaga kesehatan saluran pencernaan, yang berperan penting dalam kekebalan tubuh.

                4. Bawang putih. Mengandung senyawa seperti allicin yang memiliki sifat antimikroba dan antivirus.

                5. Kunyit. Mengandung kurkumin yang memiliki sifat anti-inflamasi dan antioksidan yang kuat.

                Konsumsi makanan-makanan ini secara teratur dapat membantu menjaga kesehatan tubuh Anda secara keseluruhan.',
                'published' => true,
                'published_at' => now()->subDays(2),
                'categories' => [2], // Kesehatan
                'tags' => [4, 5], // Tips, Indonesia
            ],
            [
                'title' => 'Metode Pembelajaran Jarak Jauh yang Efektif',
                'slug' => 'metode-pembelajaran-jarak-jauh-yang-efektif',
                'excerpt' => 'Berbagai metode dan strategi untuk meningkatkan efektivitas pembelajaran online bagi siswa dan pengajar.',
                'content' => 'Pembelajaran jarak jauh telah menjadi norma baru dalam dunia pendidikan saat ini. Namun, banyak pengajar dan siswa yang masih kesulitan beradaptasi dengan metode pembelajaran ini. Artikel ini akan membahas beberapa strategi yang dapat meningkatkan efektivitas pembelajaran jarak jauh.

                Pertama, penting untuk menciptakan rutinitas yang konsisten. Baik bagi pengajar maupun siswa, memiliki jadwal yang teratur dapat membantu menciptakan struktur dan disiplin dalam pembelajaran online.

                Kedua, gunakan berbagai alat digital untuk membuat pembelajaran lebih interaktif. Platform seperti Kahoot, Mentimeter, atau Padlet dapat membuat siswa lebih terlibat dalam proses pembelajaran.

                Ketiga, berikan umpan balik secara teratur. Umpan balik yang konstruktif dan tepat waktu sangat penting dalam pembelajaran jarak jauh karena siswa tidak dapat melihat reaksi langsung dari pengajar.

                Keempat, dorong kolaborasi antar siswa melalui proyek kelompok atau diskusi online. Ini dapat membantu mengurangi perasaan isolasi yang sering dialami dalam pembelajaran jarak jauh.

                Terakhir, jangan lupa untuk menjaga kesehatan mental. Pembelajaran jarak jauh dapat menjadi melelahkan, jadi penting untuk mengambil istirahat secara teratur dan menjaga keseimbangan antara waktu layar dan aktivitas offline.',
                'published' => true,
                'published_at' => now()->subDays(5),
                'categories' => [3], // Pendidikan
                'tags' => [1, 3, 4], // Tutorial, Populer, Tips
            ],
            [
                'title' => 'Resep Nasi Goreng Spesial ala Indonesia',
                'slug' => 'resep-nasi-goreng-spesial-ala-indonesia',
                'excerpt' => 'Cara membuat nasi goreng khas Indonesia yang lezat dan mudah diikuti.',
                'content' => 'Nasi goreng adalah salah satu makanan khas Indonesia yang terkenal di seluruh dunia. Hidangan sederhana namun lezat ini dapat dinikmati kapan saja, baik untuk sarapan, makan siang, atau makan malam.

                Bahan-bahan:
                - 2 piring nasi putih (lebih baik jika nasi kemarin yang sudah dingin)
                - 2 siung bawang putih, cincang halus
                - 3 siung bawang merah, cincang halus
                - 2 buah cabai merah, iris halus (sesuaikan dengan selera)
                - 1 sendok makan kecap manis
                - 1 sendok teh garam
                - 1/2 sendok teh merica bubuk
                - 1 butir telur
                - 100 gram daging ayam, potong dadu kecil
                - 2 sendok makan minyak goreng untuk menumis
                - Daun bawang, tomat, dan timun untuk garnish
                - Kerupuk sebagai pelengkap

                Cara Membuat:
                1. Panaskan minyak di wajan, tumis bawang putih dan bawang merah hingga harum.
                2. Tambahkan cabai merah, tumis sebentar.
                3. Masukkan potongan ayam, masak hingga berubah warna.
                4. Sisihkan tumisan ke pinggir wajan, masukkan telur dan aduk hingga setengah matang.
                5. Masukkan nasi, aduk rata dengan tumisan dan telur.
                6. Tambahkan kecap manis, garam, dan merica. Aduk hingga semua bumbu tercampur rata dan nasi berwarna kecoklatan.
                7. Sajikan nasi goreng dengan hiasan daun bawang, tomat, timun, dan kerupuk.

                Tips: Untuk mendapatkan nasi goreng yang tidak menggumpal, gunakan nasi yang sudah dingin dari kulkas. Jika ingin variasi lain, Anda bisa menambahkan udang, bakso, atau sayuran sesuai selera.',
                'published' => true,
                'published_at' => now()->subDays(7),
                'categories' => [4], // Kuliner
                'tags' => [3, 5], // Populer, Indonesia
            ],
            [
                'title' => 'Destinasi Wisata Tersembunyi di Pulau Jawa',
                'slug' => 'destinasi-wisata-tersembunyi-di-pulau-jawa',
                'excerpt' => 'Temukan tempat-tempat wisata yang belum banyak dikunjungi tetapi menawarkan keindahan alam yang luar biasa di Pulau Jawa.',
                'content' => 'Pulau Jawa memiliki banyak destinasi wisata populer seperti Bali, Yogyakarta, dan Bandung. Namun, ada banyak tempat tersembunyi yang belum banyak dikenal namun menawarkan keindahan alam yang tidak kalah menakjubkan.

                1. Kawah Ijen, Banyuwangi
                Kawah Ijen terkenal dengan fenomena api biru yang hanya bisa dilihat pada dini hari. Air danau di kawah ini berwarna hijau toska karena kandungan belerang yang tinggi. Untuk melihat api biru, pengunjung harus melakukan pendakian malam hari yang dimulai sekitar pukul 1 atau 2 dini hari.

                2. Pantai Sawarna, Banten
                Terletak di ujung selatan Banten, Pantai Sawarna menawarkan pasir putih bersih dan ombak yang cocok untuk para peselancar. Di sekitar pantai terdapat banyak gua dan formasi batu karang yang indah untuk dijelajahi.

                3. Air Terjun Madakaripura, Probolinggo
                Air terjun tertinggi di Pulau Jawa dan kedua tertinggi di Indonesia ini tersembunyi di dalam lembah kaki Gunung Bromo. Konon, tempat ini adalah lokasi terakhir Patih Gajah Mada bermeditasi sebelum moksa.

                4. Danau Kalimutu, Flores
                Meskipun tidak berada di Pulau Jawa, Danau Kalimutu layak disebutkan karena keunikannya. Danau ini memiliki tiga kawah dengan warna air yang berbeda-beda dan dapat berubah-ubah dari waktu ke waktu, dari hijau ke merah atau biru tergantung pada aktivitas vulkanik.

                5. Desa Wae Rebo, Flores
                Desa tradisional yang terletak di ketinggian 1.200 meter di atas permukaan laut ini menawarkan pemandangan pegunungan yang spektakuler. Desa ini dikenal dengan rumah adatnya yang berbentuk kerucut dan disebut Mbaru Niang.

                Jika Anda mencari pengalaman berwisata yang berbeda dari biasanya, destinasi-destinasi tersembunyi ini bisa menjadi pilihan menarik untuk eksplorasi berikutnya.',
                'published' => true,
                'published_at' => now()->subDays(10),
                'categories' => [5], // Wisata
                'tags' => [2, 5], // Terbaru, Indonesia
            ],
        ];

        foreach ($posts as $postData) {
            $categoryIds = $postData['categories'] ?? [];
            $tagIds = $postData['tags'] ?? [];
            
            unset($postData['categories']);
            unset($postData['tags']);
            
            $post = Post::create(array_merge($postData, ['user_id' => $user->id]));
            
            // Attach categories and tags
            if (!empty($categoryIds)) {
                $post->categories()->attach($categoryIds);
            }
            
            if (!empty($tagIds)) {
                $post->tags()->attach($tagIds);
            }
        }
    }
} 