<?$this->load->view('laseris/common/header')?>

<article class="inner_article">

<p>Информация для сайта LASERIS.RU подготавливается на основе постоянного мониторинга средств научно-технической информации и в т.ч.: интернета, с акцентом на лазерную технику и лазерные технологии обработки материалов и, в первую очередь - лазерную сварку. При этом необходимо иметь в виду, что технологические особенности сварки и др.лазерных технологий на базе новейших мощных волоконных, диодных и дисковых лазеров - являются конфиденциальной информацией ООО"ЛазерИнформСервис" и других Исполнителей и Партнёров, и, к сожалению - не могут размещаться на сайте и  передаются Заказчикам только на договорной или контрактной основе.</p>
<p>Новые библиографические источники: статьи и книги, отчёты и обзоры, изобретения и патенты,  касающиеся достаточно узкой области науки и техники - только лазерного технологического  оборудования и лазерных технологий обработки материалов, представляют из себя значительный объём - до тысячи источников в месяц, поэтому в разделах сайта приводятся только отдельные примеры таких источников и наиболее актуальная информация.</p>
<br>

<header><h1>ЛЕНТА НОВОСТЕЙ</h1></header>

<ul class="news-list">
    <?
    if (!empty($news))
        foreach ($news as $row)
        {
    ?>
			<li>
				<? 
				if (!empty($row['img_ext']) && file_exists($_SERVER['DOCUMENT_ROOT'].'/public/news/'.$row['id'].'_s'.$row['img_ext'])) {
					if (!empty($row['content'])) echo '<div class="album"><div class="image-thumb"><a href="/news/'.$row['alias'].'"><img src="/public/news/'.$row['id'].'_s'.$row['img_ext'].'"></a></div></div>';
				}
				
				if (!empty($row['content'])) echo '<a href="/news/'.$row['alias'].'" class="title">'.$row['title'].'</a>';
					else echo '<span class="title">'.$row['title'].'</span>';
				?>
				
				<small class="date"><?=$row['date']?></small>
				<div class="anons"><?=$row['anons']?></div>
			</li>
    <? } ?>
</ul>

<div style="clear: both;"></div>

<?= $this->pagination->create_links() ?>

</article>

<?$this->load->view('laseris/common/footer')?>