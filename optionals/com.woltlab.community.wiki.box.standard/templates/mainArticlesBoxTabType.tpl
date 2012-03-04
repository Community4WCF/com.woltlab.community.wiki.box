<ul class="dataList">
	{foreach from=$boxTabData item=$article}
		<li><a href="index.php?page=Article&amp;articleID={$article->articleID}&amp;languageID={$article->languageID}{@SID_ARG_2ND}"><img src="{icon}{$article->getIcon()}{/icon}" alt=""/><span>{$article->getTitle()}</span></a></li>
	{/foreach}
</ul>