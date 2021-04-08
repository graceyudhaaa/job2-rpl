<div class="container">
<div class="row">
    <div class="col-md-5">
        <form action="<?php echo base_url('halaman2/halaman2/index');?>" method="post" class="my-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="keyword" autocomplete="off">
                <input class="btn btn-success" type="submit" name="submit" value="Search">
            </div>
        </form>
    </div>
</div>
<?php
$this->load->library('table');

$template = array(
    'table_open'  => '<table class="table table-striped table-hover table-bordered my-2">'
);

$this->table->set_template($template);

$this->table->set_heading(array('No.','NIM', 'Nama', 'Tanggal Lahir', 'Kota Asal','Jurusan', 'Prodi'));

$i = 1;
foreach($mahasiswa as $mhs):
$this->table->add_row(array($i++, $mhs['nim'], $mhs['nama'], $mhs['tgl_lahir'], $mhs['kota_asal'], $mhs['jurusan'], $mhs['prodi']));
endforeach;

echo $this->table->generate();
?>
</div>