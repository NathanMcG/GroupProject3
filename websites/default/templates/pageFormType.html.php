<div style="width: 100%;">
    <div style="display: flex;flex: 1 0 auto;width: 100%;margin-top: 40px;margin-bottom: 40px;">
        <?=loadTemplate('../templates/formClassification.html.php',$class);?>
        <?=loadTemplate('../templates/formType.html.php',$type);?>
    </div>

    <?=loadTemplate('../templates/listTypes.html.php',array());?>
