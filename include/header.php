<!-- header -->
<div class="header">
	<div class="container">
		<div class="header-menu">
			<a href="/" class="logo">
				
			</a>
			<a href="/" class="mobile-logo">
				
			</a>
				
			<div class="header-menu__item">
				<a href="/otkroy-kamchatku/">Открой Камчатку</a>
				<span>Край вулканов и гейзеров</span>
			</div>
			<div class="header-menu__item">
				<a href="/posetit/">Посетить</a>
				<span>Ждем Вас в гости!</span>
			</div>
			<div class="header-menu__item">
				<a href="/delimsya-opytom/">Делимся опытом</a>
				<span>Коллеги, Вам сюда</span>
			</div>
			<div class="header-menu__item">
				<a href="/podderzhat/">Поддержать</a>
				<span>Для влюбленных в Камчатку</span>
			</div>
			<div class="header-menu__item">
				<a href="/catalog/">Сувениры</a>
				<span>Кусочек Камчатки на память</span>
			</div>
		</div>
		<div class="header-links">
			<a class="mnr" href=""></a>
			<a class="zapoved" href=""></a>
		</div>	
		<div class="bear"></div>
		<div class="fish"></div>
		<div class="mm-ico"></div>
	</div>
</div>
<!-- menu -->
<div class="menu-wrap">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
			"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
				"MAX_LEVEL" => "1",	// Уровень вложенности меню
				"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
				"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				"DELAY" => "N",	// Откладывать выполнение шаблона меню
				"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
				"MENU_CACHE_TYPE" => "N",	// Тип кеширования
				"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
				"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
				"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
			),
			false
		);?>
	</div>
</div>
<!-- mobile-menu -->
<div class="mm-wrap">
	<div class="container">
		<div class="mm-block">
			<div class="mm-top">
				<div class="mm-header">Для<br>влюбленных в&nbsp;Камчатку</div>
				<div class="mm-list">
					<a href="/otkroy-kamchatku/" class="mm-item">Открой Камчатку</a>
					<a href="/posetit/" class="mm-item">Постетить</a>
					<a href="/delimsya-opytom/" class="mm-item">Делимся опытом</a>
					<a href="/podderzhat/" class="mm-item">Поддержать</a>
					<a href="/catalog/" class="mm-item">Сувениры</a>
				</div>
			</div>
			<div class="mm-bottom">
			<div class="mm-header">О&nbsp;заповеднике</div>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "top-mobile", Array(
				"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
				),
				false
			);?>
			<div class="mm-list">
				<a href="" class="mm-item">О нас</a>
				<a href="" class="mm-item">Новости</a>
				<a href="" class="mm-item">Акции</a>
				<a href="" class="mm-item">Международный статус</a>
				<a href="" class="mm-item">Контакты</a>
			</div>
		</div>
		</div>
	</div>
</div>