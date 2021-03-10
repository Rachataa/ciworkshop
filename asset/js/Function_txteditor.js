function fontsize(size, id) {
    let fsize = document.getElementById(size);
    fsize.onclick = function () {
        let txtbox = document.getElementById(id)
        txtbox.style.fontSize = this.value + "px";
    }
}

function fontstyle(style, id){
    let fstyle = document.getElementById(style);
    fstyle.onclick = function(){
        let txtbox = document.getElementById(id)
        txtbox.style.fontFamily = this.value;
    }
}

function showbox(cb, tb, edt){
    let checkBox = document.getElementById(cb);
    let textbox = document.getElementById(tb);
    let textedt = document.getElementById(edt);
    if (checkBox.checked == true) {
        textbox.style.display = "block";
        textedt.style.display = "block";
    } else {
        textbox.style.display = "none";
        textedt.style.display = "none";
    }
}

function Bold(id) {
    let text = document.getElementById(id).style.fontWeight;
    if (text != 'bold') {
        document.getElementById(id).style.fontWeight = 'bold';
    } else {
        document.getElementById(id).style.fontWeight = 'normal';
    }
}

function changecolor(colorpicker, id) {
    let color = document.getElementById(colorpicker);
    let text = document.getElementById(id);
    color.addEventListener('change', function () {
        text.style.color = this.value;
    });
}

function italic(id) {
    let stylefont = document.getElementById(id).style.fontStyle;
    if (stylefont != 'italic') {
        document.getElementById(id).style.fontStyle = "italic";
    }
    else {
        document.getElementById(id).style.fontStyle = "normal";
    }
}

function leftprg(id) {
    let stylefont = document.getElementById(id).style.textAlign;
    if (stylefont != 'left') {
        document.getElementById(id).style.textAlign = 'left';
    }
}

function center(id) {
    let stylefont = document.getElementById(id).style.textAlign;
    if (stylefont != 'center') {
        document.getElementById(id).style.textAlign = 'center';
    }
}

function rightprg(id) {
    let stylefont = document.getElementById(id).style.textAlign;
    if (stylefont != 'right') {
        document.getElementById(id).style.textAlign = 'right';
    }
}

function underline(id) {
    let stylefont = document.getElementById(id).style.textDecoration;
    if (stylefont != 'underline') {
        document.getElementById(id).style.textDecoration = 'underline';
    } else {
        document.getElementById(id).style.textDecoration = 'none';
    }
}

function fronttoback(id) {
    let elem = document.getElementById(id).style.zIndex;
    if (elem != '-1') {
        document.getElementById(id).style.zIndex = '-1';
    } else {
        document.getElementById(id).style.zIndex = '0';
    }
}
