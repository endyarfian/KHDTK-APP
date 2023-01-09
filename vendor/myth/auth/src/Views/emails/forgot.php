<p>Anda telah meminta untuk mereset password anda pada <?= site_url() ?>.</p>

<p>Untuk memulihkan password anda gunakan kode token dibawah ini dan ikuti instruksi selanjutnya.</p>
<!-- <p>To reset the password use this code or URL and follow the instructions.</p> -->

<p>Kode Token Anda: <?= $hash ?></p>

<p>Kunjungi Halaman <a href="<?= url_to('reset-password') . '?token=' . $hash ?>">RESET PASSWORD</a>.</p>

<br>

<p>Jika anda tidak merasa mendaftarkan email anda pada <?= site_url() ?>, anda bisa mengacuhkan email ini.</p>
<br>
<p>Regard,</p>
<p>KHDTK WEB APP Dev.,</p>