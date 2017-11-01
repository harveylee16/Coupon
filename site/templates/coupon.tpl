{extends file="master.tpl"} 
{block name="content"}
<!-- {$dulieu|var_dump} -->
<div class="container-fluid bg-3 text-center">    
  <h2><b>MÃ COUPON</b></h2>
  <div class="row">

    {foreach $dulieu as $value}
    
    <div class="col-sm-3">
      <a href="index.php?c=user&a=list"><img src="public/image/download.jpg" class="img-responsive" style="width:100%" alt="Image"></a>
      
      
      {if $value.type_coupon eq 0}     
        <p>coupon: {$value.value} %</p>
      {else}
        <p>coupon: {$value.value} VNĐ</p>
      {/if}
      <p>ngày bắt đầu: {$value.start_date}</p>
      <p>ngày kết thúc: {$value.end_date}</p>
    </div>
    {/foreach}
  </div>
</div>
{/block}
