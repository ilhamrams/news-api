<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kategori::create([
            'name' => 'olahraga',
            'description' => 'Kategori berita olahraga',
        ]);
        Kategori::create([
            'name' => 'sepakbola',
            'description' => 'Kategori berita sepakbola',
        ]);
        Kategori::create([
            'name' => 'politik',
            'description' => 'Kategori berita politik',
        ]);
        Kategori::create([
            'name' => 'enterntainment',
            'description' => 'Kategori berita enterntainment',
        ]);

        
        User::create([
            'name' => 'Ilham Ramadan',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'Angga Dimas Hidayat',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
        // Berita::create([
        //     'id_kategori' => 4,
        //     'gambar' => 'gambar/defaults.png',
        //     'judul' => 'Toyota Mark X',
        //     'artikel' => '<p> Lewat divisi motorsport Gazoo Racing, beberapa mobil baru Toyota dipamerkan di Tokyo Auto Salon 2019. Salah satunya, konsep GR Supra Super GT, yang tak lain versi balap dari Toyota Supra. Satu lagi tak kalah mengundang perhatian publik. Toyota Mark X GRMN. Model terbaru yang mengisi kevakuman lini Mark X empat tahun belakangan, tampak sangar setelah dimodifikasi Gazoo Racing. </p> <p>New Mark X GRMN didaulat melanjutkan kesuksesan pendahulunya, yang hanya dibuat 100 unit. Namun basis dipakai tidak sepenuhnya generasi baru. Masih memakai Mark X 350 RDS, dituning oleh GRMN agar makin agresif. Tampilannya memang masih seperti model yang dipasarkan sejak 2013. Tapi tetap keren dan impresif. </p> <p>Gazoo Racing melakukan ubahan sporty pada bumper depan dan belakang. Grille menjadi minimalis, ditimpali intake ekstrabesar yang menyatu dengan rumah fog lamp. Tidak ada logo Toyota atau Mark X di area fasad. Cukup emblem GRMN di grille, untuk membuktikan eksklusifitas. Emblem sama juga terdapat di sisi spakbor. </p> <p>Bumper belakang dirancang lebih dramatis. Satu bagian masif berwarna hitam, berisikan diffuser, reflektor dan sepasang pipa knalpot ganda. Ventilasi besar di balik roda, berguna melancarkan aliran udara. Lampu dibiarkan sama seperti model sebelumnya, dipermanis duck tail sederhana. Secara keseluruhan, tak banyak ubahan dengan Mark X Gs 2013 lalu. Kecuali pelek BBS 19-inci dengan aksen black glossy yang begitu menggugah. </p> <p>Konsumen juga bisa memesan opsi atap CRFP (carbon fiber reinforced plastic) seharga 270.000 yen (Rp 35 juta). Diklaim mampu mengurangi bobot hingga 10 kg, menurunkan titik pusat gravitasi dan tercipta pengendalian lebih gesit. </p> <p>Gazoo Racing turut mengubah interior agar semakin terasa sporty. Termasuk jok sport bucket berbalut material suede yang lebih mendekap tubuh, pedal alloy dan beberapa panel serat karbon. Desain baru setir mirip kepunyaan GT 86, dilapisi kulit dan bertengger logo GR di bagian bawah. </p> <p>Tapi bagian yang menjadi magnet mobil ini, berasal dari sektor drivetrain. GR mempertahankan jantung mekanis naturally aspirated V6 3,5-liter di balik kap mesin dengan besaran tenaga 318 PS (313 hp) dan torsi maksimum 380 Nm. Paling spesial, transmisi manual 6-speed yang mengirim seluruh daya menuju roda belakang (RWD). Bahkan mempertahankan rem tangan konservatif. Terdengar sangat memenuhi hasrat para pengemudi antusias. Dapat dipastikan, mudah diajak drifting. </p> <p>Klaim pihak pabrikan, suspensi disetel ulang dan mengganti shock absorber. Sistem electric power steering juga dimodifikasi supaya tercipta feedback yang lebih responsif. Menyandang emblem GRMN, membuat Mark X dibatasi produksi 350 unit saja. Angka ini lebih banyak dari versi sebelumnya yang dibuat 100 unit. Sayang, hanya pasar Jepang yang mampu menikmati sedan nikmat ini. Harganya 5,13 juta yen atau setara Rp 665 juta. </p>',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        $judulBerita14 = 'TRD SPORTIVO PART MODIFIKASI UNTUK TOYOTA';
        $artikelBerita14 = '<p> TRD Sportivo merupakan produk spare parts sporty yang sengaja dibuat untuk mendukung mobil komersil mendapatkan sentuhan gaya sporty. Produk ini dikembangkan oleh Toyota Motor Corporation. </p> <p>Jika Anda memperhatikan tulisan TRD pada mobil Toyota dengan seksama, ada 3 produk utama yang ditawarkan oleh TRD produk ini, apa saja? </p> <p><strong>1. TRD Product</strong> TRD product merupakan produk spare parts yang sengaja dikembangkan untuk keperluan mobil balap. Bagi mobil yang digunakan untuk racing, tentu membutuhkan aerodinamika dan kecepatan maksimum dalam melajukan kendaraannya. TRD product ini merupakan spare parts asli dari Jepang langsung memang dikhususkan untuk keperluan balapan, tidak untuk mobil-mobil komersial. </p> <p><strong>2. TRD S</strong> Nah, arti TRD di mobil Toyota yang satu ini pastinya sudah sering lihat kan? TRD S dikhususkan untuk bodi saja, baik itu interior dan eksterior. TRD S sudah digunakan pada mobil komersial milik Toyota dan mobil yang memakai tanda ini, pasti menggunakan fitur eksterior/interior dari TRD S. </p> <p<strong>3. TRD Sportivo</strong> Untuk arti TRD pada mobil Toyota yang satu ini mungkin tulisan yang paling sering kita lihat di mobil-mobil komersil. TRD Sportivo merupakan produk spare parts sporty yang sengaja dibuat untuk mendukung mobil komersil mendapatkan sentuhan gaya sporty. Produk ini dikembangkan oleh Toyota Motor Corporation.</p>';
        Berita::create([
            'id_kategori' => 1,
            'gambar' => 'gambar/TRD.jpg',
            'judul' => $judulBerita14,
            'artikel' => $artikelBerita14,
        ]);

        $judulBerita15 = 'Produksi Porsche 991 Resmi Berakhir, Kini Digantikan 992';
        $artikelBerita15 = '<p> Produksi Porsche 911 generasi ketujuh resmi berakhir (20/12). 911 Speedster convertible berwarna silver menjadi model yang terakhir diproduksi. Lahir dari pabrik Stuttgart dan menuntaskan 233.540 unit seri 991 sepanjang masa produksi sejak 2011. Tongkat estafet kelegendarisan 911 dilanjutkan seri 992, sudah mendebut akhir tahun lalu di Los Angeles.</p> <p> Kisah 911 generasi 991 dimulai 2011 silam, tepatnya saat Frankfurt Motor Show berlangsung. Sebagai pewaris seri 997, 991 mendapat ubahan paling drastis dalam sejarah 911. Membawa peranti elektronik lebih banyak, seperti power steering elektrik dan juga mengenalkan Porsche Dynamic Chassis Control. Ia pun menjadi awal penggunaan transmisi manual 7-speed. Dan selalu dikenang sebagai 911 yang masih ditenagai mesin Naturally Aspirated (NA), sebelum turbo merajalela pada pertengahan siklusnya.</p> <p>Ya, di generasi ini para fanboy harus mengucapkan selamat tinggal pada mesin boxer 6-silinder NA. Momen ini terjadi saat fase kedua hidup pada 2016, atau dikenal juga seri 991.2. Nostalgia naturalnya flat-6 yang bertahan selama 7 generasi harus berakhir. Induksi paksa turbin dalam rumah keong, tak lagi eksklusif untuk Porsche 911 Turbo saja. Mesin basic flat-6 3,4-liter (Carrera) dan 3,8-liter (Carrera S) dilungsurkan berganti flat-6 3,0-liter turbo untuk menopang Carrera hingga GTS. </p> <p>911 Turbo Kecuali 911 Turbo yang tetap memuaskan pakai 3,8-liter turbo dan model terakhir Speedster convertible ini. Porsche 911 Speedster, terbilang istimewa bagi Anda yang menginginkan 911 atap terbuka. Tidak terimbas serbuan turbo, masih setia dengan NA bahkan disuplai mesin 4,0-liter milik GT3. Output-nya tak main-main. Tenaga 510 PS dan torsi 470 Nm melebihi GT3 standar. Hanya kalah 10 PS dari kasta teratas GT3 RS. Lebih menarik lagi, disediakan dalam pilihan manual 6-speed saja. Persis GT3. Akselerasi 0-100 km/jam secepat 4 detik dan kecepatan puncak 310 km/jam. Sungguh istimewa jika dibandingkan 911 Cabriolet. </p> <p>Seri 991 memang diisi beragam model dan varian. Paling banyak menelurkan edisi spesial dibanding generasi terdahulu. Mulai dari 50th Anniversary Edition, 911 R, 911 T, 911 GT3 Touring Package hingga 911 Turbo S Exclusive Series. Model paling menarik, apalagi kalau bukan edisi khusus perayaan produksi 1 juta unit. Satu mobil dicat warna istimewa Irish Green dengan balutan kulit coklat di interior, bukan untuk dijual melainkan dipajang di museum Porsche. </p> <p>Kini, fanboy 911 menyongsong generasi delapan 992. Dikenalkan tahun lalu dalam empat varian dasar: Carrera, Carrera S, Carrera 4 dan Carrera 4S. Model regenerasi, tapi wujudnya tidak terlalu memperlihatkan. Sangat mirip dengan 991, bahkan masih pantas disebut facelift. Porsche memang tidak berniat melakukan ubahan radikal. Coba perhatikan sejak 997 sampai sekarang. Benang merahnya amatlah jelas. Mereka mati-matian mempertahankan desain dasar 901 original yang berasal dari VW Beetle. </p>';
        Berita::create([
            'id_kategori' => 2,
            'gambar' => 'gambar/porshe.jpg',
            'judul' => $judulBerita15,
            'artikel' => $artikelBerita15,
        ]);

        $judulBerita16 = 'Lexus RC F 2020 Kini Terlihat Lebih Sporty Namun Elegan';
        $artikelBerita16 = '<p> Setelah memperkenalkan RC facelift di Paris Motor Show musim gugur yang lalu, Lexus sekarang merilis versi RC F untuk North American International Auto Show 2019. Memulai debutnya hari ini di Detroit, sports coupe yang diperbarui mendapat sentuhan visual yang keren. Yang paling jelas terlihat di bagian depan di mana lampu LED yang didesain ulang sekarang menggabungkan lampu DRL untuk memungkinkan tampilan yang jauh lebih bersih.</p> <p> Desainer Lexus juga menghabiskan waktu menyegarkan kisi-kisi spindel besar dengan menambahkan bibir bawah yang membentang di seluruh muka, yang mereka katakan ditambahkan untuk mencoba dan membuat fasia depan terlihat sedikit lebih kecil. Di bagian belakang, lampu belakang LED yang lebih lebar mencerminkan model RC lainnya dan membuat performa coupe terlihat lebih bengis.</p> <p>Di luar perbaikan kosmetik yang telah dilakukan Lexus RC F, mesin sporty ini juga memperoleh tenaga yang lebih baik dari V8 5.0 liter. Sebagai salah satu dari beberapa mobil performa yang tersisa di pasaran, RC sekarang mengemas 5 tenaga kuda tambahan dan torsi 8 Newton-meter untuk total tenaga 472 hp dan torsi 535 Nm. . </p> <p>Tenaga tersebut disalurkan ke roda belakang melalui transmisi otomatis 8 kecepatan yang sama, tetapi para insinyur telah menerapkan rasio final drive yang lebih tinggi untuk meningkatkan responsifitas. Sebagai standar, Lexus RC F menawarkan kontrol peluncuran elektronik untuk performa akselerasi maksimum dari 0 hingga 96 kilometer per jam hanya membutuhkan waktu 4,2 detik atau 2/10 detik kurang dari sebelumnya. </p> <p>Lexus dan Michelin bekerja sama untuk mengembangkan satu set ban Pilot Sport 4S khusus untuk mengurangi understeer serta meningkatkan cengkraman lateral dan daya tahan saat mobil didorong dengan keras. Hal ini menjadi lebih baik karena penurunan bobot mobil dicapai dengan memasang braket kontrol velg aluminium dan braket penopang suspensi atas, sedangkan setengah lubang poros di bagian belakang menggantikan poros padat. </p> <p>Setelah peluncuran perdana di Detroit, Lexus RC F 2020 akan mulai diproduksi pada kuartal kedua tahun ini, dengan harga yang diumumkan lebih dekat dengan peluncuran pasarnya. </p>';
        Berita::create([
            'id_kategori' => 3,
            'gambar' => 'gambar/lexuxrcf.jpg',
            'judul' => $judulBerita16,
            'artikel' => $artikelBerita16,
        ]);

        $judulBerita17 = 'Toyota Supra is back';
        $artikelBerita17 = '<p> Otomotif balap pasti mempunyai penggemarnya. Bukan hanya untuk kalangan berduit, tetapi juga kalangan menengah ke bawah. Melihat peluang itu banyak produsen otomotif yang mengeluarkan mobil sport dengan spesifikasi yang berasa mobil balap. Kondisi ini untuk memberikan pengalaman berbeda kepada setiap pengendara yang menginginkan menaiki mobil balap yang sebenarnya.</p> <p> Sudah banyak pabrikan yang meluncurkan mobil sport dengan spesifikasi mobil balap. Bukan hanya performa mesin yang gila-gilaan, tetapi juga desain serta fitur penunjang lainnya. Salah satu produsen mobil yang mengeluarkan mobil sport tersebut adalah Toyota. Kabarnya produk mereka yang telah berhenti produksi akan diproduksi lagi. </p> <p>Mobil legendaris dari Toyota kabarnya akan meluncur kembali ke dunia otomotif setelah vakum cukup lama, mobil tersebut adalah Toyota Supra. Mobil ini kembali hadir bukan hanya meramaikan meja produksi Toyota, tetapi juga akan bertarung di ajang balap. </p> <p>Sementara milik Toyota GR Supra lebih besar. Engineer tetap mempertahankan konfigurasi legendaris Supra, dengan mesin 3,0 liter turbo enam silinder segaris. Ia dilengkapi transmisi 8-speed sport automatic. Mesin mampu membuncahkan tenaga maksimal 340 PS yang digapai pada 5.000-6.500 rpm. Lalu besaran torsi maksimal 500 Nm pada rentang 1.600-4.500 rpm. Untuk melesat 0-100 km/jam cuma 4,3 detik. Dilihat dari segi teknis, GR Supra jauh lebih unggul lantaran volume mesin yang besar di banding Z4 sDrive30i. Andai BMW memboyong tipe sDrive40i, mungkin kekuatannya berimbang. </p>';
        Berita::create([
            'id_kategori' => 4,
            'gambar' => 'gambar/toyotasupra.jpg',
            'judul' => $judulBerita17,
            'artikel' => $artikelBerita17,
        ]);

        $judulBerita18 = 'Nissan GT-R Nismo 2020 Harganya Makin Kenceng. Apakah Berbanding Lurus Dengan Performanya?';
        $artikelBerita18 = '<p> Mobil dua pintu yang terkenal gahar ini, sekarang sudah bisa dipesan di Australia. Namun dengan embel-embel adanya upgrade di sana-sini membuat banderol semakin tinggi. </p> <p> Sebelumnya untuk versi Nissan GT-R Nismo 2017 di Australia dipatok dengan harga 299.000 dolar Australia atau sekitar Rp 2,86 miliar (kurs 1 dolar Australia = Rp 9.578) </p> <p>Untuk versi 2020 mengalami peningkatan sebesar 26 persen dibanding versi sebelumnya. Nissan GT-R Nismo 2020 membawa price tag 378.000 dolar Australia yang jika dirupiahkan menjadi Rp 3,6 miliar. Kenaikan harga hingga sebegitu besarnya, tentu seharusnya ubahan yang ada pada si monster ini tak main-main sob. Lalu, apakah tingginya kenaikan harga tersebut sejalan dengan perubahan pada performanya? </p>';
        Berita::create([
            'id_kategori' => 4,
            'gambar' => 'gambar/nissangtrnismo.jpg',
            'judul' => $judulBerita18,
            'artikel' => $artikelBerita18,
        ]);

        $judulBerita19 = 'Toyota Mark X GRMN 2019: Mesin V6 N/A, Transmisi Manual dan RWD';
        $artikelBerita19 = '<p> Lewat divisi motorsport Gazoo Racing, beberapa mobil baru Toyota dipamerkan di Tokyo Auto Salon 2019. Salah satunya, konsep GR Supra Super GT, yang tak lain versi balap dari Toyota Supra. Satu lagi tak kalah mengundang perhatian publik. Toyota Mark X GRMN. Model terbaru yang mengisi kevakuman lini Mark X empat tahun belakangan, tampak sangar setelah dimodifikasi Gazoo Racing. </p> <p>New Mark X GRMN didaulat melanjutkan kesuksesan pendahulunya, yang hanya dibuat 100 unit. Namun basis dipakai tidak sepenuhnya generasi baru. Masih memakai Mark X 350 RDS, dituning oleh GRMN agar makin agresif. Tampilannya memang masih seperti model yang dipasarkan sejak 2013. Tapi tetap keren dan impresif. </p> <p>Gazoo Racing melakukan ubahan sporty pada bumper depan dan belakang. Grille menjadi minimalis, ditimpali intake ekstrabesar yang menyatu dengan rumah fog lamp. Tidak ada logo Toyota atau Mark X di area fasad. Cukup emblem GRMN di grille, untuk membuktikan eksklusifitas. Emblem sama juga terdapat di sisi spakbor. </p> <p>Bumper belakang dirancang lebih dramatis. Satu bagian masif berwarna hitam, berisikan diffuser, reflektor dan sepasang pipa knalpot ganda. Ventilasi besar di balik roda, berguna melancarkan aliran udara. Lampu dibiarkan sama seperti model sebelumnya, dipermanis duck tail sederhana. Secara keseluruhan, tak banyak ubahan dengan Mark X Gs 2013 lalu. Kecuali pelek BBS 19-inci dengan aksen black glossy yang begitu menggugah. </p> <p>Konsumen juga bisa memesan opsi atap CRFP (carbon fiber reinforced plastic) seharga 270.000 yen (Rp 35 juta). Diklaim mampu mengurangi bobot hingga 10 kg, menurunkan titik pusat gravitasi dan tercipta pengendalian lebih gesit. </p> <p>Gazoo Racing turut mengubah interior agar semakin terasa sporty. Termasuk jok sport bucket berbalut material suede yang lebih mendekap tubuh, pedal alloy dan beberapa panel serat karbon. Desain baru setir mirip kepunyaan GT 86, dilapisi kulit dan bertengger logo GR di bagian bawah. </p> <p>Tapi bagian yang menjadi magnet mobil ini, berasal dari sektor drivetrain. GR mempertahankan jantung mekanis naturally aspirated V6 3,5-liter di balik kap mesin dengan besaran tenaga 318 PS (313 hp) dan torsi maksimum 380 Nm. Paling spesial, transmisi manual 6-speed yang mengirim seluruh daya menuju roda belakang (RWD). Bahkan mempertahankan rem tangan konservatif. Terdengar sangat memenuhi hasrat para pengemudi antusias. Dapat dipastikan, mudah diajak drifting. </p> <p>Klaim pihak pabrikan, suspensi disetel ulang dan mengganti shock absorber. Sistem electric power steering juga dimodifikasi supaya tercipta feedback yang lebih responsif. Menyandang emblem GRMN, membuat Mark X dibatasi produksi 350 unit saja. Angka ini lebih banyak dari versi sebelumnya yang dibuat 100 unit. Sayang, hanya pasar Jepang yang mampu menikmati sedan nikmat ini. Harganya 5,13 juta yen atau setara Rp 665 juta. </p>';
        Berita::create([
            'id_kategori' => 4,
            'gambar' => 'gambar/markxgr.jpg',
            'judul' => $judulBerita19,
            'artikel' => $artikelBerita19,
        ]);

        // Berita::factory(9)->create();
    }
}
