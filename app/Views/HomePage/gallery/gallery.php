<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
       
        
        
        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="<?=base_url()?>/assets/css/index/style.css">
    </head>
    <body>
        
        <section class="content">
            <div class="container">
                <div class="row">
                    <h1 class="text-center" style="width: 100%;">Gallery page of Hostel</h1>
                </div>
                <div class="row">
                    
                <?php foreach($images as $image): ?>
                    <div class="three">
                        <a href="<?=base_url()?>/assets/Images/Gallery/<?=$image['image_path']?>" target="_blank">
                            <div class="gallery" style="background-image: url('<?=base_url()?>/assets/Images/gallery/<?=$image['image_path']?>');">
                           
                        </div>
                        </a>
                    </div>
              
                <?php endforeach; ?>
                    
                    
                </div>
            </div>
        </section>
       
    </body>
</html>





