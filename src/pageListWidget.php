<?php
$widget = new awtWidgets;
$pages = $widget->pagesWidget();
?>

<div class="page-list shadow">
    <h3>Page list</h3>
    <?php foreach ($pages as $page): ?>
        <p class='page-item'>
            <?php echo $page; ?><button class="button"><a href="<?php echo HOSTNAME; ?>?custom&page=<?php echo $page; ?>"
                    target="_blank">Visit</a></button>
        </p>
    <?php endforeach; ?>
</div>

<style>
    .page-list {
        padding: 10px;
        background: #fff;
        border-radius: 5px;
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    .page-item {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    .page-item a {
        text-decoration: none;
        color: inherit;
        width: fit-content;
    }
</style>