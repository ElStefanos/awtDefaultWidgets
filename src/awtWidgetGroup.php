<?php

$widget = new awtWidgets;

$incidentsCount = $widget->incidentsWidget();
$noticeCount = $widget->noticesWidget();
$theme = $widget->themesWidget();
$location = HOSTNAME . 'awt-content/plugins/awtDashboardWidgets/data/icons/';

?>


<div class="awt-widget-group">
    <div class="incidents-widget shadow widget">
        <div class="wrapper">
            <h3>Incidents</h3>
            <img src="<?php echo $location . "triangle-exclamation-solid.svg"; ?>">
        </div>
        <p><?php echo $incidentsCount; ?></p>
    </div>
    <div class="notices-widget shadow widget">
        <div class="wrapper">
            <h3>Notices</h3>
            <img src="<?php echo $location . "flag-regular.svg"; ?>">
        </div>
        <p><?php echo $noticeCount; ?></p>
    </div>
    <div class="plugins-widget shadow widget">
        <h3>Active plugins</h3>
        <p><?php echo $plugins = $widget->pluginStatsWidget() ?></p>
    </div>
    <div class="theme-widget shadow widget">
        <h3>Active Theme</h3>
        <p><?php echo $theme["name"] ?></p>
    </div>

</div>
<style scoped>

    .awt-widget-group {
        display: flex;
        flex-wrap: wrap;
        height: fit-content;
        gap: 30px;
        justify-content: space-between;
    }

    .widget {
        width: 150px;
        height: 150px;
        border-radius: 5px;
        padding: 10px;
        background: #fff;
    }

    .widget .wrapper {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row-reverse;
        align-items: center;
        justify-content: start;
        gap: 20px;
        width: 100%;
    }

    .widget .wrapper img {
        width: 30px;
        height: 30px;
    }

    


</style>