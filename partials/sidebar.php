<?php 
   
   $strNavData = file_get_contents($datasource.'navitems.json');
   $arrNavData = json_decode($strNavData);

?>

        <!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

			<!-- Sidebar content -->
			<div class="sidebar-content">

            <?php //include_once($partials."profile.php"); ?>


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">


<?php

foreach($arrNavData as $navData){
    $key = array_keys(get_object_vars($navData))[0];
           echo '<li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">'
                .$key.
                '</div> <i class="icon-menu" title="Main"></i></li>';
    
                foreach($navData->$key as $navitem){
                                    echo '<li class="nav-item">
                                    <a href="slider_index.php" class="nav-link active">
                                        <i class="icon-home4"></i>
                                        <span>
                                            '.$navitem.'
                                        </span>
                                    </a>
                                </li>';
                                }
}


    // foreach($navgroups as $key=>$navgroup){
    //     echo '<li class="nav-item-header">
    //             <div class="text-uppercase font-size-xs line-height-xs">'
    //             .$key.$navgroup.
    //             '</div> <i class="icon-menu" title="Main"></i></li>';
    //         if($key === 0){
    //             foreach($mainnavitems as $mainnavitem){
    //                 echo '<li class="nav-item">
    //                 <a href="index.html" class="nav-link active">
    //                     <i class="icon-home4"></i>
    //                     <span>
    //                         '.$mainnavitem.'
    //                     </span>
    //                 </a>
    //             </li>';
    //             }
    //         }

    //         if($key === 1){
    //             foreach($forms as $form){
    //                 echo '<li class="nav-item">
    //                 <a href="index.html" class="nav-link active">
    //                     <i class="icon-home4"></i>
    //                     <span>
    //                         '.$form.'
    //                     </span>
    //                 </a>
    //             </li>';
    //             }
    //         }
    // }

    // foreach($navgroups3D as $key=>$navitems){
    //     echo '<li class="nav-item-header">
    //             <div class="text-uppercase font-size-xs line-height-xs">'
    //             .$key.
    //             '</div> <i class="icon-menu" title="Main"></i></li>';
    //             foreach($navitems as $key2=>$navitem){
    //                 echo '<li class="nav-item">
    //                     <a href="index.html" class="nav-link active">
    //                         <i class="icon-home4"></i>
    //                         <span>
    //                             '.$key2.'
    //                         </span>
    //                     </a>
    //                 </li>';
    //             }
    // }
?>
					



					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->

