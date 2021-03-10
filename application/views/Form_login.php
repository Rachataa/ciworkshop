<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<body>
    <form action="<?php echo site_url('Member/adddata'); ?>" method="POST" enctype="multipart/form-data">
        <label for="m_name">First name: </label><br>
        <input type="text" id="m_name" name="m_name" required placeholder="Name"><br>
        <label for="m_lname">Last name: </label><br>
        <input type="text" id="m_lname" name="m_lname" required placeholder="Lastname"><br>
        <label for="m_nname">Nick name: </label><br>
        <input type="text" id="m_nname" name="m_nname" required placeholder="Nickname"><br>
        <label for="m_tel">Tel: </label><br>
        <input type="text" id="m_tel" name="m_tel" required placeholder="Tel"><br>
        <label for="m_line">Line: </label><br>
        <input type="text" id="m_line" name="m_line" required placeholder="Line ID"><br>
        <label for="m_fb">Facebook: </label><br>
        <input type="text" id="m_fb" name="m_fb" required placeholder="Facebook"><br>
        <label for="m_ig">Instagram: </label><br>
        <input type="text" id="m_ig" name="m_ig" required placeholder="Instagram"><br>
        <label for="m_address">Address: </label><br>
        <input type="text" id="m_address" name="m_address" required placeholder="Address"><br>
        <label for="privilege_id">Privilege: </label><br>
        <input type="text" id="privilege_id" name="privilege_id" required placeholder="Privilege"><br>
        <label for="m_qr">QR CODE: </label><br>
        <input type="file" id="m_qr" name="m_qr" required accept="image/*" ><br>
        <label for="m_pic">Picture: </label><br>
        <input type="file" id="m_pic" name="m_pic" required accept="image/*" ><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
