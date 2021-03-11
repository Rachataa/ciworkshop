$(function () {
    $(".textbox").draggable({
        containment: ".containment",
        cursor: 'move',
    });
    $(".textbox").resizable({
        handles: 'n, e, s, w, ne, se, sw, nw',
        containment: ".containment",
    });
    $(".textbox-pic").draggable({
        containment: ".containment",
        cursor: 'move',
    });
    $(".textbox-pic").resizable({
        handles: 'n, e, s, w, ne, se, sw, nw',
        containment: ".containment",
    });
});

$(document).ready(function () {
    const data = [8, 9, 10, 11, 12, 14, 16, 18, 20, 22, 24, 28, 36, 48, 72];
    $('.selectsize').append(
        data.map(function (e) {
            return $('<option/>', {
                value: e,
                text: e
            })
        })
    )
});

$(function () {
    $("#img").change(function () {
        const _URL = window.URL || window.webkitURL;
        let file, img;
        if ((file = this.files[0])) {
            img = new Image();
            const objectUrl = _URL.createObjectURL(file);
            img.src = objectUrl;
            img.onload = function () {
                const height = this.height;
                const width = this.width;
                if (height > 1200 || width > 1200) {
                    alert("Height and Width must not exceed 1200px.");
                } else {
                    $(".containment").css({ "width": width, "height": height })
                    $('#preview').attr('src', objectUrl);
                }
            }
        }
    })
});

$(function () {
    $("#downloadpic").click(function () {
        domtoimage.toBlob($('containment')).then(function (blob) {
            window.saveAs(blob, 'dealer.png');
        });
    })
})

$(function () {
    $("#uploadfont").click(function () {
        let formData = new FormData();
        formData.append('fontname', $('#fontname').val());
        formData.append('font', $('#font')[0].files[0]);
        let site_url = $('#site_url').val();
        $.ajax({
            url: site_url + '/dealer/uploadfontstyle',
            type: "POST",
            contentType: false,
            cache: false,
            processData: false,
            data: formData,
            success: function () {
                alert("SUCCESS");
                location.reload(true);
            }
        })
    })

    $("#font").change(function () {
        let filename = $(this).val();
        let lastIndex = filename.lastIndexOf("\\");
        if (lastIndex >= 0) {
            filename = filename.substring(lastIndex + 1);
        }
        $('#fontname').val(filename);
    });
});

$(function () {
    $("#save").click(function () {
        let formData = new FormData();
        let cb_fname = document.getElementById("cb_fname");
        if (cb_fname.checked == true) {
            let firstname = $("#firstname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('firstname', JSON.stringify(firstname));
        } else {
            formData.append('firstname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_lname").prop('checked', true)){
            let lastname = $("#lastname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('lastname', JSON.stringify(lastname));
        } else {
            formData.append('lastname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_address").checked == true) {
            let address = $("#address").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('address', JSON.stringify(address));
        } else {
            formData.append('address', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_nname").checked == true) {
            let nname = $("#nname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('nname', JSON.stringify(nname));
        } else {
            formData.append('nname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_tel").checked == true) {
            let tel = $("#tel").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('tel', JSON.stringify(tel));
        } else {
            formData.append('tel', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_line").checked == true) {
            let line = $("#line").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('line', JSON.stringify(line));
        } else {
            formData.append('line', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_qrline").checked == true) {
            let qrline = $("#qrline").css([
                "width", "height", "top", "left", "display", "z-index"
            ]);
            formData.append('qrline', JSON.stringify(qrline));
        } else {
            formData.append('qrline', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_fb").checked == true) {
            let fb = $("#fb").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('fb', JSON.stringify(fb));
        } else {
            formData.append('fb', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_ig").checked == true) {
            let ig = $("#ig").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('ig', JSON.stringify(ig));
        } else {
            formData.append('ig', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_profilepic").checked == true) {
            let profilepic = $("#profilepic").css([
                "width", "height", "top", "left", "display", "z-index"
            ]);
            formData.append('profilepic', JSON.stringify(profilepic));
        } else {
            formData.append('profilepic', JSON.stringify({ "display": "none" }));
        }

        formData.append('containment', JSON.stringify($('#containment').css(["width", "height"])));
        formData.append('file', $('#img')[0].files[0]);
        formData.append('privilege', $('#privilege').val());
        
        let site_url = $('#site_url').val();
        $.ajax({
            url: site_url + '/dealer/savetemplate',
            type: "POST",
            contentType: false,
            cache: false,
            processData: false,
            data: formData,
            dataType: "json",
            success: function ($statusfile) {
                if ($statusfile.status == '0') { 
                    alert($statusfile.message);
                } else { 
                    alert($statusfile.message);
                    location.reload(true);
                }
            }
        });
    });
});

$(function () {
    $("#edit").click(function () {
        let formData = new FormData();

        if ($("#cb_fname").checked == true) {
            let firstname = $("#firstname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('firstname', JSON.stringify(firstname));
        } else {
            formData.append('firstname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_lname").checked == true) {
            let lastname = $("#lastname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('lastname', JSON.stringify(lastname));
        } else {
            formData.append('lastname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_address").checked == true) {
            let address = $("#address").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('address', JSON.stringify(address));
        } else {
            formData.append('address', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_nname").checked == true) {
            let nname = $("#nname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('nname', JSON.stringify(nname));
        } else {
            formData.append('nname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_tel").checked == true) {
            let tel = $("#tel").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('tel', JSON.stringify(tel));
        } else {
            formData.append('tel', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_line").checked == true) {
            let line = $("#line").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('line', JSON.stringify(line));
        } else {
            formData.append('line', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_qrline").checked == true) {
            let qrline = $("#qrline").css([
                "width", "height", "top", "left", "display", "z-index"
            ]);
            formData.append('qrline', JSON.stringify(qrline));
        } else {
            formData.append('qrline', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_fb").checked == true) {
            let fb = $("#fb").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('fb', JSON.stringify(fb));
        } else {
            formData.append('fb', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_ig").checked == true) {
            let ig = $("#ig").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('ig', JSON.stringify(ig));
        } else {
            formData.append('ig', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_profilepic").checked == true) {
            let profilepic = $("#profilepic").css([
                "width", "height", "top", "left", "display", "z-index"
            ]);
            formData.append('profilepic', JSON.stringify(profilepic));
        } else {
            formData.append('profilepic', JSON.stringify({ "display": "none" }));
        }

        formData.append('containment', JSON.stringify($('#containment').css(["width", "height"])));
        formData.append('file', $('#img')[0].files[0]);
        formData.append('privilege', $('#privilege').val());

        let site_url = $('#site_url').val();
        $.ajax({
            url: site_url + 'dealer/edittemplate',
            type: "POST",
            contentType: false,
            cache: false,
            processData: false,
            data: formData,
            dataType: "json",
            success: function ($statusfile) {
                if ($statusfile.status == '0') { 
                    alert($statusfile.message);
                } else { 
                    alert($statusfile.message);
                    location.reload(true);
                }
            }
        });
    });
});




