<?php
$widget = new awtWidgets;
$pages = $widget->pagesWidget();
?>
<script src="./javascript/pages/pages.js"></script>
<div class="createPage-widget shadow">
    <h3>Create empty page</h3>
    <div class="create-empty">
        <input type="text" id="pageName" placeholder="Name" class="input">
        <button type="button" onclick="createEmptyPage('#pageName', '<?php echo HOSTNAME; ?>')" class="button"
            id="green">Create</button>
    </div>
</div>

<style scoped>

    .createPage-widget {
        background: #fff;
        border-radius: 5px;
        padding: 10px;
    }
    .create-empty {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .create-empty h3 {
        width: 100%;
    }

</style>