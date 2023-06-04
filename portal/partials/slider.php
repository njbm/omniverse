<?php 
// $slide1 =[
//         'src'=> 'assets/images/slider/1.jpg',
//         'title'=>'Slide 1',
//         'caption'=> 'This the slide number 1',
//         'alt'=>'' ];

// $slide2 =['src'=> 'assets/images/slider/2.jpg',
//         'title'=>'Slilde 2',
//         'caption'=>'This the slide number 2',
//         'alt'=>'slide2' ];

// $slide3 =['src'=> 'assets/images/slider/5.jpg',
//         'title'=> 'Slide 3',
//         'caption'=> 'This the slide number 3',  
//         'alt'=>'' ];

// $slide4  =['src'=> 'assets/images/slider/9.jpg',
//         'title'=>'Slide 4',
//         'caption'=> 'This the slide number 4',
//         'alt'=>'' ];

// $slides=[$slide1,$slide2,$slide3,$slide4];


    $dataSlides = file_get_contents($datasource . DIRECTORY_SEPARATOR . 'slideritems.json');
    $slides = json_decode($dataSlides);
    //dd($slides);
?>
<!-- <div class=" container"> -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
    <?php
        $active='active';
        foreach($slides as $key=>$slide):
            if ($key==1)
            {
                $active ='active';
            }
            else
            {
                $active='';
            }
    ?>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$key?>" 
         class="<?=$active?>" aria-label="Slide 1"></button>
    <?php endforeach ?>
    
    </div>
    <div class="carousel-inner">
    <?php
        foreach($slides as $key=>$slide):
            if ($key==1)
            {
                $active='active';
            }
            else{
                $active='';
            }
    ?>
        <!-- <div class="carousel-item <?php //=$active?>">
            <img src="<?php //=$slide['src']?>" class="d-block w-100" alt="<?php //=$slide['alt']?>">
            <div class="carousel-caption d-none d-md-block">
                <h5><?php //=$slide['title']?></h5>
                <p><?php //=$slide['caption']?></p>
            </div>
        </div> -->
        
        <div class="carousel-item <?=$active?>">
            <img src="<?= $webroot.'uploads/'.$slide->src?>" class="d-block w-100" alt="<?=$slide->alt?>" 
            height="700">
            <div class="carousel-caption d-none d-md-block">
                <h5><?=$slide->title?></h5>
                <p><?=$slide->caption?></p>
            </div>
        </div>

    <?php endforeach ?>
        
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" 
    data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" 
    data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- </div> -->