{extends file="master.tpl"}
{block name="content"}

    <div class="content">
        <div class="women_main">
            <!-- start content -->
            <div class="catalog">
                <div id="tabs" class="tabs">

                    <div class="graph">
                        <nav>
                            <ul>
                                <li class="tab-current"><a href="#section-1" class="icon-shop"><span>List Coupon</span></a></li>
                                <li><a href="#section-2" class="icon-cup"><span>Add New Coupon</span></a></li>
                            </ul>
                        </nav>
                        <div class="content tab">
                            <section id="section-1" class="content-current">
                                <div class="divTable redTable">
                                    <div class="divTableHeading">
                                        <div class="divTableRow">
                                            <div class="divTableHead">ID</div>
                                            <div class="divTableHead">Code</div>
                                            <div class="divTableHead">Type Coupon</div>
                                            <div class="divTableHead">Value</div>
                                            <div class="divTableHead">Start Date</div>
                                            <div class="divTableHead">End Date</div>
                                            <div class="divTableHead"></div>
                                            <div class="divTableHead"></div>
                                        </div>
                                    </div>
                                    <div class="divTableBody">

                                        {foreach $dulieu as $value}
                                            <div class="divTableRow">
                                                <div class="divTableCell">{$value.id}</div>
                                                <div class="divTableCell">{$value.code|upper}</div>
                                                <div class="divTableCell">{if $value.type_coupon == 0}Phần trăm{else}Giá trị mặc định{/if}</div>
                                                <div class="divTableCell">{$value.value|number_format:0:".":","}</div>
                                                <div class="divTableCell">{$value.start_date|date_format:"%d/%m/%Y"}</div>
                                                <div class="divTableCell">{$value.end_date|date_format:"%d/%m/%Y"}</div>
                                                <div class="divTableCell"><a href="admin.php?c=coupon&a=update&id={$value.id}"><img
                                                                src="public/images/update.png"></a></div>
                                                <div class="divTableCell"><a href="admin.php?c=coupon&a=delete&id={$value.id}"><img
                                                                src="public/images/delete.png"></a></div>
                                            </div>
                                        {/foreach}
                                    </div>
                                </div>
                                <div class="redTable outerTableFooter">
                                    <div class="tableFootStyle">
                                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                                    </div>
                                </div>
                            </section>
                            <section id="section-3">
                                <form action="admin.php?c=coupon&a=add" method="post">
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Code</label>
                                            <div class="col-sm-8 ctl">
                                                <input type="text" name="code" class="form-control1" value="{$ramdum}" id="focusedinput">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Type Coupon</label>
                                            <div class="col-sm-8 ctl">
                                                <select name="type_coupon" id="field-2" required="true" class="form-control">
                                                    <option value=0 selected>Phần trăm</option>
                                                    <option value=1 >Giá trị mặc định</option>
                                                </select>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Value</label>
                                            <div class="col-sm-8 ctl">
                                                <input id="value" name="value" type="text" class="form-control1" id="focusedinput" placeholder="Nhập vào giá trị">
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">Start Date</label>
                                            <div class="col-sm-8 ctl">
                                                {literal}<input type="date" id="start_date" name="start_date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">{/literal}
                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="fo-top">
                                        <div class="form-group">
                                            <label for="focusedinput" class="col-sm-2 control-label">End Date</label>
                                            <div class="col-sm-8 ctl">
                                                {literal}<input type="date" id="end_date" name="end_date" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">{/literal}
                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="btn-1" align="center">
                                        <input type="submit" name="submit" id="btn_acc" value="Accept">
                                        <input type="reset" value="Cancel">
                                    </div>
                                </form>
                            </section>
                        </div><!-- /content -->
                    </div>
                    <!-- /tabs -->
                </div>
                <script src="public/js/cbpFWTabs.js"></script>
                <script>
                    new CBPFWTabs( document.getElementById( 'tabs' ) );
                </script>

            </div>

            <!-- end content -->
            <div class="foot-top">

                <div class="col-md-6 s-c">
                    <li>
                        <div class="fooll">
                            <h1>follow us on</h1>
                        </div>
                    </li>
                    <li>
                        <div class="social-ic">
                            <ul>
                                <li><a href="#"><i class="facebok"> </i></a></li>
                                <li><a href="#"><i class="twiter"> </i></a></li>
                                <li><a href="#"><i class="goog"> </i></a></li>
                                <li><a href="#"><i class="be"> </i></a></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                    </li>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="footer">
                <div class="col-md-3 cust">
                    <h4>CUSTOMER CARE</h4>
                    <li><a href="contact.html">Help Center</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="details.html">How To Buy</a></li>
                    <li><a href="checkout.html">Delivery</a></li>
                </div>
                <div class="col-md-2 abt">
                    <h4>ABOUT US</h4>
                    <li><a href="products.html">Our Stories</a></li>
                    <li><a href="products.html">Press</a></li>
                    <li><a href="faq.html">Career</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </div>
                <div class="col-md-2 myac">
                    <h4>MY ACCOUNT</h4>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="checkout.html">My Cart</a></li>
                    <li><a href="checkout.html">Order History</a></li>
                    <li><a href="details.html">Payment</a></li>
                </div>
                <div class="col-md-5 our-st">
                    <div class="our-left">
                        <h4>OUR STORES</h4>
                    </div>

                    <li><i class="add"> </i>Mark peter</li>
                    <li><i class="phone"> </i>012-586987</li>
                    <li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
                </div>
                <div class="clearfix"> </div>
                <p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>

    </div>
{/block}