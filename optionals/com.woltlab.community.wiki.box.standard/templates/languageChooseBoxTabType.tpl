							<div class="pageMenu" id="languageChooseBox">
								<div class="container-1">
									<ul>
									{foreach from=$boxTabData item=availableLanguage}
										<li{if $languageID == $availableLanguage.languageID} class="active"{/if}>
											<a href="index.php?page=Index&amp;languageID={$availableLanguage.languageID}{@SID_ARG_2ND}"><img src="{icon}{/icon}" alt="" /> <span>{lang}wcf.global.language.{@$availableLanguage.languageCode}{/lang}</span></a>
										</li>
									{/foreach}
									</ul>
								</div>
							</div>