<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>

<?php
        use \BITM\SEIP12\Slider;
        use \BITM\SEIP12\Utility\Validator;
        use \BITM\SEIP12\Utility\Utility;

        $id = Utility::sanitize($_GET['id']);

        if (!Validator::empty($id)) {
            $slider = new Slider();
            $slide = $slider->edit($id);
        } else { // REfactor using Session based message
           // dd("Id cannot be null or empty");
        }


?>

<!DOCTYPE html>
<html lang="en">
<?php include_once($partials . 'head.php') ?> <!--head-->

<body>
    <?php include_once($partials . 'nav.php') ?> <!--nav-->

    <div class="page-content"> <!--Start Page content -->

        <?php include_once($partials . 'sidebar.php') ?> <!--side bar-->

        <div class="content-wrapper"> <!-- Main content -->
            <?php include_once($partials . 'pageHeader.php') ?> <!--page header-->

            <!-- Content area -->
            <div class="content">
                <?php //include_once($partials.'chart.php') 
                ?>


    <!-- Dashboard content -->


<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Edit Slide Information</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <form action="slider_edit_processor.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?= $slide->id ?>">
                        <input type="hidden" name="uuid" class="form-control" value="<?= $slide->uuid ?>">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Give a Title" 
                        value="<?= $slide->title ?>">
                    </div>
                    <div class="form-group">
                        <label>Alt</label>
                        <input type="text" name="alt" class="form-control" placeholder="Alternative Name" 
                        value="<?= $slide->alt ?>">

                    </div>

                    <div class="form-group">
                        <label>Caption</label>
                        <input type="text" name="caption" class="form-control" placeholder="Add a Caption" 
                        value="<?= $slide->caption ?>">
                    </div>
                    <div class="form-group">
                        <label>Upload Picture</label>
                        <input type="file" name="picture" class="form-control" placeholder="Choose a file">
                        <img src="<?=$webroot.'uploads/'.$slide->src?>" style="width:100px;height:100px">
                        <input name="old_picture" type="text" class="form-control" 
                        value="<?=$slide->src?>" />
                    </div>
                    <!-- <div class="form-group">
                        <label>Url</label>
                        <input type="text" name="src" class="form-control" placeholder="Add a Caption">
                    </div>-->



                    <div class="text-left">
                        <button type="submit" class="btn btn-danger legitRipple"> Cancel </button>
                        <button type="submit" class="btn btn-primary legitRipple">
                            Submit <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


    <!-- /dashboard content -->


            </div> <!-- /content area -->

            <?php include_once($partials . 'footer.php') ?>
        </div> <!-- /main content -->

    </div> <!-- /page content -->
</body>

</html>