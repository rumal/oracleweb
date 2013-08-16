<?php
$header = "Ask";
$query = isset($_GET['q']) ? $_GET['q'] : "";
$defaults = array(
    'query' => $query,
    'progress' => 0,
);
?>
<?php include_once './includes/header.php'; ?>
<div id="content">
    <div class="container">
        <h1>Ask a question from Oracle</h1>
        <p class="lead fancy">You can ask any question you would ask from Oracle here. It will give the same answer you would get from the mobile application. </p>

        <?php include_once './includes/search.php'; ?>
        <div class="progress progress-striped active">
            <div class="bar" data-bind="style:{width : progress()+'%'}" style="width: 0%;"></div>
        </div>
        <div data-bind="foreach: conversations">
            <div data-bind="attr : {class: name + '  fade in alert alert-block alert-'+type }">
                <span class="close" data-dismiss="alert">&times;</span>
                <blockquote>
                    <pre data-bind="text : message"></pre>
                    <small><img data-bind="attr:{src : img, alt : name }" class="img-circle"> <span class="spacer">/</span> <a href="#" data-bind="html : name"></a></small>
                </blockquote>
            </div>
            <hr>
        </div>
    </div>
</div>
<script type="text/javascript">
    var defaults = <?php echo json_encode($defaults); ?>;
</script>



<?php include_once './includes/footer.php'; ?>
