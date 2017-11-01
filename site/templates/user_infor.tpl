{extends file="master.tpl"}
{block name="content"}
<div class="container">
    {if $str != null}
        <p class="main-center" >{$str}</p>
    {/if}
    <div class="row main">
        <div class="main-login main-center">
            <h3>CUSTOMER INFORMATION</h3>
            <form class="" method="post" action="index.php?c=user&a=bill" name="">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" class="cols-sm-2 control-label">Your Address</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="address" id="address"  placeholder="Enter your address"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="coupon" class="cols-sm-2 control-label">ID Coupon</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="coupon" id="coupon"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="VERIFY">
                </div>

            </form>
        </div>
    </div>
</div>
{/block}