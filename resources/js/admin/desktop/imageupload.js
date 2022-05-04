export let renderImageUpload = () => {

let chooseFile = document.getElementById('choose-file');
let imgPreview = document.getElementById('image-preview');

chooseFile.addEventListener("change", function() {
    getImgData();
});

function getImgData() {
    const files = chooseFile.files[0];
    if (files) {
      const fileReader = new FileReader();
      fileReader.readAsDataURL(files);
      fileReader.addEventListener("load", function () {
        imgPreview.style.display = "block";
        imgPreview.innerHTML = '<img src="' + this.result + '" />';
      });    
    }
  }
}