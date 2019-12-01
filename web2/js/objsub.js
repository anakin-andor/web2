class Image {
    constructor(src,width, height) {
        this.image = document.createElement("img");
        this.image.src = src;
        this.image.style.position = "absolute";
        this.image.width = width;
        this.image.height = height;
        document.body.appendChild(this.image);
    }
    
    show() {
        this.image.style.visibility = "visible";
    }
    
    hide() {
        this.image.style.visibility = "hidden";
    }
    
    resize(width, height) {
        this.image.width = width;
        this.image.height = height;    
    }
}



    show() {
        super.show();
        this.subtitle.style.visibility = "visible";
    }
    
    hide() {
        super.hide();
        this.subtitle.style.visibility = "hidden";
    }
    
    
    
    resize(width, height) {
        super.resize(width, height);
        this.subtitle.style.top = (parseInt(this.image.style.top)+parseInt(height))+"px";
    }
}