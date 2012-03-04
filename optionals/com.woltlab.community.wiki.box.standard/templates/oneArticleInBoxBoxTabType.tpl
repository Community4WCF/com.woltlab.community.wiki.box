						{assign var='articleObj' value=$boxTabData}
						{assign var='articleHideMenu' value=true}
							<div id="{cycle values='container-1,container-2'}">
								{include file='articleContent' sandbox=true}
							</div>