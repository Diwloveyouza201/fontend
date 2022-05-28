<!-- <html>

<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body>
    <form action="" name="frmMain" id="frmMain" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <video id="preview" width="100%"></video>
                </div>
                <div class="col-md-6">
                    <label>SCAN QR CODE</label>
                    <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                </div>
            </div>
        </div>
    </form>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" data-toggle="modal" data-target="#abc" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i>แก้ไขรูป</a>
    </div>
    <div class="modal fade" id="abc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        Instascan.Camera.getCameras().then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }

        }).catch(function(e) {
            console.error(e);
        });
        scanner.addListener('scan', function(c) {
            document.getElementById('text').value = c;
            if (window.confirm('Really go to another page?'))
{

    var xmlhttp = new XMLHttpRequest();   // new HttpRequest instance 
    var theUrl = "http://localhost:1234/Qr_project/getqridqrcode";
    xmlhttp.open("POST", theUrl);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=UTF-8");
    xmlhttp.send(JSON.stringify({"qrcode_ID":55}));

    // They clicked Yes
    // console.log("123");
   // datat = {"qrcode_ID":55};
    // $.ajax({
                    
    //                 url: "http://localhost:1234/Qr_project/getqridqrcode",
    //                 dataType : "json",
    //                 type: "POST",
    //                 headers: {
    //                     "Content-Type": "application/json; charset=utf-8"
    //                 },
    //                 // contentType: 'application/json',
    //                 data: JSON.stringify({"qrcode_ID":55}),
    //                 success: function(result) {
    //                     alert(result.qrcode_ID);
    //                     // alert(result.arr);
    //                 },
    //                 error: function( jqXhr, textStatus, errorThrown ){
    //                     console.log( errorThrown );
    //                 }
    //             });

    //             data: JSON.stringify({data:"test"}),
    // dataType: "json",
    // contentType: "application/json; charset=utf-8",
//                 $.ajax({
//     url: 'users.php',
//     dataType: 'json',
//     type: 'post',
//     contentType: 'application/json',
//     data: JSON.stringify( { "first-name": $('#first-name').val(), "last-name": $('#last-name').val() } ),
//     processData: false,
//     success: function( data, textStatus, jQxhr ){
//         $('#response pre').html( JSON.stringify( data ) );
//     },
//     error: function( jqXhr, textStatus, errorThrown ){
//         console.log( errorThrown );
//     }
// });
}
// else
// {
//     // They clicked no
//     console.log("321");
// }
      

        });
    </script>
</body>

</html> -->

<div >
  <img class="card-bor" src="upload\card\248746097_594971868213394_3050921319929559435_n.png" style="border-radius: 0.5rem; margin-left: 300px; margin-top: 100px; width: 219px; height: 321px; display: block;">

  <img src="upload\card\280633879_550373343321775_4364085816507025928_n.jpg" style="margin-left: 306px; width:207px; height:180px; border-radius: 0.5rem;margin-top: -315px; display: block;">
  <img src="upload\card\281489940_433025568825060_7179040161307245874_n.png" style="margin-left: 310px; width:199px; height:35px; border-radius: 0.5rem;margin-top: -170px; display: block;">
  <h6 style="margin-left: 325px;margin-top: -25;">กิจกรรม : </h6>
  <img src="upload\card\282186858_1030782637807154_5500818548938795054_n.png" style="margin-left: 306px; width:207px; height:120px; border-radius: 0.5rem;margin-top: 155px; display: block;">


  <img src="Image\profile-card.jpg" style="margin-left: 365px; width:90px; height:90px; border-radius: 100rem; margin-top: -190px; display: block;">
  <img src="Image\IMG_0551.jpg" style="margin-left: 368px; width:84px; height:84px; border-radius: 100rem; margin-top: -87px; display: block;">

  <h5 style="margin-left: 310px;margin-top: 10px;padding-left: 10px;"> เฉลียง  เสียงแหบ ( เซา )</h5>
  <!-- <h5 style="margin-left: 454px;margin-top: -39;padding-left: 5px;margin-bottom: 0px;">( เซา )</h5> -->
  <img src="Image\victor-gray.png" style="margin-left: 320px; width: 180px; height:1px; margin-top: 0px; display: block;">

  <h5 style="margin-left: 310px;margin-top: 20px;padding-left: 10px;">อายุ : 59  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Line : samuraiX22</h5>
  <!-- <h5 style="margin-left: 390px;margin-top: -40;">Line : samuraiX22</h5> -->



</div>