// xs,smのブレイクポイントではcollapseを
// md,lg,xlのブレイクポイントではdropdownを動作させるスクリプト
Breakpoints({
  xs: {
      min: 0,
      max: 767
  },
  // Small devices (tablets)
  sm: {
      min: 576,
      max: 767
  },
  // Medium devices (desktops)
  md: {
      min: 768,
      max: 999
  },
  // Large devices (large desktops)
  lg: {
      min: 1000,
      max: 1087
  },
  xl: {
      min: 1088,
      max: Infinity
  }
});

function enableDropdown(obj){
$(obj)
.addClass('dropdown')
.find('.dropdown-md-toggle').attr('data-toggle','dropdown').addClass('dropdown-toggle').attr('href','#').end()
.find('.collapse').addClass('dropdown-menu').removeClass('collapse');
;}
function enableCollapse(obj){
var ariaCtl = $(obj).find('.dropdown-md-toggle').attr('aria-controls');
$(obj)
.removeClass('dropdown')
.find('.dropdown-md-toggle').attr('data-toggle','collapse').addClass('dropdown-toggle').attr('href', '#' + ariaCtl).end()
.find('.dropdown-menu').addClass('collapse').removeClass('dropdown-menu');
;}
// Breakpointがxs、smの場合dropdownを無効にする
Breakpoints.on('xs sm', {
    enter: function() {
        console.info('enter '+ this.name);
        enableCollapse('.dropdown-md');
    },
    leave: function() {
        console.info('leave '+ this.name);
        enableDropdown('.dropdown-md');
    }
}).on('md lg xl', {
    enter: function() {
        console.info('enter '+ this.name);
        enableDropdown('.dropdown-md');
    },
    leave: function() {
        console.info('leave '+ this.name);
        enableCollapse('.dropdown-md');
}});

// ページトップへ戻る
jQuery('#pagetop').addClass('normal');

jQuery(function(){
	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 100) {
			$('#pagetop').addClass('active').removeClass('normal');
		} else {
			$('#pagetop').removeClass('active').addClass('normal');
		}
	});
	jQuery('#pagetop').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

//
// NEWバッジを30日だけ表示
//
var elapsedDay = 30; //日数

$('time.new').each(function(){
var now = Date.now();
var dateTime = Date.parse($(this).attr('datetime'));
if(dateTime > 0 && dateTime + (1000 * 60 * 60 * 24 * elapsedDay) > now){
$(this).addClass('active');
} else {
}
});

//
// コードのコピーボタン。Tooltipとclipboard.js動作用。要素に.btnのクラスを必ず付与すること。
//
var clipboard = new ClipboardJS('.btn');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    var tooltipID = '#' + $(e.trigger).attr('aria-describedby');
    console.log(tooltipID + '=' + $(tooltipID).html());
    $('.tooltip').addClass("secondary").find('.tooltip-inner').text('コピーしました!');
    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
    $('.tooltip').addClass("danger").find('.tooltip-inner').text('コピーできませんでした!');
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$('.btn[data-toggle="tooltip"]').focusout(function(){
$('.tooltip').removeClass('secondary danger');
});
