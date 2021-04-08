<div class="container">
<div class="row">
    <div class="col-md-5">
        <form action="<?php echo base_url('halaman1/halaman1/index')?>" method="post" class="my-3">
            <div class="input-group">
                <select class="form-select" name='kota'>
                    <option selected value='null'>Choose...</option>
                    <?php foreach ($kota as $option):

                        echo "<option value='".$option['kota_asal']."'>".$option['kota_asal']."</option>";
                        
                    endforeach; ?>
                </select>
                <input class="btn btn-success" type="submit" name="submit" value='Search'>
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