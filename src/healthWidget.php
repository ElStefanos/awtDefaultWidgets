<?php
$widget = new awtWidgets;
$health = $widget->getSiteHealth();
?>

<div class="health shadow" data-name="health">
    <div class="health-wrapper">
        <h3>Health for <?php echo WEB_NAME ?></h3>
        <p class="<?php echo $health ?>"><?php echo $health ?></p>
    </div>
</div>

<style>
    .health {
        display: flex;
        background: #fff;
        border-radius: 5px;
        padding: 10px;
        flex-wrap: wrap;
    }

    .health p {
        font-weight: 800;
    }

    .health .excellent,
    .health .Good
    {
        color: green;
    }

    .health .medium
    {
        color: orange;
    }

    .health .bad
    {
        color: orangered;
    }

    .health .critical
    {
        color: darkred;
    }

    .health h3 {
        width: 100%;
    }

</style>