Instalasi:
1. Download repository sebagai file zip di https://github.com/wanyax/manajemen-rt-rw/archive/master.zip
2. extract zip file di webroot, rename folder hasil extract dengan nama rtrw
3. buat database baru dengan nama rt_rw
4. import file manajemen-rt-rw.sql ke database tersebut
5. edit file protected/config/main.php, sesuaikan user dan password database
   'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rt_rw',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
6. akses aplikasi melalui browser http://localhost/rtrw
7. Login dengan menggunakan user admin dengan passdword admin