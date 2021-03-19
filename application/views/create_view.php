<?php foreach ($fontoption as $row) { ?>
    <style>
        @font-face {
            font-family: <?php echo $row->fontname ?>;
            src: url(<?php echo base_url() . 'font/' . $row->font ?>);
        }
    </style>
<?php } ?>
<div class="container">
    <div class="mb-3 col-3 mt-3">
        <label for="privilege" class="form-label">ระดับตัวแทน</label>
        <input class="form-control" type="text" id="privilege" name="privilege" value="<?php echo $p_id ?>" disabled>
        <input type="hidden" id="site_url" value="<?php echo site_url() ?>">
    </div>
    <div class="input-group">
        <div class="col-3 mb-3">
            <input class="form-control" type="file" id="img" name="img" accept="image/*">
        </div>
    </div>

    <div class="flex-container mb-3">
        <div class="fixcontent">
            <div class="containment" id="containment">
                <div class="crop-img">
                    <img id="preview" src="<?php echo base_url() . 'img/inputlogo.png' ?>" />
                </div>
                <div id="profilepic" class="textbox-pic" style="display: none;">
                    <img class="img-template" src="<?php echo base_url() . 'img/profilepiclogo.png' ?>" />
                    <div class="eyemark"></div>
                </div>
                <div id="firstname" class="textbox" style="display: none;">ชื่อจริง</div>
                <div id="lastname" class="textbox" style="display: none;">นามสกุล</div>
                <div id="nname" class="textbox" style="display: none;">ชื่อเล่น</div>
                <div id="tel" class="textbox" style="display: none;">เบอร์โทรศัพท์</div>
                <div id="line" class="textbox" style="display: none;">ID LINE</div>
                <div id="qrline" class="textbox-pic" style="display: none;">
                    <img id="elemqr" class="img-template" style="z-index: 0;" src="<?php echo base_url() . 'img/qrlogo.png' ?>" />
                    <div class="eyemark"></div>
                </div>
                <div id="fb" class="textbox" style="display: none;">FACEBOOK</div>
                <div id="ig" class="textbox" style="display: none;">Instagram</div>
                <div id="address" class="textbox" style="display: none;">พิกัดนัดรับสินค้า</div>
            </div>
        </div>
        <div class="fixtxtedt">
            <div class="checkbox-menu">
                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_profilepic" name="cb_profilepic" onclick="showbox('cb_profilepic','profilepic','editpic');">
                    <label for="cb_profilepic">รูปประจำตัว</label>
                    <div id="editpic" name="editpic" style="display:none; margin-left:40px; margin-top:5px">
                        <input class="form-check-input" id="editpicz" name="editpicz" type="checkbox" onclick="fronttoback('profilepic');">
                        <label for="editpicz">อยู่ด้านหลัง</label>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_fname" name="cb_fname" onclick="showbox('cb_fname','firstname','txt_fname');">
                    <label for="cb_fname">ชื่อจริง</label>
                    <div id='txt_fname' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('firstname');"><i class="fas fa-bold"></i></button>
                                <button class="btn btn-secondary" onclick="italic('firstname');"><i class="fas fa-italic"></i></button>
                                <button class="btn btn-secondary" onclick="underline('firstname');"><i class="fas fa-underline"></i></button>
                                <button class="btn btn-secondary" onclick="leftprg('firstname');"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('firstname');"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('firstname');"><i class="fas fa-align-right"></i></button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colorfname" type="color" onclick="changecolor('colorfname','firstname')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizefname" onchange="fontsize('sizefname', 'firstname');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontname" onclick="fontstyle('fontname','firstname');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_lname" name="cb_lname" onclick="showbox('cb_lname','lastname','txt_lname');">
                    <label for="cb_lname">นามสกุล</label>
                    <div id='txt_lname' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('lastname')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('lastname')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('lastname')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('lastname')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('lastname')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('lastname')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colorlname" type="color" onclick="changecolor('colorlname','lastname')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizelname" onchange="fontsize('sizelname', 'lastname');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontlname" onclick="fontstyle('fontlname','lastname');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_nname" name="cb_nname" onclick="showbox('cb_nname','nname','txt_nname');">
                    <label for="cb_nname">ชื่อเล่น</label>
                    <div id='txt_nname' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('nname')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('nname')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('nname')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('nname')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('nname')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('nname')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colornname" type="color" onclick="changecolor('colornname','nname')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizenname" onchange="fontsize('sizenname', 'nname');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontnname" onclick="fontstyle('fontnname','nname');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_tel" name="cb_tel" onclick="showbox('cb_tel','tel','txt_tel');">
                    <label for="cb_tel">เบอร์โทรศัพท์</label>
                    <div id='txt_tel' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('tel')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('tel')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('tel')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('tel')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('tel')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('tel')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colortel" type="color" onclick="changecolor('colortel','tel')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizetel" onchange="fontsize('sizetel', 'tel');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fonttel" onclick="fontstyle('fonttel','tel');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_line" name="cb_line" onclick="showbox('cb_line','line','txt_line');">
                    <label for="cb_line">ไอดีไลน์</label>
                    <div id='txt_line' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('line')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('line')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('line')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('line')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('line')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('line')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colorline" type="color" onclick="changecolor('colorline','line')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizeline" onchange="fontsize('sizeline', 'line');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontline" onclick="fontstyle('fontline','line');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_qrline" name="cb_qrline" onclick="showbox('cb_qrline','qrline','editqr');">
                    <label for="cb_qrline">คิวอาโค้ด</label>
                    <div id="editqr" name="editqr" style="display:none; margin-left:40px; margin-top:5px">
                        <input class="form-check-input" id="editqrz" name="editqrz" type="checkbox" onclick="fronttoback('elemqr');">
                        <label for="editqrz">อยู่ด้านหลัง</label>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_fb" name="cb_fb" onclick=" showbox('cb_fb','fb','txt_fb');">
                    <label for="cb_fb">เฟซบุ๊ก</label>
                    <div id='txt_fb' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('fb')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('fb')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('fb')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('fb')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('fb')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('fb')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colorfb" type="color" onclick="changecolor('colorfb','fb')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizefb" onchange="fontsize('sizefb', 'fb');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontfb" onclick="fontstyle('fontfb','fb');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_ig" name="cb_ig" onclick="showbox('cb_ig','ig','txt_ig');">
                    <label for="cb_ig">อินสตาแกรม</label>
                    <div id='txt_ig' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('ig')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('ig')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('ig')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('ig')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('ig')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('ig')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="colorig" type="color" onclick="changecolor('colorig','ig')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizeig" onchange="fontsize('sizeig', 'ig');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontig" onclick="fontstyle('fontig','ig');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="txt-edt form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="cb_address" name="cb_address" onclick="showbox('cb_address','address','txt_address');">
                    <label for="cb_address">พิกัดนัดรับสินค้า</label>
                    <div id='txt_address' style="display:none; margin-top:5px">
                        <div class="textedttop">
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary" onclick="Bold('address')"> <i class="fas fa-bold"></i> </button>
                                <button class="btn btn-secondary" onclick="italic('address')"> <i class="fas fa-italic"></i> </button>
                                <button class="btn btn-secondary" onclick="underline('address')"> <i class="fas fa-underline"></i> </button>
                                <button class="btn btn-secondary" onclick="leftprg('address')"><i class="fas fa-align-left"></i></button>
                                <button class="btn btn-secondary" onclick="center('address')"><i class="fas fa-align-center"></i></button>
                                <button class="btn btn-secondary" onclick="rightprg('address')"> <i class="fas fa-align-right"></i> </button>
                            </div>
                        </div>
                        <div class="textedtbottom">
                            <div class="btn-group" role="group">
                                <input class="btn btn-secondary color" id="coloraddress" type="color" onclick="changecolor('coloraddress','address')">
                                <select class="selectsize btn btn-secondary dropdown-toggle" id="sizeaddress" onchange="fontsize('sizeaddress', 'address');">
                                    <option>--</option>
                                </select>
                                <select class="selectfont btn btn-secondary dropdown-toggle" id="fontaddress" onclick="fontstyle('fontaddress','address');">
                                    <option>--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <button class="btn btn-success" id="save">บันทึก</button>
    </div>
</div>
<input type="hidden" id="site_url" value="<?php echo site_url() ?>">
<script>
    $(document).ready(function() {
        <?php foreach ($fontoption as $row) { ?>
            $('.selectfont').append('<option value="<?php echo $row->fontname; ?>"><?php echo $row->fontname; ?></option>')
        <?php } ?>
    })
</script>