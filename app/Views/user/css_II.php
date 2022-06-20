<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">CSS II</h1>
<div class="col-lg">
    <!-- Ukuran Font -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Ukuran Font</h6>
        </div>
        <div class="card-body text-center">
            <p>Ukuran font dapat ditetapkan dengan property font-size.Satuan umum untuk menentukan font-size adalah px (pixel).</p>
            <img src="<?= base_url('/img/css2/1-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/1-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/1-3.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Jenis Font -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Jenis Font</h6>
        </div>
        <div class="card-body text-center">
            <P>Dengan property font-family, Anda dapat menentukan jenis font. Anda dapat melakukan ini dengan menetapkanfont-family: nama font; Jika nama font berisi spasi, Anda harus mengapitnya dengan tanda petik ganda.</P>
            <img src="<?= base_url('/img/css2/2-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/2-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/2-3.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Warna Latar Belakang -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Warna Latar Belakang</h6>
        </div>
        <div class="card-body text-center">
            <P>Property background-color memungkinkan Anda untuk mengubah warna latar belakang. Anda dapat menetapkan warna latar belakang seperti menetapkan property color. Selain itu, jika huruf yang sama dan berulang seperti #dddddd, ini dapat disingkat menjadi #ddd.</P>
            <img src="<?= base_url('/img/css2/3-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/3-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/3-3.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
    
    <!-- Lebar dan Tinggi -->
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Lebar dan Tinggi</h6>
        </div>
        <div class="card-body text-center">
            <P>Untuk mengubah lebar dan tinggi element, gunakan property width (lebar) dan height (tinggi). Unit kedua element ini dapat ditentukan dengan px, sama seperti font-size.</P>
            <img src="<?= base_url('/img/css2/4-1.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/4-2.png'); ?>" class="img-fluid rounded-start">
            <img src="<?= base_url('/img/css2/4-3.png'); ?>" class="img-fluid rounded-start">
        </div>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>
