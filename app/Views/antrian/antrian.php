<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Antrian</title>
        <link
            href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700|Mukta:500,700"
            rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('dist/css/style.css'); ?>">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <script>
            setTimeout(function () {
                window.location.href = '<?php echo base_url(' / antrian '); ?>'
            }, 5000);
        </script>
    </head>
    <body class="is-boxed has-animations">

        <?php 
                    foreach($antrian as $key => $data) {  $a = $data['antrian_id']; 

                      } 

                    

                    ?>
        <main>
            <section class="hero">
                <div class="container">
                <div class="hero-inner">
                        <div class="hero-copy">
                    <h1 class="hero-title h2-mobile mt-0 is-revealing">Antrian</h1>
                    <h1 class="hero-paragraph is-revealing">

                    <?php 
                                  $request = \Config\Services::request();
                                  $s = $request->uri->getSegment(3);
                                 if ($s == '4') {
                                                       echo "Anda Telah mengambil no antrian untuk customer service dengan no antrian CS".$a;               
                                                                   }  elseif ($s == '5') {
                                                                       echo "Anda Telah mengambil no antrian untuk pengaduan dengan no antrian PG".$a;   
                                                                   }  elseif ($s == '6') {
                                                                       echo "Anda Telah mengambil no antrian untuk Permohonan Baru dengan no antrian PB".$a;   
                                                                   } elseif ($s == '7') {
                                                                       echo "Anda Telah mengantrian untuk Perpanjang dengan no antrian PNG".$a;   
                                                                   }                   
                                ?>

                    </h1>

                </div>

            </div>
            <!-- <div class="container"> <?php
            if(!empty(session()->getFlashdata('success'))){ ?> <div class="alert
            alert-success"> <?php echo session()->getFlashdata('success');?> </div> <?php }
            ?> <?php if(!empty(session()->getFlashdata('info'))){ ?> <div class="alert
            alert-info"> <?php echo session()->getFlashdata('info');?> </div> <?php } ?>
            <?php if(!empty(session()->getFlashdata('warning'))){ ?> <div class="alert
            alert-warning"> <?php echo session()->getFlashdata('warning');?> </div> <?php }
            ?> </div> -->

            <div class="footer-copyright">&copy; 2021 Universitas Pelita Bangsa</div>
        </div>
    </div>
</footer>
</div>

<script src="<?php echo base_url('dist/js/main.min.js'); ?>"></script>
</body>
</html>