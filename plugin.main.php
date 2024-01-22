<?php

use settings\settings;

$settings = new settings;

$name = "awtDashboardWidgets";
$version = "1";

$src = PLUGINS.$name.DIRECTORY_SEPARATOR.'src'.DIRECTORY_SEPARATOR;
$dependenciesPath = $src.'awtWidgets.class.php';

addDependency('high', $name, $dependenciesPath, $version);

if(!$settings->checkIfSettingExists("Show default AWT widgets")) {
    $settings->createSetting("Show default AWT widgets", "true");
    $settings->fetchSettings();
}


if(function_exists('loadAllWidgets') && defined("DASHBOARD") && $settings->getSettingsValue("Show default AWT widgets") == "true") {

    $health = array("name" => "Site Health", "src" => $src."healthWidget.php");
    pushToWidgets($health);

    $updater = array("name" => "Site Update", "src" => $src."updateWidget.php");
    pushToWidgets($updater);

    $widget_group = array("name" => "AWT Widget Group", "src" => $src."awtWidgetGroup.php");
    pushToWidgets($widget_group);

    $createPage = array("name" => "Create Page", "src" => $src."createPageWidget.php");
    pushToWidgets($createPage);

    $notification_widget = array("name" => "Notification Widget", "src" => $src."notificationWidget.php");
    pushToWidgets($notification_widget);

    $page_widget = array("name" => "Pages list Widget", "src" => $src."pageListWidget.php");
    pushToWidgets($page_widget);
    


}