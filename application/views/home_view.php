<div class="container">
<table class="table" style="text-align: center; margin-top : 30px" >
    <thead class="table-dark">
        <tr>
            <td>Privilege ID</td>
            <td>Code</td>
            <td>Name</td>
            <td>Condition</td>
            <td>Status</td>
            <td>ดำเนินการ</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query as $row) { ?>
            <tr>
                <td><?php echo $row->p_id; ?></td>
                <td><?php echo $row->p_code; ?></td>
                <td><?php echo $row->p_name; ?></td>
                <td><?php echo $row->p_conditions; ?></td>
                <?php $status = $this->template_model->checktemplate($row->p_id);
                if ($status == TRUE) { ?>
                    <td>Active</td>
                    <td class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            ดำเนินการ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo site_url('dealer/deletetemplate/') . $row->p_id; ?>" onclick="return confirm('ยืนยัน')">ลบ</a></li>
                            <li><a class="dropdown-item" href="<?php echo site_url('home/design'); ?>">แก้ไข</a></li>
                        </ul>
                    </td>
                <?php } else { ?>
                    <td>Not Active</a></td>
                    <td class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            ดำเนินการ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo site_url('home/design'); ?>">สร้าง</a></li>
                        </ul>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>