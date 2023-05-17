<?php
$slider1 = ['src' =>'https://picsum.photos/200/300',
            'title' =>'1st Photo',
            'caption' =>'This is the first photo',
            'alt' =>'Slider 1 alter', ];
$slider2 = ['src' =>'https://picsum.photos/id/870/200/300?grayscale&blur=2',
            'title' =>'2nd Photo',
            'caption' =>'This is the second Photo',
            'alt' =>'Slider 2 alter', ];                      
$slider3 = ['src' =>'https://picsum.photos/seed/picsum/200/300',
            'title' =>'3rd photo',
            'caption' =>'This is the 3rd photo',
            'alt' =>'Slider 3', ]; 
$slides=[$slider1,$slider2,$slider3];
//var_dump($slides);
//dd($slides);           
?>
<?php
$active = '';
foreach($slides as $key => $slider):
    if (0 == $key){
        $active = 'active';
    }else {
        $active = '';
    }
?>
<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$key?>" class="<?=$active?>" area-current="true" area-lebel="S;ider 1"></button>
<?php
   endforeach;
?>




<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="assets/images/slider/1.jpg" alt="Slide 1">
        </div>

        <div class="item">
            <img src="assets/images/slider/2.jpg" alt="Slide 2">
        </div>

        <div class="item">
            <img src="assets/images/slider/5.jpg" alt="Slide 3">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
