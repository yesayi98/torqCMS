<div class="login">
    <div class="login_form_container">
          <form class="account_login_form" action="{url url="account/changedata"}" method="post">
             <div class="row">
                <div class="col-lg-6 col-md-6 form-box-change">
                    <label>{translator selector="name"}<span>*</span></label>
                    <input type="text" name='name' value="{$user.name}">
                </div>

                <div class="col-lg-6 col-md-6 form-box-change">
                    <label>{translator selector="lastname"}<span>*</span></label>
                    <input type="text" name='lastname' value="{$user.lastname}">
                </div>

                <div class="col-lg-6 col-md-6 form-box-change">
                    <label>{translator selector="email"}<span>*</span></label>
                    <input type="email" name='email' value="{$user.email}">
                </div>
                <div class="col-lg-6 col-md-6 form-box-change">
                    <label>{translator selector="phone"}<span>*</span></label>
                    <input type="phone" name='phone' value="{$user.phone}">
                </div>


                <div class="col-lg-6 col-md-6 form-box-change">
                    <label>{translator selector="password"}<span>*</span></label>
                    <input type="password" name="password">
                </div>

                <div class="col-lg-6 col-md-6 form-box-change">
                    <label>{translator selector="repassword"}<span>*</span></label>
                    <input type="password" name="re_password">
                </div>

                <div class="form-box-change-button">
                    <button type="submit">{translator selector="change"}</button>
                </div>
            </form>
        </div>
    </div>
</div>
