<section>
	<h1><?php echo $judul ?></h1>
	<p align='justify'>Pada Pengrtian codeigniter di atas tadi dijelaskan 
        bahwa codeigniter menggunakan metode mvc. apa itu MVC? 
        Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh 
        dalam belajar codeigniter.</p>
		<p>MVC adalah teknik atau konsep yang memisahkan komponen utama 
            menjadi tiga komponen yaitu model, view dan controller</p>
			<ol type="a">
			<li>Model</li>
	<p align="justify">Model adalah kelas yang mempresentasikan tipe data 
        yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan 
        sebagai bagian penanganan yang berhubungan dengan pengolahan atau 
        manipulasi database. Seperti misalnya megambil data dari database, 
        menginput dan pengolahan database lainnya. semua instruksi atau 
        fungsi yang berhubungan dengan pengolahan database di letakan 
        di dalam Model. Sebagai contoh, jika ingin membuat aplikasi untuk 
        menghitung luas dan keliling lingkaran, maka dapat memodelkan objek 
        lingkaran sebagai kelas Model.</p>
	<p align="justify">Sebagai catatan, semua model harus disimpan di dalam 
        folder application\models</p>
	<li>View</li>
	<p align="justify">View merupakan bagian yang menangani halaman user 
        interface atau halaman yang muncul pada user (pada browser). 
        Tampilan dari user interface di kumpulkan pada view untuk 
        memisahkannya dengan Controller dan model sehingga memudahkan web 
        designer dalam melakukan pengembangan tampilan halaman website. </p>
	<li>View</li>
	<p align="justify">Controller merupakan kumpulan intruksi aksi yang 
        menghubungkan model dan view, jadi user tidak akan berhubungan 
        dengan model secara langsung, intinya data yang tersimpan 
        di database (model) di ambil oleh controler dan kemudian 
        controller pula yang menampilkan nya ke view. Jadi Controller lah 
        yang mengolah intruksi. </p>
	<p align="justify">Dari penjelasan tentang model view dan controller 
        di atas dapat di simpulkan bahwa controller sebagai penghubung 
        view dan model. Misalnya pada aplikasi yang menampilkan data 
        dengan menggunakan metode konsep mvc, controller memanggil instruksi 
        pada model yang mengambil data pada database, kemudian controller 
        yang meneruskan nya pada view untuk ditampilkan. Jadi jelas sudah 
        dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini 
        karena web designer atau front-end tidak perlu lagi berhubungan 
        dengan controller, dia hanya perlu berhubungan dengan view untuk 
        mendesign tampilan aplikasi, karena back-end develope yang menangani 
        bagian controller dan modelnya. Jadi pembagian tugas pun menjadi 
        mudah dan pengembangan aplikasi dapat di lakukan dengan cepat dan 
        terstruktur.</p>
</section> 