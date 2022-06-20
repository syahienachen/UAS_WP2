<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">HTML I</h1>
<div class="col-lg">
    <!-- Memulai dengan HTML -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Memulai dengan HTML</h6>
        </div>
        <div class="card-body text-center">
            <p>Mari kita mulai pelajaran kita dengan HTML! Aturan pertama penulisan code HTML adalah mengapit teks dengan tag. Tag dapat memberikan makna kepada teks seperti pada judul atau tautan.</p>
        </div>
    </div>
    <br>
    
    <!-- Tag pembuka dan Tag Penutup -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tag pembuka dan Tag Penutup</h6>
        </div>
        <div class="card-body text-center">
            <P>Sebagian besar element HTML memerlukan sepasang tag, tag pembuka dan tag penutup, dengan teks disisipkan di antara keduanya. Saat menggunakan tag penutup, pastikan untuk meletakkan /.</P>
            <img src="<?= base_url('/img/html1/1-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html1/1-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Tag Judul -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tag Judul</h6>
        </div>
        <div class="card-body text-center">
            <P>Tag judul digunakan untuk memformat element judul. Tag ini bervariasi mulai dari &lt;h1&gt; hingga &lt;h6&gt;, &lt;h1&gt; menjadi yang terbesar dan &lt;h6&gt; menjadi yang terkecil (※ h mewakili heading (judul)).</P>
            <img src="<?= base_url('/img/html1/2-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html1/2-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Tag Paragraf -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Tag Paragraf</h6>
        </div>
        <div class="card-body text-center">
            <P>Tag &lt;p&gt; menentukan paragraf (※ p mewakili paragraf). Teks yang diapit oleh tag seperti &lt;h2&gt; dan &lt;p&gt; dimulai di baris baru.</P>
            <img src="<?= base_url('/img/html1/3-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html1/3-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Menggunakan Judul dan Paragraf -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Menggunakan Judul dan Paragraf</h6>
        </div>
        <div class="card-body text-center">
            <P>Penggunaan tag &lt;h1&gt;...&lt;h6&gt; adalah untuk menyesuaikan ukuran dan menunjukkan seberapa penting masing-masing jenis judul seperti ditunjukkan di bawah. Untuk teks yang bukan merupakan judul, gunakan tag &lt;p&gt;.</P>
            <img src="<?= base_url('/img/html1/4-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html1/4-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Komentar -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Komentar</h6>
        </div>
        <div class="card-body text-center">
            <P>Teks yang diapit oleh &lt;!-- --&gt; menjadi komentar. Komentar tidak ditampilkan pada browser. Komentar sangat berguna untuk menjelaskan code Anda.</P>
            <img src="<?= base_url('/img/html1/5-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/html1/5-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>