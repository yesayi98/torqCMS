{extends file="frontend/index/index.tpl"}
{block name="pageContent"}

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                       <h3>{translator selector='contact'}</h3>
                        <ul>
                            <li><a href="{url url=""}">{translator selector='home'}</a></li>
                            <li>{translator selector='contact'}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--contact area start-->
    <div class="contact_area mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message content">
                        <h3>{translator selector='contactUs'}</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>  {translator selector='address'}</li>
                            <li><i class="fa fa-envelope-o"></i> <a href="contact.html#">{translator selector='emailAddress'}</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:{translator selector='phoneNumber'}">{translator selector='phoneNumber'}</a>  </li>
                        </ul>
                        <iframe style="margin-top: 30px;" src="{$location}" width="100%" height="350" frameborder="0" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message form">
                        <h3>{translator selector='writeUs'}</h3>
                        <form id="contact-form" method="POST" action="{url url="contact/send"}">
                            <p>
                               <label>{translator selector='yourname'}</label>
                                <input name="name" placeholder="{translator selector='name'}*" type="text">
                            </p>
                            <p>
                               <label>{translator selector='youremail'}</label>
                               <input name="email" placeholder="{translator selector='email'} *" type="email">
                            </p>
                            <div class="contact_textarea">
                                <label>{translator selector='yourmessage'}</label>
                                <textarea placeholder="{translator selector='yourmessage'}*" name="message" class="form-control2" ></textarea>
                            </div>
                            <button type="submit"> {translator selector='send'}</button>
                            <p class="form-messege"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact area end-->

{/block}
