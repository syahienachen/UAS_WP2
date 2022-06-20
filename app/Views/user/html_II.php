<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">HTML II</h1>
<div class="col-lg">

    <!-- Tag Tautan (1) -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tag Tautan (1)</h6>
        </div>
        <div class="card-body text-center">
            <P>Anda dapat dengan mudah membuat tautan dengan tag &lt;a&gt; (※ a mewakili anchor (penambat)). Teks dalam tag &lt;a&gt; ditampilkan pada browser sebagai teks tautan.</P>
            <img src="<?= base_url('/img/html2/1-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html2/1-2.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Tag Tautan (2) -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tag Tautan (2)</h6>
        </div>
        <div class="card-body text-center">
            <P>Setiap tautan memiliki tujuan. Jadi, agar tautan berfungsi, Anda harus menentukan URL tujuan di element &lt;a&gt; dengan menambahkan atribut href. Seperti yang ditampilkan pada gambar di sisi kiri, URL tujuan masuk ke bagian url dari &lt;a href="url"&gt;.</P>
            <img src="<?= base_url('/img/html2/2-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html2/2-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html2/2-3.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Tag Gambar -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tag Gambar</h6>
        </div>
        <div class="card-body text-center">
            <P>Tag &lt;img&gt; digunakan untuk menampilkan gambar. Kita dapat menetapkan gambar dengan menentukan url di atribut src seperti berikut: &lt;img src="url"&gt;. Perhatikan bahwa tag &lt;img> tidak memerlukan tag penutup karena tidak ada teks yang diapit.</P>
            <img src="<?= base_url('/img/html2/3-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html2/3-2.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Daftar (List) -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Daftar (List)</h6>
        </div>
        <div class="card-body text-center">
            <P>Anda dapat membuat daftar dengan mengapit teks dengan tag &lt;li&gt;. Jangan khawatir, kita akan membahas tag &lt;ul&gt; di slide berikutnya.</P>
            <img src="<?= base_url('/img/html2/4-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html2/4-2.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>