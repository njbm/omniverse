<?php 
    $data = file_get_contents($datasource.'sidebar.json');
    $menu = json_decode($data, true);
?>

        <!-- Main sidebar -->
		<div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

			<!-- Sidebar content -->
			<div class="sidebar-content">

            <?php include_once($partials."profile.php"); ?>

				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">
<?php

foreach ($menu as $item) {

    echo '<li class="nav-item nav-item-submenu">
            <a href="' . $item['url'] . '" class="nav-link">
            <i class="icon-home"></i> 
            <span>' . $item['name'] . ' </span> </a>';
    if (isset($item['submenu'])) {
    echo '<ul class="nav nav-group-sub" data-submenu-title="Layouts">';
    foreach ($item['submenu'] as $submenu_item) {
        echo '<li class="nav-item"><a href="' . $submenu_item['url'] . '" class="nav-link active">
        ' . $submenu_item['name'] . '</a></li>';

    }
    echo '</ul>';
}
echo '</li>';

}
?>



</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->