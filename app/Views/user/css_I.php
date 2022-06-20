<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">CSS I</h1>
<div class="col-lg">
    <!-- Apa itu CSS? -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Apa itu CSS?</h6>
        </div>
        <div class="card-body text-center">
            <p>CSS digunakan untuk mendesain situs web. Dengan CSS, Anda dapat mengubah hal-hal seperti warna, ukuran, dan spasi pada element HTML. Gambar di sisi kiri hanya terdiri dari HTML saja. Dengan menerapkan CSS, Anda dapat menentukan style seperti tata letak, sesuai contoh yang ditampilkan di sisi kanan.</p>
        </div>
    </div>
    <br>
    
    <!-- Cara Kerja CSS -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Cara Kerja CSS</h6>
        </div>
        <div class="card-body text-center">
            <P>CSS ditulis dalam file terpisah dari HTML. Anda dapat menerapkan CSS ke element HTML dengan menentukan "dimana", "apa", dan "bagaimana" Anda ingin mengubahnya. Pada contoh di bawah, CSS diterapkan ke element &lt;h1&gt ("dimana"), dan warnanya ("apa") diubah menjadi merah ("bagaimana"). Element HTML yang ditargetkan disebut sebagai Selector.</P>
        </div>
    </div>
    <br>
    
    <!-- Warna -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Warna</h6>
        </div>
        <div class="card-body text-center">
            <P>Mari kita pelajari property color (warna)! Di CSS, warna ditentukan oleh nilai heksadesimal seperti color: #ff0000;. Anda tidak perlu menghafal nilai heksadesimal warna tersebut, karena Anda dapat mencarinya secara online.</P>
            <img src="<?= base_url('/img/css1/1-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css1/1-3.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css1/1-2.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Sintaks CSS -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Sintaks CSS</h6>
        </div>
        <div class="card-body text-center">
            <P>Ada beberapa hal yang harus diingat saat menulis CSS.Seperti HTML, Anda harus selalu mengindentasi code CSS seperti gambar di bawah. Selain itu, perhatikan bahwa anda harus menambahkan titik dua : di akhir property CSS dan titik koma ; di akhir baris seperti gambar di bawah..</P>
            <img src="<?= base_url('/img/css1/2-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Komentar CSS -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Komentar CSS</h6>
        </div>
        <div class="card-body text-center">
            <P>Seperti di HTML, Anda dapat menulis komentar di file CSS. Namun di CSS, komentar harus diapit oleh /* */.</P>
            <img src="<?= base_url('/img/css1/3-1.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>