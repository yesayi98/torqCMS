<div class="row">
{if $user.address}
  {foreach $user.address as $address}
  <div class="col-md-6 col-12 mt-30">
    <div class="our-address w-100">
        <p><strong>{$user.name} {$user.lastname}</strong></p>
        <address>
            <P>{$address.address}</P>
            <P>{$address.phone}</P>
        </address>
    </div>
  </div>
  {/foreach}
{else}
  <div class="basket-message col-12">
    <div class="message warning relative">
      {translator selector='youNotHaveAddress'}<i class="fa fa-warning"></i>
    </div>
  </div>
{/if}
</div>
