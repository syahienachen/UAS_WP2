<?= $this->extend('template/index') ?>            

<?= $this->section('page-content') ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Daftar User</h6>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th style="width: 90px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($users as $rw) {
                    $row = "row".$rw->id;
                    echo $$row;
                }
            ?>                                        
        </tbody>
    </table>
</div>
                        </div>
                    </div>

<?= $this->endSection() ?>  

<?= $this->section('div-modal') ?>
    <form action="<?= base_url(); ?>/admin/changeGroup" method="post">
    <div class="modal fade" id="changeGroupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ubah Role</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="list-group-item p-3">
                        <div class="row align-items-start">
                            <div class="col-md-4 mb-8pt mb-md-0">
                                <div class="media align-items-left">
                                    <div class="d-flex flex-column media-body media-middle">
                                        <span
                                            class="card-title">Role</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-8pt mb-md-0">
                                <select name="group" class="form-control" data-toggle="select" >
                                    <?php
                                        foreach($groups as $key => $row){ 
                                    ?>
                                    <option value="<?= $row->id; ?>"><?= $row->name; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" class="id">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Ubah</button>
                </div>
            </div>
        </div>
    </div>
    </form>
<?= $this->endSection() ?>  
 
<?= $this->section('script-js') ?>    
 
<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-change-group').on('click',function(){
        const id = $(this).data('id');
        
        $('.id').val(id);
        $('#changeGroupModal').modal('show');
});
 
    });
</script>
 
<?= $this->endSection() ?>  