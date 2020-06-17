{extends file='frontend/index/index.tpl'}
{block name='breadcrumbs_area'}

  <!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>{$user.name} {$user.lastname}</h3>
                        <ul>
                            <li>{translator selector='personalAccount'}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!--breadcrumbs area end-->
{/block}
{block name="pageContent"}
<!-- my account start  -->
<section class="main_content_area">
    <div class="container">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active">{translator selector='personalAccount'}</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link">{translator selector='orders'}</a></li>
                            <li><a href="#address" data-toggle="tab" class="nav-link">{translator selector='deliveryAddress'}</a></li>
                            <li><a href="#account-details" data-toggle="tab" class="nav-link">{translator selector='personalInfo'}</a></li>
                            <li><a href="{url url="account/logout"}" class="nav-link">{translator selector='logout'}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h3>{translator selector='account'} </h3>
                            <p>{translator selector='accountText'}</p>
                            <h5 class="my-account-id">{translator selector='specific_id'} - <span>{$user.specific_id}</span></h5>
                            <h6 class="my-account-bon">{translator selector='youraccountbonuses'}</h6>
                        </div>

                        <div class="tab-pane fade" id="orders">
                            <h3>{translator selector='orders'}</h3>
                            {include file="frontend/account/orders/table.tpl"}
                        </div>

                        <div class="tab-pane" id="address">
                            <h3 class="billing-address">{translator selector='deliveryAddress'}</h3>
                            <p>{translator selector='thereAreYourAddresses'}</p>
                            {include file="frontend/account/address.tpl"}
                        </div>

                        <div class="tab-pane fade" id="account-details">
                            <h3>Անձնական տվյալներ</h3>
                            {include file="frontend/account/personal.tpl"}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account end   -->
{/block}
