<?php

use Illuminate\Database\Seeder;
use App\Book;

class bookseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // delete all row
        Book::truncate();
        // inserting data
        Book::insert([
        	[
        		'id' => '1',
        		'isbn' => '9786020501611',
        		'author'=> 'Imelda Saputra',
        		'title'=> '99 hari melesatkan bisnis',
        		'synopsis'=> 'loremipsum',
        		'year'=> '2018',
        		'publisher'=> 'Grasindo (Gramedia Widia Sarana Indonesia)',
        		'description'=> '“If opportunity doesn’t knock, build a door.” Ya, ketika kesempatan tidak datang mengetuk, Anda perlu membangun pintu untuk menuju keberhasilan yang Anda idamkan. Membangun usaha tentu tidak semudah membalikkan telapak tangan.
Butuh persiapan panjang untuk itu. Namun jelas yang diperlukan setiap orang bukan saja modal yang besar, tapi mindset yang benar pula. Buku 99 Hari Melesatkan Bisnis, hadir untuk membantu Anda bagaimana mengelola cara pandang, sikap, perilaku, soft skill Anda sebelum membangun usaha. Baca, renungkan, terapkan. Dan Anda pun akan semakin diperlengkapi untuk menjadi pengusaha yang kompeten.'
        	],
        	[
        		'id' => '2',
        		'isbn' => '9786028811118',
        		'author'=> 'Sang Pemimpi',
        		'title'=> '99 hari melesatkan bisnis',
        		'synopsis'=> 'loremipsum',
        		'year'=> '2006',
        		'publisher'=> 'Yogyakarta: Bentang Pustaka',
        		'description'=> 'Sang Pemimpi adalah sebuah lantunan kisah kehidupan yang memesona dan akan membuat Anda percaya akan tenaga cinta, percaya pada kekuatan mimpi dan pengorbanan, lebih dari itu, akan membuat Anda percaya kepada Tuhan. Andrea akan membawa Anda berkelana menerobos sudut-sudut pemikiran di mana Anda akan menemukan pandangan yang berbeda tentang nasib, tantangan intelektualitas, dan kegembiraan yang meluap-luap, sekaligus kesedihan yang mengharu biru. 

Tampak komikal pada awalnya, selayaknya kenakalan remaja biasa, tapi kemudian tanpa Anda sadari, kisah dan karakter-karakter dalam buku ini lambat laun menguasai Anda. Karena potret-potret kecil yang menawan akan menghentakkan Anda pada rasa humor yang halus namun memiliki efek filosofis yang meresonansi. Karena arti perjuangan hidup dalam kemiskinan yang membelit dan cita-cita yang gagah berani dalam kisah dua orang tokoh utama buku ini: Arai dan Ikal akan menuntun Anda dengan semacam keanggunan dan daya tarik agar Anda dapat melihat ke dalam diri sendiri dengan penuh pengharapan, agar Anda menolak semua keputusasaan dan ketakberdayaan Anda sendiri. 

“Kita tak kan pernah mendahului nasib!” teriak Arai.
“Kita akan sekolah ke Prancis, menjelajahi Eropa sampai ke Afrika! Apa pun yang terjadi!”
'
        	],
        	[
        		'id' => '3',
        		'isbn' => '9789791684286',
        		'author'=> 'Antonio ramsci',
        		'title'=> '99 hari melesatkan bisnis',
        		'synopsis'=> 'Lorem ipsum',
        		'year'=> '2017',
        		'publisher'=> 'Gramedia',
        		'description'=> 'Pada dasarnya, semua orang punya potensi menjadi intelektual, sesuai dengan kecerdasan yang dimilikinya, dan dalam cara menggunakannya. Tetapi tidak semua orang adalah intelektual dalam fungsi sosial
(Antonio Gramsci)
Buku ini diterjemahkan dari Gramsci\'s Prison Notebooks, sebuah catatan-catatan pengalaman politik dan intelektual yang membentuk, mendukung dan melatarbelakangi gagasan dan pemikiran Gramsci ketika berada di penjara, terutama pemikiran-pemikirannya tentang hegemoni.
Banyak pengamat menganggap pemikiran-pemikiran Gramsci tidak gampang dicerna. Itu karena tulisan-tulisannya banyak menggunakan kata-kata yang tidak langsung menohok permasalahan, sehingga penuh dengan ungkapan-ungkapan kiasan. Semua ini ia lakukan untuk dapat meloloskan tulisan-tulisannya dari sensor penjara.'
        	],
        	[
        		'id' => '4',
        		'isbn' => '9786020822341',
        		'author'=> 'Tere Liye',
        		'title'=> 'Tentang Kamu',
        		'synopsis'=> 'Lorem ipsum',
        		'year'=> '2016',
        		'publisher'=> 'Republika',
        		'description'=> 'Terima kasih untuk kesempatan mengenalmu, itu adalah salah satu anugerah terbesar hidupku. Cinta memang tidak perlu ditemukan, cintalah yang akan menemukan kita. Terima kasih. Nasihat lama itu benar sekali, aku tidak akan menangis karena sesuatu telah berakhir, tapi aku akan tersenyum karena sesuatu itu pernah terjadi. Masa lalu. Rasa sakit. Masa depan. Mimpi-mimpi. Semua akan berlalu, seperti sungai yang mengalir. Maka biarlah hidupku mengalir seperti sungai kehidupan.

***

Atas dasar pekerjaan, Zaman Zulkarnaen harus menelusuri hidup seorang kliennya, perempuan pemegang paspor Inggris yang barusan meninggal dan mewariskan harta yang jumlahnya bisa menyaingi kekayaan Ratu Inggris. Tiga negara, lima kota, beribu luka. Hingga akhirnya Zaman mengerti, bahwa ini bukan sekadar perkara mengerti jalan hidup seorang klien, melainkan pengejawantahan prinsip kuat di tengah cobaan yang terus mendera.

Tentang Kamu adalah novel terbaru Tere Liye. Sebuah karya yang tak hanya akan membawa pembacanya menyelami sebuah petualangan yang seru dan sarat emosi, tapi juga memberikan nilai positif sehingga membuat hidup serasa lebih patut disyukuri.'
        	],


        	[
        		'id' => '5',
        		'isbn' => '9789792724370',
        		'author'=> 'Imam Heryanto,Budi Raharjo.Arif Haryono',
        		'title'=> 'Mudah belajar JAVA',
        		'synopsis'=> 'Lorem ipsum',
        		'year'=> '2012',
        		'publisher'=> 'INFORMATIKA',
        		'description'=> 'Java merupakan bahasa pemrograman yang saat ini sedang “naik daun” dan banyak digunakan oleh para programmer dan software developer untuk mengembangkan berbagai tipe aplikasi, mulai dari aplikasi console, aplikasi desktop, applet (aplikasi yang berjalan di lingkungan web browser), sampai ke aplikasi-aplikasi yang berskala enterprise.
Buku Mudah Belajar Java (Revisi Kedua) ini akan membahas semua teknik pemrograman di dalam J2SE, yang merupakan “core” atau inti dari pemrograman Java. Melalui buku ini, Anda akan diajak untuk mengenal, memahami, mempraktekkan, dan mampu mengimplementasikan konsep-konsep yang diperlukan dalam pemrograman Java. Pembahasan dalam buku ini akan dimulai dari yang paling sederhana, yaitu dengan penguasaan elemen-elemen dasar program seperti: arsitektur program di dalam Java beserta dengan teknik pembuatan dan kompilasinya, tipe data, operator, struktur kontrol, dan sebagainya. Selanjutnya, Anda akan diajak untuk bereksplorasi tentang fitur-fitur yang mendukung konsep pemrograman berorientasi objek di dalam Java. Terakhir, Anda akan dikenalkan dengan teknik-teknik pemrograman tingkat lanjut, termasuk cara-cara pembuatan aplikasi visual (aplikasi berbasis GUI – Graphical User Interface) di dalam Java. 

Buku ini cocok untuk siapa saja yang berminat mempelajari dan mengimplementasikan semua konsep pemrograman Java secara mudah dan cepat. Semua materi dalam buku ini disuguhkan dalam “logat” tutorial dan langsung disertai dengan contoh program sehingga akan mudah untuk dipahami. Tujuan akhir dari buku ini adalah mengantarkan, menuntun, dan memandu Anda untuk menjadi seorang programmer Java.
'
        	],
        	[
        		'id' => '6',
        		'isbn' => '9786029176520',
        		'author'=> 'Dr. Aid Abdullah al-Qorni',
        		'title'=> 'La taghdhab',
        		'synopsis'=> 'Lorem ipsum',
        		'year'=> '2017',
        		'publisher'=> 'Gema Insani',
        		'description'=> 'Rasulullah saw pernah memberikan wasiat kepada kita, "La taghdhab jangan marah)!" Sebuah wasiat yang singkat, namun memuat kebaikan yang begitu padat. Karena, tak mudah mengatasi amarah, bahkan kebanyakan orang malah tenggelam di dalamnya. Jika Anda bisa mengatasi amarah, maka itu sebuah pencapaian besar, akhlak nabawi nan mulia, dan manhaj kehidupan nan lurus. Karena amarah melahirkan setumpuk bahaya yang tak terkira. Akan tetapi, amarah juga bisa diolah menjadi energi kebaikan, power kesuksesan, bahan baku kebahagiaan, dan beragam manfaat lainnya. Buku ini sebagaimana ditegaskan . penulisnya, merupakan karya berharga yang lahir setelah ditulisnya buku fenomenal La Tahzan. Buku La Tahzan sebagai terapi untuk kesedihan, sementara buku La Taghdhab sebagai terapi untuk mengatasi suhu panas hati. Jangan bersedih agar Anda tidak menentang takdir, dan jangan marah agar Anda tidak menodai kesabaran. Selamat menikmati sajian khas Dr. \'Aidh Al-Qarni untuk membeningkan hati dari pekatnya amarah!
'
        	],
        	[
        		'id' => '7',
        		'isbn' => '9794211974',
        		'author'=> 'Sarlito W. Sarwono',
        		'title'=> 'Psikologi Remaja',
        		'synopsis'=> 'Lorem ipsum',
        		'year'=> '2017',
        		'publisher'=> 'Gramedia',
        		'description'=> 'Untuk memahami jiwa remaja dan mencari solusi yang tepat bagi permasalahannya, maka penting bagi kita memahami remaja dan perkembangan psikologinya, yaitu konsep diri, intelegensi, emosi, seksual, motif sosial, dan religinya. Buku ini dapat menjadi referensi yang penting bagi mahasiswa, pendidik, konsultan, dan aparat yang berkecimpung dalam permasalahan remaja, serta yang tidak kalah pentingnya adalah orang tua.'
        	],
			
			[
				'id' => '8',
				'isbn' => '97897936004022',
				'author'=> 'Habiburrahman El Shirazy',
				'title'=> 'Ketika Cinta Bertasbih',
				'synopsis'=> 'Lorem ipsum',
				'year'=> '2017',
				'publisher'=> 'Gramedia',
				'description'=> '"Selain mengajak untuk menyucikan jiwa, dwilogi Ketika Cinta Bertasbih ini menyadarkan apa makna prestasi yang sesungguhnya. Novel yang dahsyat dn benar-benar berbeda !" ---Ishak Ibrahim Hasan, Sastrawan
"Inilah novel yang mencerahkan. Luar biasa! isinya saya rasakan begitu kuat memotivasi pembaca untuk berani hidup mandiri, untuk tidak mudah menyerah, untuk terus maju meraih anugerah Allah." ---Sarwedi Hasibuan, Mahasiswa Program Pascasarjana University of Malaya
"Dwilogi Ketika Cinta Bertasbih ini tidak sekadar novel romantis, ini juga novel fikih yang ditulis dalam alur cerita yang tak mudah ditebak. Kang Abik melakukan terobosan baru menjelaskan kaidah-kaidah fikih melalui novel. Salut!" ---KH. Mifdhaul Muthahhar, Ketua IKADI & Pengasuh Ponpes Al Hikmah'
			],        	
        ]);
    }
}


