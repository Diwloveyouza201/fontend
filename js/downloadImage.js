let btnDownload = document.getElementById('btn-download');
let img = document.querySelector("#img_qrcode");
console.log(img);
btnDownload.addEventListener('click', () => {
    console.log("Hello world!");
    let imgPath = img.getAttribute('src');
    let fileName = getFileName(imgPath);
    console.log(imgPath);
    console.log(fileName);
    saveAs(imgPath, fileName)

});

function getFileName(str) {
    return str;

}