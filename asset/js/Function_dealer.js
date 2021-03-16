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

$(document).ready(function () {
    $("#downloadpic").click(function () {
        domtoimage.toBlob(document.getElementById('containment'))
            .then(function (blob) {
                window.saveAs(blob, 'dealer.png');
            });
    })
})

$(function () {
    $("#previewcard").click(function () {
        var largeImage = document.getElementById('containment');
        console.log(largeImage.style.width)
        console.log(largeImage.style.height)
        var w = window.open('', '_blank', 'location=yes,scrollbars=yes,status=yes');
        w.document.write(largeImage.outerHTML);
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
        let fontname = filename.substring(filename.lastIndexOf("\\") + 1, filename.lastIndexOf('.'));
        $('#fontname').val(fontname);
    });
});

$(function () {
    $("#save").click(function () {
        let formData = new FormData();
        if ($("#cb_fname").prop('checked')) {
            let firstname = $("#firstname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('firstname', JSON.stringify(firstname));
        } else {
            formData.append('firstname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_lname").prop('checked')) {
            let lastname = $("#lastname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('lastname', JSON.stringify(lastname));
        } else {
            formData.append('lastname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_address").prop('checked')) {
            let address = $("#address").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('address', JSON.stringify(address));
        } else {
            formData.append('address', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_nname").prop('checked')) {
            let nname = $("#nname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('nname', JSON.stringify(nname));
        } else {
            formData.append('nname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_tel").prop('checked')) {
            let tel = $("#tel").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('tel', JSON.stringify(tel));
        } else {
            formData.append('tel', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_line").prop('checked')) {
            let line = $("#line").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('line', JSON.stringify(line));
        } else {
            formData.append('line', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_qrline").prop('checked')) {
            let qrline = $("#qrline").css([
                "width", "height", "top", "left", "display", "z-index"
            ]);
            formData.append('qrline', JSON.stringify(qrline));
        } else {
            formData.append('qrline', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_fb").prop('checked')) {
            let fb = $("#fb").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('fb', JSON.stringify(fb));
        } else {
            formData.append('fb', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_ig").prop('checked')) {
            let ig = $("#ig").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('ig', JSON.stringify(ig));
        } else {
            formData.append('ig', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_profilepic").prop('checked')) {
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

        if ($("#cb_fname").prop('checked')) {
            let firstname = $("#firstname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('firstname', JSON.stringify(firstname));
        } else {
            formData.append('firstname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_lname").prop('checked')) {
            let lastname = $("#lastname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('lastname', JSON.stringify(lastname));
        } else {
            formData.append('lastname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_address").prop('checked')) {
            let address = $("#address").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('address', JSON.stringify(address));
        } else {
            formData.append('address', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_nname").prop('checked')) {
            let nname = $("#nname").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('nname', JSON.stringify(nname));
        } else {
            formData.append('nname', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_tel").prop('checked')) {
            let tel = $("#tel").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('tel', JSON.stringify(tel));
        } else {
            formData.append('tel', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_line").prop('checked')) {
            let line = $("#line").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('line', JSON.stringify(line));
        } else {
            formData.append('line', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_qrline").prop('checked')) {
            let qrline = $("#qrline").css([
                "width", "height", "top", "left", "display", "z-index"
            ]);
            formData.append('qrline', JSON.stringify(qrline));
        } else {
            formData.append('qrline', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_fb").prop('checked')) {
            let fb = $("#fb").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('fb', JSON.stringify(fb));
        } else {
            formData.append('fb', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_ig").prop('checked')) {
            let ig = $("#ig").css([
                "width", "height", "color", "top", "left", "font", "text-align", "text-decoration", "display"
            ]);
            formData.append('ig', JSON.stringify(ig));
        } else {
            formData.append('ig', JSON.stringify({ "display": "none" }));
        }
        if ($("#cb_profilepic").prop('checked')) {
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




