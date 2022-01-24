<?php require_once('../controller/articleController.php'); ?>
<?php require_once('../template/header.inc.php'); ?>

<?php foreach($arrayAllArticle as $values): ?>

    <?php if($values['is_active'] === "1"): ?>

    <imc src="<?= $values ['path']; ?>" width="300" height="450" />
    <?= $values ['product_name']; ?>
    <?= $values ['content']; ?>
    <?= $values ['price']; ?>

<?php endif; ?>
<?php endforeach; ?>

<?php require_once('../template/footer.inc.php'); ?>
