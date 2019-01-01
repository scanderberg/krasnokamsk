{if $is_auth}
<div class="auth-top" style='padding-right: 10px!important; padding-top: 2px!important; padding-bottom: 2px!important;'>
		
<div class="authorized" style='width: 240px!important;'>
    <div class="top">

        <div class="my">
            <div class="dropblock">
                <a class="dropdown-handler">Личный кабинет</a>
                <ul class="dropdown">
                    <li><a href="{$router->getUrl('users-front-profile')}">профиль</a></li>
                    <li><a href="{$router->getUrl('shop-front-myorders')}">мои заказы</a></li>

                </ul>
            </div>

		
        </div>

		
    </div>     

</div>

<div class="top-exit" >			
<a href="{$router->getUrl('users-front-auth', ['Act' => 'logout'])}" class="exit">Выход</a> 
</div>	

</div>
{else}
<div class="auth-top">
    {assign var=referer value=urlencode($url->server('REQUEST_URI'))}
    <a href="{$router->getUrl('users-front-auth', ['referer' => $referer])}" class="first inDialog"><span>Войти</span></a> | 
    <a href="{$router->getUrl('users-front-register', ['referer' => $referer])}" class="inDialog"><span>Зарегистрироваться</span></a>
</div>
{/if}