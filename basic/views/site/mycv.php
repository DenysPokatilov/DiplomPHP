<h1><?php echo $varInView; ?></h1>

<div>

    <?php foreach ($arrayInView as $item): ?>
        <p>
            <a href="/diplom/basic/web/site/view?id=<?=$item->id?>"><?php echo $item->title ?> </a>
        </p>
    <?php endforeach; ?>
</div>