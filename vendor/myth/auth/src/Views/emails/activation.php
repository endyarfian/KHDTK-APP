<p>Ini adalah email untuk mengaktifkan akun anda pada <?= site_url() ?>.</p>

<p>Untuk mengaktifkannya anda harus klik link pada tautan berikut :</p>

<p><a href="<?= url_to('activate-account') . '?token=' . $hash ?>">AKTIFKAN AKUN</a>.</p>

<br>

<p>Jika anda tidak merasa mendaftarkan email anda pada <?= site_url() ?>, anda bisa mengacuhkan email ini.</p>
<br>
<p>Regard,</p>
<p>KHDTK WEB APP Dev.,</p>