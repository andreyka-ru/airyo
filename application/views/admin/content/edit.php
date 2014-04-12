<div class="container">
    <? if ($message) {?>
	<div class="alert alert-<?=$message['type']?>"> <a class="close" data-dismiss="alert" href="#">&times;</a> <? if ($message['type']=='success') {?><span class="glyphicon glyphicon-ok"></span><?}?> <?=$message['text']?></div>
	<? } ?>
    <h1 class="page-header">Наполнение<small> / страницы</small></h1>
    <?php echo form_open("", 'name="edit" method="POST"');?>
		<div class="form-group <?php if (form_error('content')) echo 'has-error"'; ?>">
            <label for="description" class="control-label">Html-код страницы</label>
			<textarea rows="20" id="content" name="content" class="form-control" placeholder=""><? echo $page->content; ?></textarea>
		</div>
		<div class="form-group <?php if (form_error('h1')) echo 'has-error"'; ?>">
			<label for="h1" class="control-label">Название</label>

			<input type="text" class="form-control" id="h1" name="h1" value="<? echo $page->h1; ?>" placeholder="" >
		</div>
		<div class="form-group <?php if (form_error('alias')) echo 'has-error"'; ?>">
			<label for="alias" class="control-label">Адрес</label>
            <input type="text" class="form-control" id="alias" name="alias" value="<? echo $page->alias; ?>" placeholder="" >
		</div>
        <div class="form-group <?php if (form_error('type')) echo 'has-error"'; ?>">
            <label for="type" class="control-label">Тип записи</label>
            <select class="form-control" name="type">
                <option value="Страницы"  <? if ($page->type=='Страницы') echo 'selected'; ?>>Страницы</option>
                <option value="Новости"  <? if ($page->type=='Новости') echo 'selected'; ?>>Новости</option>
                <option value="Фрагменты"  <? if ($page->type=='Фрагменты') echo 'selected'; ?>>Фрагменты</option>
            </select>
        </div>
        <div class="form-group <?php if (form_error('title')) echo 'has-error"'; ?>">
            <label for="title" class="control-label">SEO Title</label>
            <input type="text" class="form-control" id="title" value="<? echo $page->title; ?>" name="title" placeholder="">
        </div>
        <div class="form-group <?php if (form_error('meta_description')) echo 'has-error"'; ?>">
            <label for="meta_description" class="control-label">Meta Description</label>
            <input type="text" class="form-control" id="meta_description" value="<? echo $page->meta_description; ?>" name="meta_description" placeholder="">
        </div>
        <div class="form-group <?php if (form_error('meta_keywords')) echo 'has-error"'; ?>">
            <label for="meta_keywords" class="control-label">Meta Keywords</label>
            <input type="text" class="form-control" id="meta_keywords" value="<? echo $page->meta_keywords; ?>" name="meta_keywords" placeholder="">
        </div>
        <div class="checkbox">
            <label>  <input type="checkbox" id="enabled"  value="1" name="enabled" <? if ($page->enabled) echo 'checked'; ?> > Enabled</label>
        </div>
        <? if (!empty($id)) {?> <input type="hidden" name="id" value="<?=$id?>"><?} else {?><input type="hidden" name="action" value="add"><?}?>
		<button type="submit" class="btn btn-success">Сохранить</button>
    <?php echo form_close();?>
</div>
