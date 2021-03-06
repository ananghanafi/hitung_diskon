<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Hitung Diskon</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Londrina+Solid:wght@100&family=Russo+One&display=swap" rel="stylesheet">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma/bulma.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <style>
        /* body {
            background: linear-gradient(-100deg, #793925, #9c2653, #164050, #0f3a30);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            font-family: 'Poppins', sans-serif;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        } */
        canvas {
  
        position: absolute;
        top: 0;
        left: 0;
        background-color: #1abc9c;
        z-index: -1;
        overflow: hidden;
        }

        input[type=radio] {
        position: fixed;
        left: -100px;
        }

        input:not([type=radio]) {
        -webkit-appearance: none;
            -moz-appearance: none;
                appearance: none;
        background-color: #fff;
        display: block;
        transition: 300ms ease;
        border-radius: 7px;
        border: 0;
        max-height: 0;
        margin: 0;
        padding: 0 10px;
        overflow: hidden;
        width: 250px;
        opacity: 0;
        font-size: 16px;
        text-align: center;
        outline: 0;
        }

        [id=sign-in]:checked ~ input.sign-in,
        [id=sign-up]:checked ~ input.sign-up,
        [id=reset]:checked ~ input.reset {
        max-height: 40px;
        padding: 10px;
        margin: 10px 0;
        opacity: 1;
        }

        button {
        width: 250px;
        height: 40px;
        border-radius: 7px;
        background-color: #16a085;
        font-size: 0;
        color: white;;
        }
        button:before {
        font-size: 16px;
        }

        [id=sign-in]:checked ~ button:before {
        content: "Hitung";
        }

        [id=sign-up]:checked ~ button:before {
        content: "Hitung";
        }

        [id=reset]:checked ~ button:before {
        content: "Hitung";
        }

        label {
        position: relative;
        display: inline-block;
        text-align: center;
        font-weight: 700;
        cursor: pointer;
        color: #16a085;
        transition: 300ms ease;
        padding: 5px;
        /* width: calc(100% / 3 - 4px); */
        }
        label:after {
        content: "";
        border: 10px solid transparent;
        position: absolute;
        bottom: -10px;
        left: calc(50% - 10px);
        transition: inherit;
        }

        [id=sign-in]:checked ~ [for=sign-in],
        [id=sign-up]:checked ~ [for=sign-up],
        [id=reset]:checked ~ [for=reset] {
        color: #fff;
        }
        [id=sign-in]:checked ~ [for=sign-in]:after,
        [id=sign-up]:checked ~ [for=sign-up]:after,
        [id=reset]:checked ~ [for=reset]:after {
        border-bottom-color: #fff;
        }

        .flex-wrap {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        height: 300px;
        text-align: center;
        /* position: absolute;
        top: 50%;
        left: 50%; */
        /* position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0,0,0,.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0,0,0,.6);
        border-radius: 10px; */
        }

        .image {
            width: 90%;
        }
        body {
        background-color: #1abc9c;
        font-size: 16px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
</head>

<body>
    <canvas id=c></canvas>
    <div class="flex-wrap">                

        <!-- <fieldset>         -->
        <div style="display: flex;">
            <div style="text-align: center; margin-top: -5%;margin-bottom: -2%;"> <img src="komik_depan.png" style="width: 30%;"> </div>
        </div>
            <form >
                <input type="radio" name="rg" id="sign-in" checked/>
                <input type="radio" name="rg" id="sign-up" />
                <!-- <input type="radio" name="rg" id="reset" />         -->
    
                <label for="sign-in">Diskon</label>
                <label for="sign-up">Pembelian</label>
                <!-- <label for="reset">Reset</label>   -->
    
                <input class="sign-in" type="text" id="rupiah" placeholder="Pembelian" />
                <input class="sign-up sign-in" type="number" id="persen" placeholder ="Diskon (%)" />
                <!-- <input type="text" id="rupiah" placeholder="Contoh 10.000"> -->
                <input class="sign-up" type="text" id="myInput" placeholder ="Maks Diskon" />
                <button onclick="btnHitung();return false;">Submit</button>
            </form>
        <!-- </fieldset> -->
    </div>
</body>

</html>
<script>
    var hasil = 0;
    // bodyback()
    function btnHitung(params) {
        // $('#persen').val();
        var temp = Math.pow(10, 1000);
        var persen = $('#persen').val();
        var rupiah = $('#rupiah').val().replace(/[^,\d]/g, '');
        var myInput = $('#myInput').val().replace(/[^,\d]/g, '');
        if (persen>100) {
            Swal.fire({title:"WARNING!!!",text:"Prosentase Harus Kurang dari 100", type:"error"});
        }else{
            if ((rupiah !="" && myInput === "")) {
                
                hasil_temp = rupiah*(persen/100)
                hasil = parseFloat(rupiah) - parseFloat(hasil_temp);
                document.getElementById("myInput").value = formatter.format(hasil);
                // console.log('hasil :>> ', hasil);
                Swal.fire({
                    showCloseButton: true,
                    customClass: 'swal-wide',
                    showCancelButton: false, // There won't be any cancel button
                    showConfirmButton: false, // There won't be any confirm button
                    html: `<div>
                                <div>
                                    <label style="color:white">`+formatter.format(hasil)+`</label>
                                </div>
                                <div>
                                    <button class="btn btn-blue text-center" style="background-color:#1abc9c;color:white" onclick="myFunction()">Copy Hasil Diskon</button>
                                </div>
                            
                            </div>`
                })
            }else if(myInput !="" && rupiah === ""){
                hasil = 100*(myInput/persen)
                // hasil = parseFloat(myInput) - parseFloat(hasil_temp);
                document.getElementById("rupiah").value = formatter.format(hasil);
                console.log('hasil :>> ', hasil);
                Swal.fire({
                    showCloseButton: true,
                    customClass: 'swal-wide',
                    showCancelButton: false, // There won't be any cancel button
                    showConfirmButton: false, // There won't be any confirm button
                    html: `<div>
                                <div>
                                    <label style="color:white">`+formatter.format(hasil)+`</label>
                                </div>
                                <div> 
                                    <button class="btn btn-blue text-center" style="background-color:#1abc9c;color:white" onclick="myFunction2()">Copy Hasil Pembelian</button>
                                </div>
                            
                        </div>`
                })
            }else{
                Swal.fire({
                    title: 'Gagal',
                    text: 'Harus diisi salah satu',
                    icon: 'info',
                    showDenyButton: false,
                    showCancelButton: false,
                    confirmButtonText: 'Oke',
                }).then((result) => {
                        window.location.href = window.location.href;
                })
                // window.location.href = window.location.href;
            }
        }
    }
    var formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
    });
    /* //   .toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,') */
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    rupiah.value = formatRupiah(this.value, "Rp. ");
    });
    var myInput = document.getElementById("myInput");
    myInput.addEventListener("keyup", function(e) {
    // tambahkan 'Rp.' pada saat form di ketik
    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
    myInput.value = formatRupiah(this.value, "Rp. ");
    });
    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
    
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
    
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        // alert("Copied the text: " + copyText.value);
        Swal.fire({
            title: 'Berhasil Di Copy',
            text: ''+copyText.value,
            icon: 'success',
            showDenyButton: false,
            showCancelButton: false,
            confirmButtonText: 'Oke',
        }).then((result) => {
                window.location.href = window.location.href;
        })

    } 
    function myFunction2() {
        /* Get the text field */
        var copyText = document.getElementById("rupiah");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        // alert("Copied the text: " + copyText.value);
        Swal.fire({
            title: 'Berhasil Di Copy',
            text: ''+copyText.value,
            icon: 'success',
            showDenyButton: false,
            showCancelButton: false,
            confirmButtonText: 'Oke',
        }).then((result) => {
                window.location.href = window.location.href;
        })

    } 
    var w = c.width = window.innerWidth,
    h = c.height = window.innerHeight,
    ctx = c.getContext( '2d' ),
    
    minDist = 10,
    maxDist = 30,
    initialWidth = 10,
    maxLines = 100,
    initialLines = 4,
    speed = 5,
    
    lines = [],
    frame = 0,
    timeSinceLast = 0,
    
    dirs = [
   // straight x, y velocity
      [ 0, 1 ],
      [ 1, 0 ],
      [ 0, -1 ],
    	[ -1, 0 ],
   // diagonals, 0.7 = sin(PI/4) = cos(PI/4)
      [ .7, .7 ],
      [ .7, -.7 ],
      [ -.7, .7 ],
      [ -.7, -.7]
    ],
    starter = { // starting parent line, just a pseudo line
      
      x: w / 2,
      y: h / 2,
      vx: 0,
      vy: 0,
      width: initialWidth
    };

    function init() {
    
    lines.length = 0;
    
    for( var i = 0; i < initialLines; ++i )
        lines.push( new Line( starter ) );
    
    ctx.fillStyle = '#222';
    ctx.fillRect( 0, 0, w, h );
    
    // if you want a cookie ;)
    // ctx.lineCap = 'round';
    }
    function getColor( x ) {
        return 'hsl( hue, 80%, 20% )'.replace(
        'hue', x / w * 360 + frame
    );
    // return 'hsl( hue, 80%, 50% )'.replace(
    //     'hue', x / w * 360 + frame
    // );
    }
    function anim() {
    
    window.requestAnimationFrame( anim );
    
    ++frame;
    
    ctx.shadowBlur = 0;
    // ctx.fillStyle = 'rgba(84,84,84,.02)';
    ctx.fillStyle = 'rgba(0,0,0,.02)';
    ctx.fillRect( 0, 0, w, h );
    ctx.shadowBlur = .5;
    
    for( var i = 0; i < lines.length; ++i ) 
        
        if( lines[ i ].step() ) { // if true it's dead
        
        lines.splice( i, 1 );
        --i;
        
        }
    
    // spawn new
    
    ++timeSinceLast
    
    if( lines.length < maxLines && timeSinceLast > 10 && Math.random() < .5 ) {
        
        timeSinceLast = 0;
        
        lines.push( new Line( starter ) );
        
        // cover the middle;
        ctx.fillStyle = ctx.shadowColor = getColor( starter.x );
        ctx.beginPath();
        ctx.arc( starter.x, starter.y, initialWidth, 0, Math.PI * 2 );
        ctx.fill();
    }
    }

    function Line( parent ) {
    
    this.x = parent.x | 0;
    this.y = parent.y | 0;
    this.width = parent.width / 1.25;
    
    do {
        
        var dir = dirs[ ( Math.random() * dirs.length ) |0 ];
        this.vx = dir[ 0 ];
        this.vy = dir[ 1 ];
        
    } while ( 
        ( this.vx === -parent.vx && this.vy === -parent.vy ) || ( this.vx === parent.vx && this.vy === parent.vy) );
    
    this.vx *= speed;
    this.vy *= speed;
    
    this.dist = ( Math.random() * ( maxDist - minDist ) + minDist );
    
    }
    Line.prototype.step = function() {
    
    var dead = false;
    
    var prevX = this.x,
        prevY = this.y;
    
    this.x += this.vx;
    this.y += this.vy;
    
    --this.dist;
    
    // kill if out of screen
    if( this.x < 0 || this.x > w || this.y < 0 || this.y > h )
        dead = true;
    
    // make children :D
    if( this.dist <= 0 && this.width > 1 ) {
        
        // keep yo self, sometimes
        this.dist = Math.random() * ( maxDist - minDist ) + minDist;
        
        // add 2 children
        if( lines.length < maxLines ) lines.push( new Line( this ) );
        if( lines.length < maxLines && Math.random() < .5 ) lines.push( new Line( this ) );
        
        // kill the poor thing
        if( Math.random() < .2 ) dead = true;
    }
    
    ctx.strokeStyle = ctx.shadowColor = getColor( this.x );
    ctx.beginPath();
    ctx.lineWidth = this.width;
    ctx.moveTo( this.x, this.y );
    ctx.lineTo( prevX, prevY );
    ctx.stroke();
    
    if( dead ) return true
    }

    init();
    anim();

    window.addEventListener( 'resize', function() {
    
    w = c.width = window.innerWidth;
    h = c.height = window.innerHeight;
    starter.x = w / 2;
    starter.y = h / 2;
    
    init();
    } )
    
</script>