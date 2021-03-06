<?php $this->beginContent('/layouts/main'); ?>
<div id="ContactsPageView" class="ZurmoDefaultPageView ZurmoPageView PageView">
<div id="ZurmoDefaultView">
<div class="GridView" >
<div id="HeaderView"><!-- Start of themes/default/templates/HeaderView.xhtml --><div id="MainLogo" class="zurmo-logo"></div>
<div class="GridView">
<div id="HeaderLinksView"><div class="clearfix">
<div id="corp-logo"><span>进击的巨喵后台管理</span></div><div id="user-toolbar" class="clearfix">
<ul id="user-header-menu" class="headerNav nav">
<li  >
<a  style="float:left;margin-right:5px;" href="<?php echo $this->createUrl("site/index");?>"><span>管理</span></a>
<a  style="float:left;margin-right:5px;" href="javascript:void(0);"><span><?php echo Yii::app()->user->name;?></span></a>
<a  style="float:left" href="<?php echo $this->createUrl("site/logout");?>"><span>退出</span></a>
</li>
</ul>


</div></div></div><div class="GridView"><div id="GlobalSearchView"></div></div></div>
</div><div class="AppContainer clearfix GridView" >
<div class="AppNavigation clearfix GridView" >

<div id="MenuView">
<ul class="nav">
<li <?php  if($this->getId()=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>用户统计</span></a></li>
<li <?php  if($this->getId().'/'.$this->getAction()->id=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>Player总览</span></a></li>
<li <?php  if($this->getId().'/'.$this->getAction()->id=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>User总览</span></a></li>
<li <?php  if($this->getId().'/'.$this->getAction()->id=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>机种分布</span></a></li>
<li <?php  if($this->getId().'/'.$this->getAction()->id=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>积分分布</span></a></li>
<li <?php  if($this->getId().'/'.$this->getAction()->id=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>玩家检索</span></a></li>
<li <?php  if($this->getId().'/'.$this->getAction()->id=='')echo 'class="active"';?>><a href="<?php echo $this->createUrl('');?>"><span></span><span>付费玩家追踪</span></a></li>
</div>

</div>
<div id="FlashMessageView"></div>
<div id="ActionBarSearchAndListView" class="AppContent GridView" >

<?php echo $content;?>

</div></div>
<script>
jQuery(function($) {
  $(".nav li").hover(
    function () {
      if ($(this).hasClass("parent")) {
        $(this).addClass("over");
      }
    },
    function () {
      $(this).removeClass("over");
    }
  );
</script>
<div id="ModalContainerView">
	<div id="modalContainer"></div>
</div>
<div id="ModalGameNotificationContainerView"></div>
<div id="FooterView">
	<!-- Start of themes/default/templates/FooterView.xhtml -->
	<a href="http://www.zurmo.com" id="credit-link" class="clearfix">
		<span>Copyright &#169;TCAT. All Rights reserved.</span>
	</a>
</div>
<?php $this->endContent(); ?>
