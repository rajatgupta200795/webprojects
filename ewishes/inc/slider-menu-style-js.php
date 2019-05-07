<style type="text/css">
  .wrapper {
    position:relative;
    margin:0 auto;
    overflow:hidden;
    height:300px;
}

.list {
    position:absolute;
    left:0px;
    top:0px;
    min-width:7000px;
    margin-left:12px;
    margin-top:0px;
}

.list li{
    position:relative;
    display:table-cell;
    text-align:center;
    vertical-align:middle;
}

.scroller {
  font-size:40px;
  text-align:center;
  cursor:pointer;
  display:none;
  padding-top:91px;
  white-space:no-wrap;
  vertical-align:middle;
}

.scroller-right{
  float:right;
}

.scroller-left {
  float:left;
}
</style>

<script type="text/javascript">
  var hidWidth;
var scrollBarWidths = 5;

var widthOfList = function(){
  var itemsWidth = 0;
  $('.list li').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
  return $('.list').position().left;
};

var reAdjust = function(){
  if (($('.wrapper').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
  else {
    $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
    $('.scroller-left').hide();
  }
}

reAdjust();

$(window).on('resize',function(e){  
    reAdjust();
});

$('.scroller-right').click(function() {
  
  $('.scroller-left').fadeIn('slow');
  $('.scroller-right').fadeOut('slow');
  
  $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

  });
});

$('.scroller-left').click(function() {
  
  $('.scroller-right').fadeIn('slow');
  $('.scroller-left').fadeOut('slow');
  
    $('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
    
    });
});    
</script>