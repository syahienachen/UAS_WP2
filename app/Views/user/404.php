<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- 404 Error Text -->
<div class="text-center">
    <div class="error mx-auto" data-text="lock">lock</div>
    <p class="lead text-gray-800 mb-5">Just For Premium User</p>
    <a href="<?= base_url('user'); ?>">&larr; Back to Dashboard</a>
    <div class="card-body">
        <p class="lead text-gray-800 mb-5">Or Upgrade Account In</p>
        <a href="https://wa.me/message/T76TAITF35A5K1" target="_blank" class="btn btn-success btn-block"><i class="fab fa-whatsapp fa-fw"></i>whatsapp</a>
        <br><br><p class="lead text-gray-800 mb-5">Klick "whatsapp" For Upgrade Your Account</p>
    </div>
    
</div>

</div>
<!-- /.container-fluid -->

</div>
<?= $this->endSection(); ?>