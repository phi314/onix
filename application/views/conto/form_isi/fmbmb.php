<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Parameter</th>
        <th>Nilai</th>
        <th>Satuan</th>
    </tr>
    </thead>
    <tbody>
    <?php
        $parameter = $this->parameter_m->get_param_by_type('fmbmb');
        $no = 1;
        foreach($parameter as $param):
    ?>
    <tr>
        <td><?php echo $no++; ?>. </td>
        <td>
            <?php echo nama_kimia($param->nama); ?>
        </td>
        <td>
            <?php if($conto->is_selesai == FALSE): ?>
            <button class="btn btn-success btn-sm" onclick="show_param('<?php echo $param->id_parameter; ?>','<?php echo $param->nama; ?>')"><i class="glyphicon glyphicon-edit"></i> nilai</button>
            <?php endif; ?>
            <input type="hidden" id="nilai_<?php echo $param->id_parameter; ?>" value="<?php echo nilai($conto->id_conto, $param->id_parameter); ?>">
            <div class="label label-info"><span id="t_nilai_<?php echo $param->id_parameter; ?>"><?php echo nilai($conto->id_conto, $param->id_parameter); ?></span></div>
        </td>
        <td><?php echo $param->satuan; ?></td>
    </tr>
        <?php endforeach; ?>
    </tbody>
</table>