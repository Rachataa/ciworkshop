<?php foreach ($fontoption as $row) { ?>
    <style>
        @font-face {
            font-family: <?php echo $row->fontname ?>;
            src: url(<?php echo base_url() . 'font/' . $row->font ?>);
        }
    </style>
<?php } ?>

<label for="privilege">PrivilegeID: </label><br>
<input type="text" id="privilege" name="privilege" required placeholder="Privilege"><br><br>
<input type="file" id="img" name="img" accept="image/*" ;><br><br>

<div class="flex-container">
    <div class="containment" id="containment">
        <div class="crop-img">
            <img id="preview" src="<?php echo base_url() . 'img/inputlogo.png' ?>" />
        </div>
        <div id="b_profilepic" style="display: none;">
            <div id="profilepic" class="textbox-pic">
                <img class="img-template" src="<?php echo base_url() . 'img/profilepiclogo.png' ?>" />
            </div>
        </div>
        <div id="b_fname" style="display: none;">
            <div id="firstname" class="textbox">ชื่อ</div>
        </div>
        <div id="b_lname" style="display: none;">
            <div id="lastname" class="textbox">นามสกุล</div>
        </div>
        <div id="b_nname" style="display: none;">
            <div id="nname" class="textbox">ชื่อเล่น</div>
        </div>
        <div id="b_tel" style="display: none;">
            <div id="tel" class="textbox">เบอร์โทรศัพท์</div>
        </div>
        <div id="b_line" style="display: none;">
            <div id="line" class="textbox">Line</div>
        </div>
        <div id="b_qrline" style="display: none;">
            <div id="qrline" class="textbox-pic">
                <img id="elemqr" class="img-template" style="z-index: 0;" src="<?php echo base_url() . 'img/qrlogo.png' ?>" />
            </div>
        </div>
        <div id="b_fb" style="display: none;">
            <div id="fb" class="textbox">Facebook</div>
        </div>
        <div id="b_ig" style="display: none;">
            <div id="ig" class="textbox">Instagram</div>
        </div>
        <div id="b_address" style="display: none;">
            <div id="address" class="textbox">พิกัดนัดรับสินค้า</div>
        </div>
    </div>
    <div class="checkbox-menu">
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_profilepic" name="cb_profilepic" onclick="showbox('cb_profilepic','b_profilepic','editpic');">
            <label for="cb_profilepic">รูปประจำตัว</label>
            <div id="editpic" name="editpic" style="display:none; margin-left:40px; margin-top:5px">
                <input class="form-check-input" id="editpicz" name="editpicz" type="checkbox" onclick="fronttoback('profilepic');">
                <label for="editpicz">อยู่ด้านหลัง</label>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_fname" name="cb_fname" onclick="showbox('cb_fname','b_fname','txt_fname');">
            <label for="cb_fname">ชื่อจริง</label>
            <div id='txt_fname' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('firstname');"><i class="fas fa-bold"></i></button>
                    <button class="btn btn-primary" onclick="italic('firstname');"><i class="fas fa-italic"></i></button>
                    <button class="btn btn-primary" onclick="underline('firstname');"><i class="fas fa-underline"></i></button>
                    <button class="btn btn-primary" onclick="leftprg('firstname');"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('firstname');"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('firstname');"><i class="fas fa-align-right"></i></button>
                    <input class="btn btn-primary color" id="colorfname" type="color" onclick="changecolor('colorfname','firstname')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizefname" onchange="fontsize('sizefname', 'firstname');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id="fontname" onclick="fontstyle('fontname','firstname');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_lname" name="cb_lname" onclick="showbox('cb_lname','b_lname','txt_lname');">
            <label for="cb_lname">นามสกุล</label>
            <div id='txt_lname' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('lastname')"> <i class="fas fa-bold"></i> </button>
                    <button class="btn btn-primary" onclick="italic('lastname')"> <i class="fas fa-italic"></i> </button>
                    <button class="btn btn-primary" onclick="underline('lastname')"> <i class="fas fa-underline"></i> </button>
                    <button class="btn btn-primary" onclick="leftprg('lastname')"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('lastname')"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('lastname')"> <i class="fas fa-align-right"></i> </button>
                    <input class="btn btn-primary color" id="colorlname" type="color" onclick="changecolor('colorlname','lastname')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizelname" onchange="fontsize('sizelname', 'lastname');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id="fontlname" onclick="fontstyle('fontlname','lastname');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_nname" name="cb_nname" onclick="showbox('cb_nname','b_nname','txt_nname');">
            <label for="cb_nname">ชื่อเล่น</label>
            <div id='txt_nname' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('nname')"> <i class="fas fa-bold"></i> </button>
                    <button class="btn btn-primary" onclick="italic('nname')"> <i class="fas fa-italic"></i> </button>
                    <button class="btn btn-primary" onclick="underline('nname')"> <i class="fas fa-underline"></i> </button>
                    <button class="btn btn-primary" onclick="leftprg('nname')"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('nname')"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('nname')"> <i class="fas fa-align-right"></i> </button>
                    <input class="btn btn-primary color" id="colornname" type="color" onclick="changecolor('colornname','nname')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizenname" onchange="fontsize('sizenname', 'nname');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id="fontnname" onclick="fontstyle('fontnname','nname');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_tel" name="cb_tel" onclick="showbox('cb_tel','b_tel','txt_tel');">
            <label for="cb_tel">เบอร์โทรศัพท์</label>
            <div id='txt_tel' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('tel')"> <i class="fas fa-bold"></i> </button>
                    <button class="btn btn-primary" onclick="italic('tel')"> <i class="fas fa-italic"></i> </button>
                    <button class="btn btn-primary" onclick="underline('tel')"> <i class="fas fa-underline"></i> </button>
                    <button class="btn btn-primary" onclick="leftprg('tel')"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('tel')"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('tel')"> <i class="fas fa-align-right"></i> </button>
                    <input class="btn btn-primary color" id="colortel" type="color" onclick="changecolor('colortel','tel')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizetel" onchange="fontsize('sizetel', 'tel');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id="fonttel" onclick="fontstyle('fonttel','tel');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_line" name="cb_line" onclick="showbox('cb_line','b_line','txt_line');">
            <label for="cb_line">LINE</label>
            <div id='txt_line' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('line')"> <i class="fas fa-bold"></i> </button>
                    <button class="btn btn-primary" onclick="italic('line')"> <i class="fas fa-italic"></i> </button>
                    <button class="btn btn-primary" onclick="underline('line')"> <i class="fas fa-underline"></i> </button>
                    <button class="btn btn-primary" onclick="leftprg('line')"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('line')"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('line')"> <i class="fas fa-align-right"></i> </button>
                    <input class="btn btn-primary color" id="colorline" type="color" onclick="changecolor('colorline','line')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizeline" onchange="fontsize('sizeline', 'line');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id="fontline" onclick="fontstyle('fontline','line');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_qrline" name="cb_qrline" onclick="showbox('cb_qrline','b_qrline','editqr');">
            <label for="cb_qrline">QR CODE</label>
            <div id="editqr" name="editqr" style="display:none; margin-left:40px; margin-top:5px">
                <input class="form-check-input" id="editqrz" name="editqrz" type="checkbox" onclick="fronttoback('elemqr');">
                <label for="editqrz">อยู่ด้านหลัง</label>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_fb" name="cb_fb" onclick=" showbox('cb_fb','b_fb','txt_fb');">
            <label for="cb_fb">FACEBOOK</label>
            <div id='txt_fb' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('fb')"> <i class="fas fa-bold"></i> </button>
                    <button class="btn btn-primary" onclick="italic('fb')"> <i class="fas fa-italic"></i> </button>
                    <button class="btn btn-primary" onclick="underline('fb')"> <i class="fas fa-underline"></i> </button>
                    <button class="btn btn-primary" onclick="leftprg('fb')"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('fb')"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('fb')"> <i class="fas fa-align-right"></i> </button>
                    <input class="btn btn-primary color" id="colorfb" type="color" onclick="changecolor('colorfb','fb')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizefb" onchange="fontsize('sizefb', 'fb');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id="fontfb" onclick="fontstyle('fontfb','fb');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_ig" name="cb_ig" onclick="showbox('cb_ig','b_ig','txt_ig');">
            <label for="cb_ig">INSTAGRAM</label>
            <div id='txt_ig' style="display:none; margin-top:5px">
                <div class="btn-group" role="group">
                    <button class="btn btn-primary" onclick="Bold('ig')"> <i class="fas fa-bold"></i> </button>
                    <button class="btn btn-primary" onclick="italic('ig')"> <i class="fas fa-italic"></i> </button>
                    <button class="btn btn-primary" onclick="underline('ig')"> <i class="fas fa-underline"></i> </button>
                    <button class="btn btn-primary" onclick="leftprg('ig')"><i class="fas fa-align-left"></i></button>
                    <button class="btn btn-primary" onclick="center('ig')"><i class="fas fa-align-center"></i></button>
                    <button class="btn btn-primary" onclick="rightprg('ig')"> <i class="fas fa-align-right"></i> </button>
                    <input class="btn btn-primary color" id="colorig" type="color" onclick="changecolor('colorig','ig')">
                    <select class="selectsize btn btn-primary dropdown-toggle" id="sizeig" onchange="fontsize('sizeig', 'ig');">
                        <option>--</option>
                    </select>
                    <select class="selectfont btn btn-primary dropdown-toggle" id = "fontig" onclick="fontstyle('fontig','ig');">
                        <option>--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="txt-edt form-check form-switch">
            <input class="form-check-input" type="checkbox" id="cb_address" name="cb_address" onclick="showbox('cb_address','b_address','txt_address');">
            <label for="cb_address">พิกัดนัดรับสินค้า</label>
            <div id='txt_address' style="display:none; margin-top:5px">
            <div class="btn-group" role="group">
                <button class="btn btn-primary" onclick="Bold('address')"> <i class="fas fa-bold"></i> </button>
                <button class="btn btn-primary" onclick="italic('address')"> <i class="fas fa-italic"></i> </button>
                <button class="btn btn-primary" onclick="underline('address')"> <i class="fas fa-underline"></i> </button>
                <button class="btn btn-primary" onclick="leftprg('address')"><i class="fas fa-align-left"></i></button>
                <button class="btn btn-primary" onclick="center('address')"><i class="fas fa-align-center"></i></button>
                <button class="btn btn-primary" onclick="rightprg('address')"> <i class="fas fa-align-right"></i> </button>
                <input class="btn btn-primary color" id="coloraddress" type="color" onclick="changecolor('coloraddress','address')">
                <select class="selectsize btn btn-primary dropdown-toggle" id="sizeaddress" onchange="fontsize('sizeaddress', 'address');">
                    <option>--</option>
                </select>
                <select class="selectfont btn btn-primary dropdown-toggle" id="fontaddress" onclick="fontstyle('fontaddress','address');">
                    <option>--</option>
                </select>
            </div></div>
        </div>
    </div>
</div>

<div>
    <button class="button-save" id="save">SAVE</button>
    <button type="submit" id="edit" name="edit">EDIT</button>
</div>

<input type="hidden" id="site_url" value="<?php echo site_url() ?>">

<script>
    $(document).ready(function() {
        <?php foreach ($fontoption as $row) { ?>
            $('.selectfont').append('<option value="<?php echo $row->fontname; ?>"><?php echo $row->fontname; ?></option>')
        <?php } ?>
    })
</script>