{extends file="master.tpl"}
{block name="content"}
<div class="container-fluid bg-3 text-center">
  <h2><b>HÓA ĐƠN</b></h2>
  <h3>{'Thành tiền: '}{$tol|number_format:0:".":","}{'đ'}</h3>
  <h3>{'Chiết khấu: '}{$dis|number_format:0:".":","}{'đ'}</h3>
    <h3>{'Tổng cộng: '}{($tol-$dis)|number_format:0:".":","}{'đ'}</h3>
</div>
{/block}