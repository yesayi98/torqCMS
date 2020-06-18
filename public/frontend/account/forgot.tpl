{extends file="frontend/index/index.tpl"}

{block name="pageContent"}
<div class="container">
  <div class="row mt-70 mb-70 justify-content-center">
    <!--login area start-->
    <div class="col-md-6 col-12">
        <div class="account_form">
          {if $route.action == 'remindpassword'}
            <h2>{translator selector="youremail"}</h2>
            <form action="{url url="account/remindpassword"}" method="post">
                  <p>
                    <label>{translator selector="email"} <span>*</span></label>
                    <input type="email" name='email' class="form-control">
                 </p>
                <div class="login_submit">
                    <button type="submit">{translator selector="submit"}</button>
                </div>
            </form>
          {else}
            <h2>{translator selector="newPassword"}</h2>
            <form action="{url url="account/newPassword"}" method="post">
                  <p>
                    <label>{translator selector="password"} <span>*</span></label>
                    <input type="password" name='password' class="form-control">
                 </p>
                  <p>
                    <label>{translator selector="repassword"} <span>*</span></label>
                    <input type="password" name='re_password' class="form-control">
                 </p>
                <div class="login_submit">
                    <button type="submit">{translator selector="submit"}</button>
                </div>
            </form>
          {/if}
         </div>
    </div>
  </div>
</div>
{/block}
