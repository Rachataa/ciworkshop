<div class="container">
    <div class="mb-3 col-3 mt-3">
        <label for="fontname" class="form-label">ชื่อฟอนต์</label>
        <input class="form-control" type="text" id="fontname" name="fontname" placeholder="Arial">
        <input type="hidden" id="site_url" value="<?php echo site_url() ?>">
    </div>
    <div class="input-group">
        <div class="col-3">
            <input class="form-control" type="file" id="font" name="font" accept=".ttf,.otf,.woff">
        </div>
        <button class="btn btn-secondary" type="submit" id="uploadfont" name="uploadfont">อัปโหลด</button>
    </div>
    <table class="table table-striped table-hover mt-3" style="text-align: center;">
        <thead class="table-dark">
            <tr>
                <td>รหัส</td>
                <td>ชื่อฟอนต์</td>
                <td>ฟอนต์</td>
                <td>ดำเนินการ</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fontoption as $row) { ?>
                <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->fontname; ?></td>
                    <td><?php echo $row->font; ?></td>
                    <td><a class="btn btn-outline-danger" href="<?php echo site_url('Dealer/deletefont/') . $row->id ?>" onclick="return confirm('ยืนยัน')">ลบ</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>