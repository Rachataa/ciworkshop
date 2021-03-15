<?php foreach ($fontoption as $row) { ?>
    <style>
        @font-face {
            font-family: <?php echo $row->fontname ?>;
            src: url(<?php echo base_url() . 'font/' . $row->font ?>);
        }
    </style>
<?php } ?>
<div class="container">
    <form action="<?php echo site_url('Dealer/readtemplate'); ?>" method="POST">
        <div class="input-group mb-3 mt-3">
            <div class="col-2">
                <input type="text" class="form-control" id="memberid" name="memberid" placeholder="User ID">
            </div>
            <button class="btn btn-secondary" type="submit" value="LOAD STYLE" id="load">LOAD STYLE</button>
        </div>
    </form>
    <div class="containment mb-3" id="containment">
        <div class="crop-img">
            <img id="background" src="<?php echo base_url() . 'img/inputlogo.png' ?>" />
        </div>
        <div id="profilepic" class="textbox-pic1" style="display: none;">
            <img id="propic" class="img-template" src="<?php echo base_url() . 'img/profilepiclogo.png' ?>" style="object-fit: cover;" />
        </div>
        <div id="firstname" class="textbox1" style="display: none;">ชื่อ</div>
        <div id="lastname" class="textbox1" style="display: none;">นามสกุล</div>
        <div id="nname" class="textbox1" style="display: none;">ชื่อเล่น</div>
        <div id="tel" class="textbox1" style="display: none;">เบอร์โทรศัพท์</div>
        <div id="line" class="textbox1" style="display: none;">Line</div>
        <div id="qrline" class="textbox-pic1" style="display: none;">
            <img id="qrpic" class="img-template" src="<?php echo base_url() . 'img/qrlogo.png' ?>" />
        </div>
        <div id="fb" class="textbox1" style="display: none;">Facebook</div>
        <div id="ig" class="textbox1" style="display: none;">Instagram</div>
        <div id="address" class="textbox1" style="display: none;">พิกัดนัดรับสินค้า</div>
    </div>
    <button class="btn btn-primary mb-3" id="downloadpic" name="downloadpic">DOWNLOAD</button>
    <button class="btn btn-primary mb-3" id="previewcard" name="previewcard">PREVIEW</button>

</div>


<script>
    $(function() {
        $("#firstname").css(<?php echo $style->t_fname; ?>);
        $("#lastname").css(<?php echo $style->t_lname; ?>);
        $("#nname").css(<?php echo $style->t_nname; ?>);
        $("#tel").css(<?php echo $style->t_tel; ?>);
        $("#line").css(<?php echo $style->t_line; ?>);
        $("#qrline").css(<?php echo $style->t_qrline; ?>);
        $("#fb").css(<?php echo $style->t_fb; ?>);
        $("#ig").css(<?php echo $style->t_ig; ?>);
        $("#profilepic").css(<?php echo $style->t_profilepic; ?>);
        $("#address").css(<?php echo $style->t_address; ?>);
        $("#containment").css(<?php echo $style->t_containment; ?>);

        $("#firstname").text("<?php echo $style->m_name; ?>");
        $("#lastname").text("<?php echo $style->m_lname; ?>");
        $("#nname").text("<?php echo $style->m_nname; ?>");
        $("#tel").text("<?php echo $style->m_tel; ?>");
        $("#line").text("<?php echo $style->m_line; ?>");
        $("#fb").text("<?php echo $style->m_fb; ?>");
        $("#ig").text("<?php echo $style->m_ig; ?>");
        $("#address").text("<?php echo $style->m_address; ?>");

        $("#background").attr("src", "<?php echo base_url() . 'img/' . $style->t_background; ?>");
        $("#qrpic").attr("src", "<?php echo base_url() . 'imgmember/' . $style->m_qr; ?>");
        $("#propic").attr("src", "<?php echo base_url() . 'imgmember/' . $style->m_pic; ?>");
    });
</script>