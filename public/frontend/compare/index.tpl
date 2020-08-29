{extends file="frontend/index/index.tpl"}

{block name="pageContent"}
<div class="container">
  <div class="table-content mt-3 mb-3 cart_page table-responsive">
    {if $products}
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">{translator selector="product"}</th>
          <th scope="col">{translator selector="name"}</th>
          <th scope="col">{translator selector="price"}</th>
          <th scope="col">{translator selector="description"}</th>
          {foreach from=$options item=$option key=$key}
          <th scope="col">{$option}</th>
          {/foreach}
          <th scope="col">{translator selector="action"}</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$products item=$product key=$key name=name}
          <tr>
            <th scope="row">{$key+1}</th>
            <td><img src="{$product.images.0.thumbnails.0.thumb_path}" alt="{$product.name}"> </td>
            <td>{$product.name}</td>
            <td><p> {$product.price} {$currentCur.symbol} </p></td>
            <td>{$product.description|unescape|strip_tags|truncate}</td>
            {foreach from=$options item=$option key=$key}
            <th scope="col">
              {foreach from=$product.options item=$productoption key='key'}
                  {if $productoption.name == $option}
                    {foreach from=$productoption.values key='key' item='value' name='foo'}
                      {$value.value}{if not $smarty.foreach.foo.last}, {/if}
                    {/foreach}
                  {/if}
              {/foreach}
            </th>
            {/foreach}
            <td><button type="button" class="btn btn-danger compare-delete-btn" data-id="{$product.id}" data-url="{url url="compare/delete"}" name="button"><i class="fa fa-trash"></i></button></td>
          </tr>
        {/foreach}
      </tbody>
    </table>
    {else}
    <div class="message-container mt-3 mb-3">
      <div class="message warning">
        <h3><i class="fa fa-warning"></i> {translator selector="products_not_found"}</h3>
      </div>
    </div>

    {/if}

  </div>
</div>
{/block}
