<?php
$widget = new awtWidgets;
$health = $widget->getSiteHealth();
?>
<script src="./javascript/settings/settings.js"></script>

</script>
<div class="updates shadow">
    <h3>Check for updates</h3>
    <p class="version">You are currenlty using: <?php echo AWT_VERSION ?></p>
    <p id="latest-version"><span></span></p>
    <button type="button" class="button check-updates" id="green" onclick="checkForUpdates(this);">Check for updates</button>
</div>

<style>

    .updates {
        background: #fff;
        padding: 0 10px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .updates h3 {
        width: 100%;
    }

</style>

