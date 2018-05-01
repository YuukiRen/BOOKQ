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
        // DB::table('books')->insert([
        //     'id' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
        Book::insert([
        	[
        		'id' => '2',
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
        		'id' => '3',
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
        	// [
        	// 	'id' => '1',
        	// 	'isbn' => '9786020501611',
        	// 	'author'=> 'Imelda Saputra',
        	// 	'title'=> '99 hari melesatkan bisnis',
        	// 	'synopsis'=> 'Grasindo (Gramedia Widia Sarana Indonesia)',
        	// 	'year'=> '2018',
        	// 	'publisher'=> '',
        	// 	'description'=> ''
        	// ],
        ]);
    }
}
