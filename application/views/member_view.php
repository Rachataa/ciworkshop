<div class="container">
    <table class="table table-striped table-hover mt-3" style="text-align: center;">
        <thead class="table-dark">
            <tr>
                <td>Firstname</td>
                <td>Lastname</td>
                <td>NickName</td>
                <td>Tel</td>
                <td>LINE</td>
                <td>FACEBOOK</td>
                <td>INSTAGRAM</td>
                <td>Privilege</td>
                <td>ดำเนินการ</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($member as $row) { ?>
                <tr>
                    <td><?php echo $row->m_name; ?></td>
                    <td><?php echo $row->m_lname; ?></td>
                    <td><?php echo $row->m_nname; ?></td>
                    <td><?php echo $row->m_tel; ?></td>
                    <td><?php echo $row->m_line; ?></td>
                    <td><?php echo $row->m_fb; ?></td>
                    <td><?php echo $row->m_ig; ?></td>
                    <td><?php echo $row->p_id; ?></td>
                    <td class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            ดำเนินการ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="<?php echo site_url('dealer/readtemplate/') . $row->m_id ?>">ดูบัตรตัวแทน</a></li>
                        </ul>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>