<div class="container">
    <table class="table table-striped table-hover mt-3" style="text-align: center;">
        <thead class="table-dark">
            <tr>
                <td>รหัส</td>
                <td>รหัส</td>
                <td>ชื่อ</td>
                <td>เงื่อนไข</td>
                <td>บัตรตัวแทน</td>
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
                        <td>เปิดใช้งาน</td>
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
                        <td>ปิดใช้งาน</a></td>
                        <td class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                ดำเนินการ
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo site_url('home/design/')?>">สร้าง</a></li>
                            </ul>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>