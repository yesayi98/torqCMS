{function name=categories level=0}
    <ul class="{if $level==1}categories_mega_menu{elseif $level==2} categorie_sub_menu{/if} level-{$level}">
      {foreach $data as $entry}
      {if !$entry.in_menu || !$entry.active}
        {continue}
      {/if}
        <li class="{if $level < 2}menu_item_children{/if}">
          <a href="{url url="category?c="|cat:$entry.id}" class="{if $entry.subCategories}has-children{/if}">
            <span>{$entry.name}</span>
            {if $entry.subCategories && $level == 0}
              <i class="fa fa-angle-right"></i>
            {/if}
          </a>
          {if $entry.subCategories}
            {call name=categories data=$entry.subCategories level=$level+1}
          {/if}
        </li>
      {/foreach}
    </ul>
{/function}
<div class="row align-items-center">
    {block name='catalog-menu-area'}
      <div class="col-lg-3">
          <div class="categories_menu">
              <div class="categories_title">
                  <h2 class="categori_toggle">{translator selector='catalog'}</h2>
              </div>
              <div class="categories_menu_toggle">
                  {call categories data=$advancedMenuItems}
              </div>
          </div>
      </div>
    {/block}
    {block name='main-menu-area'}
      <div class="col-lg-6">
          <!--main menu start-->
          <div class="main_menu menu_position">
              <nav>
                  <ul>
                    <li><a class="{if $route.controller == 'index'}active{/if}"  href="{url url=''}">{translator selector='home'}</a></li>
                    {foreach $mainCategories as $menuItem}
                    {if !$menuItem.in_menu || !$menuItem.active}
                      {continue}
                    {/if}
                      <li><a href="{url url='category?c='|cat:$menuItem.id}">{$menuItem.name}</a></li>
                    {/foreach}
                  </ul>
              </nav>
          </div>
          <!--main menu end-->
      </div>
    {/block}
    {block name='phone-area'}
    <div class="col-lg-3">
        <div class="call-support">
            <p><a href="tel:{translator selector='phoneNumber'}">{translator selector='phoneNumber'}</a> {translator selector='ifquestions'}</p>
        </div>
    </div>
    {/block}
</div>
