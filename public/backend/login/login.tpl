{extends file="backend/index/index.tpl"}
 {block name="sitebar-wrapper"}
 {/block}

{block name="header"}
{/block}

{block name="content-wrapper"}
<div class="height-100v d-flex align-items-center justify-content-center">

 <div class="card card-authentication1 mb-0">
   <div class="card-body">
    <div class="card-content p-2">
     <div class="text-center">
       <img src="{$BASE_BACKEND}assets/images/logo-icon.png" alt="logo icon">
     </div>
     <div class="card-title text-uppercase text-center py-3">Log in</div>
      <form class="login-form" action="{url url='backend/admin/login'}" method="post">
       <div class="form-group">
       <label for="exampleInputUsername" class="sr-only">Username</label>
        <div class="position-relative has-icon-right">
         <input type="text" id="exampleInputUsername" name="admin" class="form-control input-shadow" placeholder="Enter Username">
         <div class="form-control-position">
           <i class="icon-user"></i>
         </div>
        </div>
       </div>
       <div class="form-group">
       <label for="exampleInputPassword" class="sr-only">Password</label>
        <div class="position-relative has-icon-right">
         <input type="password" id="exampleInputPassword" name="password" class="form-control input-shadow" placeholder="Enter Password">
         <div class="form-control-position">
           <i class="icon-lock"></i>
         </div>
        </div>
       </div>
      <button type="submit" class="btn btn-light btn-block">Log in</button>


      </form>
      </div>
     </div>
      </div>
    </div>
{/block}

{block name="footer"}
{/block}
