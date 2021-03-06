<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li class="active">Permohonan</li>
</ul>
<!-- END BREADCRUMB -->

<!-- PAGE TITLE -->
<div class="page-title">
    <h2><span class="fa fa-user"></span> Pilih Pemohon</h2>
</div>
<!-- END PAGE TITLE -->

<div class="row">
    <div class="col-md-12">

        <div class="wizard">
            <ul class="steps_4 anchor">
                <li class="selected">
                    <a class="selected" href="#step-1">
                        <span class="stepNumber">1</span>
                        <span class="stepDesc">Pemohon<br /><small>Pilih Pemohon</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-2">
                        <span class="stepNumber">2</span>
                        <span class="stepDesc">Form<br /><small>Data Permohonan</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-3">
                        <span class="stepNumber">3</span>
                        <span class="stepDesc">Preview<br /><small>Pre-edit</small></span>
                    </a>
                </li>
                <li>
                    <a href="#step-4">
                        <span class="stepNumber">4</span>
                        <span class="stepDesc">Simpan<br /><small>Selesai</small></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="line-height-30">&nbsp;</div>

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Listing Pemohon</h3>
                <ul class="panel-controls">
                    <li data-placement="top" data-toggle="tooltip" data-original-title="Tambah pemohon">
                        <a href="<?php echo base_url('pemohon/create'); ?>" ><span class="fa fa-plus"></span></a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <table class="table datatable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Tipe Pemohon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    foreach($pemohon as $row):
                        ?>
                        <tr>
                            <td><?php echo $no++; ?>.</td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo strtoupper($row->type_pemohon); ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td>
                                <a href="<?php echo base_url('permohonan/set_pemohon/'.$row->id_pemohon); ?>" class="btn btn-warning">Pilih</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


