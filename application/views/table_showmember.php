<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>NickName</td>
            <td>Tel</td>
            <td>QR CODE</td>
            <td>LINE</td>
            <td>FACEBOOK</td>
            <td>INSTAGRAM</td>
            <td>ADDRESS</td>
            <td>PICTURE</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query as $row) { ?>
            <tr>
                <td><?php echo $row->m_id; ?></td>
                <td><?php echo $row->m_name; ?></td>
                <td><?php echo $row->m_lname; ?></td>
                <td><?php echo $row->m_nname; ?></td>
                <td><?php echo $row->m_tel; ?></td>
                <td><?php echo $row->m_qr; ?></td>
                <td><?php echo $row->m_line; ?></td>
                <td><?php echo $row->m_fb; ?></td>
                <td><?php echo $row->m_ig; ?></td>
                <td><?php echo $row->m_address; ?></td>
                <td><?php echo $row->m_pic; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>