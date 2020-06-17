{extends file='frontend/index/index.tpl'}
{block name='breadcrumbs_area'}
  <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>{translator selector='loginRegister'}</h3>
                        <ul>
                          <li><a href="{url url=''}">{translator selector='home'}</a></li>
                          <li>{translator selector='loginRegister'}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}
{block name="pageContent"}
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>{translator selector="login"}</h2>
                        <form action="{url url="account/login"}" method="post">
                            <p>
                                <label>{translator selector="email"} <span>*</span></label>
                                <input type="email" name='email' class="form-control">
                             </p>

                             <p>
                                <label>{translator selector="password"} <span>*</span></label>
                                <input type="password" name='password' class="form-control">
                             </p>
                            <div class="login_submit">
                                <div class="pull-left">
                                  <label>
                                    <a href="{url url='account/remindpassword'}">{translator selector="remaindpassword"}</a>
                                  </label>
                                </div>
                                <button type="submit">{translator selector="login"}</button>
                            </div>
                        </form>
                     </div>
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>{translator selector="register"}</h2>
                        <form action="{url url="account/register"}" method="post">
                            <div class="row">

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label>{translator selector="name"}<span>*</span></label>
                                    <input type="text" name='name' class="form-control">
                                </div>

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label>{translator selector="lastname"}<span>*</span></label>
                                    <input type="text" name='lastname' class="form-control">
                                </div>

                                <div class="col-lg-12 col-md-12 form-box">
                                    <label>{translator selector="email"}<span>*</span></label>
                                    <input type="email" name='email' class="form-control">
                                </div>

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label>{translator selector="password"}<span>*</span></label>
                                    <input type="password" name='password' class="form-control">
                                </div>

                                <div class="col-lg-6 col-md-6 form-box">
                                    <label>{translator selector="repassword"}<span>*</span></label>
                                    <input type="password" name='re_password' class="form-control">
                                </div>
                            </div>

                            <div class="login_submit">
                                <div class="pull-left">
                                  <label>
                                    <input type="checkbox" name="agreedwithterms" checked>
                                    <span>{translator selector="agreedwith"} </span>
                                    <a href="{url url="paymannyer/"}">{translator selector="terms"}</a>
                                  </label>
                                </div>
                                <button type="submit">{translator selector="register"}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--register area end-->
            </div>
        </div>
    </div>
{/block}
