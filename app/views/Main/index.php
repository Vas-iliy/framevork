<div class="container">
    <ul class="nav nav-pills">
        <?foreach ($menu as $item):?>
            <li><a href="category/<?=$item['id']?>"><?=$item['title']?></a></li>
        <?endforeach;?>
    </ul>
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
