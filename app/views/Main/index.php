<div class="container">
        <?foreach ($menu as $item):?>
            <a class="nav-link active" href="category/<?=$item['id']?>"><?=$item['title']?></a>
        <?endforeach;?>

	<? if (!empty($posts)):?>
		<?foreach ($posts as $post):?>
			<div class="panel panel-default">
				<strong><div class="panel-heading"><?=$post['title']?></div></strong>
				<div class="panel-body">
					<?=$post['text']?>
				</div>
			</div>
		<?endforeach;?>
	<?endif;?>
</div>
